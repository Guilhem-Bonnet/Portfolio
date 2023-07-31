<?php

$logfile = "deploy_log.txt";

function log_entry($message) {
    global $logfile;
    $date = date("Y-m-d H:i:s");
    file_put_contents($logfile, $date . " - " . $message . "\n", FILE_APPEND);
}

$secret = "cfJzk5^Gjq6jw&yW";
$signature = isset($_SERVER['HTTP_X_HUB_SIGNATURE']) ? $_SERVER['HTTP_X_HUB_SIGNATURE'] : null;

function verify_github_webhook($data, $signature, $secret) {
    return 'sha1=' . hash_hmac('sha1', $data, $secret) === $signature;
}

$payload = file_get_contents('php://input');

if (verify_github_webhook($payload, $signature, $secret)) {
    $output = [];
    $return_var = 0;
    exec('cd /home/u163506341/domains/srvdreamer.fr/public_html/guilhem && git pull 2>&1', $output, $return_var);

    $command_result = implode("\n", $output);
    
    if($return_var !== 0) {
        log_entry("Erreur lors de l'exécution de git pull: " . $command_result);
        echo "Erreur lors de la mise à jour du dépôt";
    } else {
        log_entry("Déployé avec succès: " . $command_result);
        echo "Déployé avec succès";
    }
    
} else {
    log_entry("Accès non autorisé");
    header('HTTP/1.1 403 Forbidden');
    echo "Accès non autorisé";
}

?>
