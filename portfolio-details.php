<?php
// Lire le contenu du fichier JSON
$jsonData = file_get_contents("donnees.json");

// Vérifier si le fichier JSON a été lu avec succès
if ($jsonData === false) {
  // Rediriger vers la page d'erreur 404
  header("Location: 404.php");
  exit;
}

// Convertir le JSON en tableau associatif PHP
$data = json_decode($jsonData, true);

// Vérifier si le JSON a été parsé avec succès
if ($data === null) {
  // Rediriger vers la page d'erreur 404
  header("Location: 404.php");
  exit;
}

// Vérifier si la clé 'portfolio-details' existe dans le tableau JSON
if (!array_key_exists('portfolio-details', $data)) {
  // Rediriger vers la page d'erreur avec le message d'erreur
  header("Location: error.php?message=" . urlencode("La clé 'portfolio-details' n'existe pas dans le JSON."));
  exit;
}

$elementName = $_GET['element'] ?? null;

try {
  $portfolioDetails = $data['portfolio-details'];

  // Vérifier si l'élément existe dans le tableau JSON
  $elements = array_column($portfolioDetails, $elementName);

  if (!empty($elements)) {
    $element = $elements[0];
    $descriptionUrl = $element["descriptionUrlText"];
    $projectUrl = $element["projectUrl"] ?? null;
    $client = $element["client"] ?? null;
    $projectDate = $element["projectDate"] ?? null;

    $category = $element["category"] ?? null;
    $support = $element["support"] ?? null;

    $tools = $element["tools"] ?? null;
    $langage = $element["langage"] ?? null;
    $projectName = $element["projectName"] ?? null;
    $developedDuringMy = $element["developedDuringMy"] ?? null;
    $githubLink = $element['githubLink'] ?? null;

    $gameEngine = $element['gameEngine'] ?? null;
    $engineVersion = $element['engineVersion'] ?? null;
    $enginePipeline = $element['enginePipeline'] ?? null;
    $articles = $element['articles'] ?? null;




  } else {
    throw new Exception("L'élément n'existe pas.");
  }
} catch (Exception $e) {
  // Rediriger vers la page d'erreur avec le message d'erreur
  header("Location: error.php?message=" . urlencode($e->getMessage()));
  exit;
}

$description;
if ($descriptionUrl!=null){
  //lis le fichié txt
  $description=file_get_contents($descriptionUrl);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php echo'<title>'.$projectName.' Details</title>'?>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
/* Définition de la couleur noire par défaut pour les éléments h2 */
  h2,h3 {
    color: black;
  }
</style>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <?php
  require 'header.html';
  ?>
  <!-- End Header -->

  

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <?php
          echo '<h2>'.$projectName.' Details</h2>';
          echo '<ol>';
            echo '<li><a href="index.php#portfolio">Home</a></li>';
            echo '<li>'.$projectName.' Details</li>';
          ?>
            </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
          <?php
              $fileTypes = array(
                'jpg',
                'png',
                'webp',
                'avif'
              );
              
              // Parcourir les éléments du carousel
              foreach($element["elementCarousel"] as $key => $value) {
                $fileType = pathinfo($value, PATHINFO_EXTENSION); // Récupérer l'extension du fichier

                $path = pathinfo($value, PATHINFO_DIRNAME);
                $filename = pathinfo($value, PATHINFO_FILENAME);
                $newFilename = $filename . ".avif";
                $newImgSrc = $path . "/" . $newFilename;

                // Vérifier si l'élément est une image
                if(in_array($fileType, $fileTypes)) {
                  // Imprimer la balise HTML pour l'image
                  echo'<picture>';
                  echo '<source srcset="' . $newImgSrc . '" type="image/avif">';
                  echo '<img src="' . $value . '" class="img-fluid carousel-item" alt="' . $key . '">';
                  echo '</picture>';
                }
                
                // Vérifier si l'élément est une vidéo youtube
                if(strpos($value, 'youtu') !== false && strpos($value, 'http') !== false) {
                  // Imprimer la balise HTML pour la vidéo
                  echo '<iframe width="100%" height="600" src="' . $value . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                }
              }  
              ?>

          </div>

          <div class="portfolio-info">
          <h3><?= $projectName ?> information</h3>
          <ul>
              <?php if (!empty($githubLink)): ?>
                <div class="social-links mt-3 text-center">
                  <li><a href="<?= $githubLink ?>" target="_blank" class="github"><i class="bx bxl-github"></i></a>
                </div>
              <?php endif; ?>

              <li><strong>Categorie</strong>: <?= $category ?></li>

              <?php if (!empty($client)): ?>
                  <li><strong>Client</strong>: <?= $client ?></li>
              <?php endif; ?>

              <li><strong>Date du projet</strong>: <?= $projectDate ?></li>

              <?php if (!empty($projectUrl)): ?>
                  <?php $displayUrl = strlen($projectUrl) > 30 ? substr($projectUrl, 0, 30) . "..." : $projectUrl; ?>
                  <li><strong>URL du projet</strong>: <a href="<?= $projectUrl ?>" target="_blank"><?= $displayUrl ?></a></li>
              <?php endif; ?>


              <?php if (!empty($developedDuringMy)): ?>
                  <li><strong>Développé à l'occasion de</strong>: <?= $developedDuringMy ?></li>
              <?php endif; ?>

          </ul>

          </div>
        </div>

        <div class="portfolio-description">
          <div class="row">
            <div class="col-left">
              <ul>
                <?php if (!empty($gameEngine)): ?>
                  <li><strong>Game Engine</strong>: <?= $gameEngine ?></li>
                <?php endif; ?>
                <?php if (!empty($engineVersion)): ?>
                  <li><strong>Version</strong>: <?= $engineVersion ?></li>
                <?php endif; ?>
                <?php if (!empty($enginePipeline)): ?>
                  <li><strong>Pipeline</strong>: <?= $enginePipeline ?></li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="col-right">
              <ul>
                <?php if (!empty($langage)): ?>
                  <li><strong>Langage</strong>: <?= $langage ?></li>
                <?php endif; ?>
                <?php if (!empty($support)): ?>
                  <li><strong>Support</strong>: <?= $support ?></li>
                <?php endif; ?>
              </ul>
            </div>
          </div>

          <h2><?= $projectName ?> </h2>

          <?php
          if (!empty($description)){
              
            if (strpos($description, '<') === 0) { //vérifie si le texte est balisé ou non
              
              echo strip_tags($description, '<p><br><b><i><u><strong><em><ul><ol><li><a><img><blockquote><pre><code><h1><h2><h3><h4><h5><h6><hr>'); // affiche le contenu de $description dans un paragraphe
            } else {
              echo '<p>' . strip_tags($description, '<br>') . '</p>'; // ajoute des balises <p> autour du contenu de $description
            }

          }
          

          if(!empty($articles)){
            echo"<h2>Articles</h2>";
            foreach($element["articles"] as $key => $value){
              echo '<a href="' . $value['url'] . '" target="_blank">' . $value['titre'] . '</a><br/>';
            }
          }
          ?>
          
        </div>
    
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
  require 'footer.php';
?>
<!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>