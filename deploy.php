<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$secret = "cfJzk5^Gjq6jw&yW"; // Créez un secret pour sécuriser votre webhook
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];

// Vérifiez que la demande provient bien de GitHub
function verify_github_webhook($data, $signature, $secret) {
    return 'sha1=' . hash_hmac('sha1', $data, $secret) === $signature;
}

$payload = file_get_contents('php://input');
if (verify_github_webhook($payload, $signature, $secret)) {
    // Exécutez git pull
    exec('cd /home/u163506341/domains/srvdreamer.fr/public_html/guilhem && git pull');
    echo "Déployé avec succès";
} else {
    header('HTTP/1.1 403 Forbidden');
    echo "Accès non autorisé";
}
?>
