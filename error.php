<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Page d'erreur</title>
</head>
<body>
  <h1>Erreur</h1>
  <?php
  $message = $_GET['message'] ?? 'Une erreur est survenue.';

  echo '<p>' . htmlspecialchars($message) . '</p>';
  ?>
</body>
</html>
