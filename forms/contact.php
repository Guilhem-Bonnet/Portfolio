<?php
require_once(__DIR__ . '/vendor/autoload.php');
use \Mailjet\Resources;

const API_PUBLIC_KEY = '****************************1234';
const API_PRIVATE_KEY = '****************************abcd';
$mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $body = [
        'Messages' => [
            [
                'From' => [
                    'Email' => "EMAIL",
                    'Name' => "NAME"
                ],
                'To' => [
                    [
                        'Email' => "EMAIL",
                        'Name' => "NAME"
                    ]
                ],
                'Subject' => "SUJECT",
                'TextPart' => 'TEXT EMAIL',
                'HTMLPart' => "TEXT EMAIL",
                'CustomID' => "AppGettingStartedTest"
            ]
        ]
    ];
    $response = $mj->post(Resources::$Email, ['body' => $body]);
    $response->success();
    echo "Email envoyé avec succès !";
  }
  else{
    echo "Email non valide";
  }

} else {
  header('Location: ../index.php');
  die();
}

