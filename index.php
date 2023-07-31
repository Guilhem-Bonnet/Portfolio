<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Portfolio Bonnet Guilhem" name="keywords">
  <meta theme-color="#000000" name="msapplication-navbutton-color">
  <meta content="Portfolio professionnel de Bonnet Guilhem - Ingénieur informatique passionné par la programmation. Découvrez mes compétences, mes projets et mon parcours." name="description">
  <meta content="Portfolio professionnel de Bonnet Guilhem - Ingénieur informatique passionné par la programmation. Découvrez mes compétences, mes projets et mon parcours." name="og:description">
  <meta content="Portfolio Bonnet Guilhem" name="og:site_name">
  <meta content="Portfolio professionnel de Bonnet Guilhem - Ingénieur informatique passionné par la programmation. Découvrez mes compétences, mes projets et mon parcours." name="twitter:description">
  <meta content="Portfolio Bonnet Guilhem" name="twitter:title">
  <meta content="@_DevelopADream" name="twitter:site"> 
  <meta content="@_DevelopADream" name="twitter:creator"> 
  <meta content="summary_large_image" name="twitter:card">
  <meta content="https://guilhem.srvdreamer.fr/assets/img/logo_GBJ_Cercle.png" name="twitter:image">
  <meta content="https://guilhem.srvdreamer.fr/assets/img/logo_GBJ_Cercle.png" name="og:image">
  <meta content="https://guilhem.srvdreamer.fr" name="og:url">
  <meta content="website" name="og:type"> 
  <meta content="fr_FR" name="og:locale"> 
  <meta content="en_US" name="og:locale:alternate">
  <meta content="Portfolio Bonnet Guilhem" name="og:site_name">
  <meta content="Portfolio Bonnet Guilhem" name="og:title">
  <meta content="Portfolio Bonnet Guilhem" name="og:description">

  <title>Portfolio Bonnet Guilhem</title>

  <!-- Favicons -->
  <link href="assets/img/logo_GBJ_Cercle.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- ow carousel -->
  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/my-main.js" async></script>

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <?php
  require 'header.html';
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Bonnet Guilhèm Win</h1>
      <p>je suis <span class="typed" data-typed-items="Développeur XR, Chef de Projet, Développeur Web, Game programmer, Auto-Entrepreneur"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>À propos</h2>
        </div>

        <div >
          <p>Passionné par l'informatique et l'innovation je me suis lancé dans le développement. <br/> Aujourd'hui je recherche de nouveaux challenges, et de nouvelles opportunités.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <picture>
              <source type ="image/avif" srcset="assets/img/me-2.avif">
              <img src="assets/img/me-2.jpg" class="img-fluid img-profil" border-radius="10%" alt="">
            </picture>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">

            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Naissance:</strong> 30 Septembre 1998</li>
                  <!--<li><i class="icofont-rounded-right"></i> <strong>Site Web:</strong> www.example.com</li>-->
                  <li><i class="icofont-rounded-right"></i> <strong>Ville:</strong> Toulouse : France</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li ><i  class="icofont-rounded-right"></i> <strong>Age: </strong><a id="myAge"></a></li>

                  <li><i class="icofont-rounded-right"></i> <strong>Diplome:</strong> Bac+5  Expert(e) informatique et systèmes d’informations
                  </li>
                  <!--<li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>-->
                </ul>
              </div>
            </div>
            <!--<p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p>-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <script>
      //calcul Age
      let date = new Date(1998,09,30);
      var diff = Date.now() - date.getTime();
      var age = new Date(diff); 
      document.getElementById('myAge').innerHTML = Math.abs(age.getUTCFullYear() - 1970);
      
    </script>

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-vr">Vr</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-game">Game</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

      <?php

        // Lire le contenu du fichier JSON
        $jsonData = file_get_contents("donnees.json");

        // Convertir le JSON en tableau associatif PHP
        $data = json_decode($jsonData, true);

        // Parcourir le tableau et afficher les données
        foreach($data["portfolio"] as $item) {
          $path = pathinfo($item["imgSrc"], PATHINFO_DIRNAME);
          $filename = pathinfo($item["imgSrc"], PATHINFO_FILENAME);
          $newFilename = $filename . ".avif";
          $newImgSrc = $path . "/" . $newFilename;

          echo '<div class="col-lg-4 col-md-6 portfolio-item filter-' . $item["filter"] . '">';
          echo '<div class="portfolio-wrap">';
          echo '<picture>';
          echo '<source type ="image/avif" class="img-fluid" srcset="' . $newImgSrc . '">';
          echo '<img src="' . htmlspecialchars($item["imgSrc"]) . '" class="img-fluid" alt="' . htmlspecialchars($item["imgAlt"]) . '">';
          echo '</picture>';
          echo '<div class="portfolio-info">';
          echo'<h4>'.htmlspecialchars($item["id"]).' </h4><p>'.htmlspecialchars($item["infos"]).' </p>';
          echo '<div class="portfolio-links">';
          echo '<a rel="nofollow" href="' . htmlspecialchars($item["linkHref"]) . '?element=' . htmlspecialchars($item["id"]). '" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="' . htmlspecialchars($item["linkTitle"]) . '"><i class="bx bx-plus"></i></a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }

      ?>
      

        </div>

      </div>
    </section><!-- End Portfolio Section -->


<!-- ======= compétences Section ======= -->
<section id="competences" class="competences">
  <div class="container  ">
    <div class="section-title">
      <h2>Compétences</h2>
    </div>
    <div class="competences-title-white competences-title-section competences-box " >
      <h2>HARD SKILLS</h2>
    </div >

    <div class=" competences-title">
      <h2>LANGUAGES</h2>
    </div>
        <div class="competences-box  competences-title-white  " >

            <div class="competences-brut-child competences-languages">


              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Logiciel</strong> </p>
                  </li>
                  <ul>
                    <li>
                      <p>C# <br> <span class="badge badge-primary badge-pill competences-span-5xp">+5xp</span></p>

                    </li>
                    <li>
                      <p>C++ <br>  <span class="badge badge-primary badge-pill competences-span-1xp">+1xp</span></p>
                    </li>
                    <li>
                      <p>C <br>  <span class="badge badge-primary badge-pill competences-span-1xp">+1xp</span></p>
                    </li>
                    <li>
                      <p>JAVA <br> <span class="badge badge-primary badge-pill competences-span-1xp">-1xp</span></p>
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Web</strong> </p>
                  </li>
                  <ul>
                    <li>
                      <p>HTML <br> <span class="badge badge-primary badge-pill competences-span-5xp">+5xp</span></p>
                    </li>
                    <li>
                      <p>CSS <br> <span class="badge badge-primary badge-pill competences-span-3xp">+4xp</span></p>
                    </li>
                    <li>
                      <p>PHP <br> <span class="badge badge-primary badge-pill competences-span-1xp">+2xp</span></p>
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Mobile</strong> </p>
                  </li>
                  <ul>
                    <li>
                      <p>React Native <br> <span class="badge badge-primary badge-pill competences-span-1xp">-1xp</span></p>
                    </li>
                    <li>
                      <p>Flutter / Dart <br> <span class="badge badge-primary badge-pill competences-span-1xp">-1xp</span></p>
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>BDD</strong> </p>
                  </li>
                  <ul>
                    <li>
                      <p>SQL <br> <span class="badge badge-primary badge-pill competences-span-3xp">+4xp</span></p>
                    </li>
                    <li>
                      <p>NO SQL <br> <span class="badge badge-primary badge-pill competences-span-1xp">+1xp</span></p>
                    </li>
                    <li>
                      <p>SQLI <br> <span class="badge badge-primary badge-pill competences-span-1xp">-1xp</span></p>
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Autre</strong> </p>
                  </li>
                  <ul>
                    <li>
                      <p>JSON <br> <span class="badge badge-primary badge-pill competences-span-3xp">+4xp</span></p>
                    </li>
                    <li>
                      <p>XML <br> <span class="badge badge-primary badge-pill competences-span-1xp">+1xp</span></p>
                    </li>
                    <li>
                      <p>BATCH <br> <span class="badge badge-primary badge-pill competences-span-1xp">-1xp</span></p>
                    </li>
                  </ul>
                </ul>
              </div>

            </div>

        </div>
        <div class=" competences-title">
          <h2>UNITY</h2>
        <div>
        <div class="competences-box  competences-title-white  " >

            <div class="competences-brut-child competences-unity " >


              <div class="list-competences">
                <ul>
                  <li>
                     <p> <strong>Réalité virtuelle</strong> <span class="badge badge-primary badge-pill">+3 ans d'exp</span></p>
                  </li>
                        <ul>
                            <li>
                              OpenXR
                            </li>
                            <li>
                              SteamVR
                            </li>
                            <li>
                              XR Interaction ToolKit
                            </li>
                        </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Casques VR</strong> <span class="badge badge-primary badge-pill">+3 ans d'exp</span></p>
                  </li>
                  <ul>
                    <li>
                      HTC Vive
                      <ol>
                        Vive Pro
                      </ol>
                      <ol>
                        Vive Cosmos
                      </ol>
                      <ol>
                        Vive Focus
                      </ol>
                    </li>
                    <li>
                      Oculus
                    </li>
                    <li>
                      Pico
                    </li>
                    <li>
                      Hp Reverb G2
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Game Designer</strong> <span class="badge badge-primary badge-pill">+2 ans d'exp</span></p>
                  </li>
                  <ul>
                    <li>
                      Environnement
                    </li>
                    <li>
                      URP
                    </li>
                    <li>
                      HDRP
                    </li>
                  </ul>
                </ul>
              </div>

              <div class="list-competences">
                <ul>
                  <li>
                    <p> <strong>Gameplay Programmer</strong> <span class="badge badge-primary badge-pill">+3 ans d'exp</span></p>
                  </li>
                  <ul>
                    <li>
                      Scripting
                    </li>
                    <li>
                      Optimisation
                    </li>
                    <li>
                      Système de débug
                    </li>
                    <li>
                      Analytics
                    </li>
                    <li>
                      Architecture
                    </li>
                  </ul>
                </ul>
              </div>

            </div>

        </div>



        <div class="competences-box competences-logiciel">
          <div class=" competences-title competences-title-dark">
            <h2>COMPÉTENCES LOGICIEL</h2>
          <div>
            <div class="bg-light ">
              <div class="competences-logiciel-padding-left" >

                <div class="list-competences">
                  <ul>
                    <li>
                      <p> <strong>Outils</strong> </p>
                    </li>
                    <ul>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-Git" src="assets/img/icons/Git-Icon-1788C.png"> Git</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-GitHub" src="assets/img/icons/github.png"> GitHub</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-GitLab" src="assets/img/icons/gitlab.png"> Git Lab</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-Git-Kraken" src="assets/img/icons/git-kraken.png"> Git kraken</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-Unity" src="assets/img/icons/unity.png"> Unity</span>
                      </li>
                    </ul>
                  </ul>
                </div>

                <div class="list-competences">
                  <ul>
                    <li>
                      <p> <strong>IDE</strong></p>
                    </li>
                    <ul>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-VS" src="assets/img/icons/Visual-Studio-Logo.png">Visual studio</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-VSCode" src="assets/img/icons/visualstudiocode.png"> Visual code</span>
                      </li>
                      <li>
                        <span class="badge   badge-pill"><img class="icon" alt="icon-IntelliJ" src="assets/img/icons/IntelliJ_IDEA_Icon.svg.png"> Intellij IDEA</span>
                      </li>
                    </ul>
                  </ul>
                </div>

                <div class="list-competences">
                  <ul>
                    <li>
                      <p> <strong>Serveur</strong></p>
                    </li>
                    <ul>
                      <li>
                        <span class="badge badge-pill"><img class="icon" src="assets/img/icons/linux.png"> Linux</span>
                      </li>
                      <li>
                        <span class="badge badge-pill"><img class="icon" src="assets/img/icons/debian.png">Debian</span>
                      </li>
                      <li>
                        <span class="badge badge-pill"><img class="icon" src="assets/img/icons/ubuntu.png"> Ubuntu</span>
                      </li>
                      <li>
                        <span class="badge badge-pill"><img class="icon" src="assets/img/icons/proxmox_logo.png"> Proxmox</span>
                      </li>
                      <li>
                        <span class="badge badge-pill"><img class="icon" src="assets/img/icons/docker.png"> Docker</span>
                      </li>
                    </ul>
                  </ul>
                </div>


              </div>
            </div>
          </div>
  </div>
</section><!-- End competences Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resumé</h2>
        </div>

        <div>
          <p>Bien que j'ai un profil axé XR je suis ouvert au challenge technique divers et je suis prêt à m'investir dans toutes les technologies</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sommaire</h3>
            <div class="resume-item pb-0">
              <h4>Guilhèm Bonnet</h4>
              <ul>
                <li>31000, Toulouse</li>
                <li>guilhem.bonnetjalabert@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master Expert(e) informatique et systèmes d’informations</h4>
              <h5>2020 - 2022</h5>
              <p><em>Ynov Toulouse Campus, Toulouse, France</em></p>
              <ul>
                <li>> Management / Gestion de Projet</li>
                <li>> Chef de projet d'une équipe de 12 personnes avec des secteurs variés</li>
                <li>> Methode agile Kanban/Scrum (Jira / Trello)</li>
                <li>> Memoire sur le thème <b>"Une qualité de service IT dans le domaine de la réalité virtuelle"</b></li>
                <li>> Java avancé</li>
                <li>> Projets en situation professionnelle <a class="scrollto" href="index.php#portfolio">Neverest (2ans)</a></li>
              </ul>
     
            </div>
            <div class="resume-item">
              <h4>Bachelor développeur logiciel</h4>
              <h5>2019 - 2020</h5>
              <p><em>Ynov Toulouse Campus, Toulouse, France</em></p>
              <ul>
                <li>> Android / IOS</li>
                <li>> Conception d’applications métiers</li>
                <li>> Sécurité des logiciels et applications mobiles</li>
                <li>> Java avancé</li>
                <li>> .NET avancé</li>
                <li>> Projets en situation professionnelle</li>
                <li>> Programmation jeux vidéo</li>
              </ul>
       
            </div>
            <div class="resume-item">
              <h4>BTS SIO Système informatique aux organisations</h4>
              <h5>2017 - 2019</h5>
              <p><em>Marie Curie, Tarbes, France</em></p>
                <ul>
                  <li>> Langage Objet | php / C#</li>
                  <li>> Architecture logiciel | MCD / MLD</li>
                  <li>> Base de données | SQL</li>
                  <li>> Réseaux / Serveur / Virtualisation</li>
                  <li>> Web</li>
                  <li>> Windev</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Expérience professionnelle</h3>
            <div class="resume-item">
              <h4>Auto-Entrepreneur</h4>
              <h5>2022 - Aujourd'hui | à distance</h5>
              <h6>DevelopADream .  Auto-Entrepreneur</h6>
              <p><em>Toulouse, France</em></p>
              <p>Actuellement en statut d'auto-entrepreneur, je réalise de nombreux projets polyvalents sur des contextes variés :</p>
              <ul>
                <li># Conception & création de sites web</li>
                <li># Développement de jeux mobiles, PC & VR</li>
                <li># Approfondissement et enrichissement des connaissances avec de la veille technologique</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Responsable du service VR</h4>
              <h5>2019 - 2022 | sur site / à distance</h5>
              <h6>Otidea . Contrat en alternance</h6>
              <p><em>Tarbes, France</em></p>
              <ul>
                <li># Responsable des projets VR de l'entreprise / Contact avec les clients / Gestion des incidents / Installation des produits. </li>
                <li># Création de 3 jeux Flipper VR (avec la structure électrique et physique), allant du prototype jusqu'à une version prête pour livraison. Gestion des différents membres qui ont fait partie de mon équipe (2-4 personnes). </li>
                <li># Mise en place d'un écosystème Agile avec un système CI/CD en plus d'un environnement DevOps dans un système anciennement Cycle en V. </li>
                <li># Maintien et suivi de la documentation sur tous les projets en cours. </li>
                <li># Réalisation d'expériences en VR la visite d'une centrale hydroélectrique et son histoire (retrouvez-vous en haut des Pyrénées en VR) ou encore un simulateur de tremblement de terre couplé avec la VR.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Développeur VR</h4>
              <h5>2019 - 2019 | sur site</h5>
              <h6>Otidea . CDD</h6>
              <p><em>Tarbes, France</em></p>
              <p>Gestion d'une équipe de 4 personnes dans un modèle agile sur un projet d'AR/VR</p>
              <ul>
                <li># Création d'une expérience de visite VR pour une centrale hydroélectrique.</li>
                <li># Optimisation d'un projet pour Rift vers une version pour Pico Neo 1,2 et Oculus Quest 1.</li>
                <li># Gestion d'équipe de 2-4 personnes.</li>
                <li># Recherche sur la récente évolution des technologies VR et des dangers intrinsèque.</li>
                <li># Réalisation d'un circuit de visite avec documentation.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Développeur</h4>
              <h5>2019 (3 mois) | sur site</h5>
              <h6>Otidea . Stage</h6>
              <p><em>Tarbes, France</em></p>
              <ul>
                <li># Élaboration d'un jeu VR pour l'Oculus GO</li>
                <li># Challenge d'optimisation pour la physique & la mémoire & le visuel</li>
                <li># Mise en place d'une campagne de sensibilité écologique par le biais d'une expérience immersive de réalité virtuel</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Développeur Full Stack</h4>
              <h5>2017 (1 mois) | sur site</h5>
              <h6>PCR Communication - Agence de com 360° . Stage</h6>
              <p><em>Tarbes, France</em></p>
              <ul>
                <li># Création d'un serveur Web Local avec un Debian permettant de faire du Wordpress</li>
                <li># Ajout d'un Nextcloud pour un cloud Local</li>
                <li># Gestion de la sécurité (Nextcloud LAN / Wordpress WLAN)</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->
    
    <!-- ======= Hobbies Section ======= -->
    <section id="Hobbies" class="hobbies">
      <div class="container">

        <div class="section-title">
          <h2>Hobbies</h2>
          <h3>Quel est l'intérêt d'un hobbies ?</h3>
          <p>À mon sens, les hobbies jouent un rôle essentiel pour bien me connaître. Ils reflètent mes passions, mes intérêts et ma personnalité. En partageant mes hobbies, je favorise des échanges authentiques et offre l'opportunité de mieux comprendre qui je suis réellement, au-delà de ma vie professionnelle.</p>
        </div>

        <!-- Carousel -->
        <div id="carouselHobbies" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselHobbies" data-slide-to="0" class="active"></li>
            <li data-target="#carouselHobbies" data-slide-to="1"></li>
          </ol>

          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="row">
                <!-- Card 1 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/chess.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Stratégie</h5>
                      <p class="card-text">
                      La stratégie est un domaine qui m'anime profondément. J'ai une passion pour l'exploration des mécanismes complexes de résolution de problèmes et la recherche de voies innovantes pour atteindre mes objectifs. Que ce soit dans des jeux de société, des jeux vidéo ou même dans des situations réelles, j'adore m'immerger dans des défis stratégiques. La stratégie m'offre un terrain fertile pour la créativité et l'imagination, me permettant d'envisager des possibilités incroyables et des approches uniques. Je trouve une grande inspiration dans les stratèges historiques qui ont créé des victoires remarquables à travers des batailles burlesques et étonnantes. La stratégie est un hobby qui continue à nourrir ma curiosité et à me pousser à repousser mes propres limites intellectuelles.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/agile.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Management</h5>
                      <p class="card-text">
                      Le domaine du management suscite en moi une véritable passion. Bien que je ne l'exerce pas actuellement, j'ai un profond intérêt pour le rôle du manager et la façon dont il peut aider son équipe à atteindre son plein potentiel. J'admire la capacité du manager à créer un environnement de travail favorable, à favoriser la collaboration et à permettre à chacun de donner le meilleur de lui-même. À l'avenir, si je viens à me lasser du développement informatique, je pourrais envisager d'explorer le domaine du management pour mettre en pratique ces compétences et aider les autres à réussir. C'est un domaine qui me fascine par son impact sur l'efficacité de l'équipe et sa capacité à favoriser une culture de travail dynamique et harmonieuse.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/gaming.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Gaming et Développement</h5>
                      <p class="card-text">
                      En tant que développeur, je considère le gaming comme une partie essentielle de mon identité professionnelle. Pour créer des expériences immersives et innovantes, il est crucial de comprendre la dynamique des jeux vidéo et d'être passionné par cet univers. En tant que gamer, je suis constamment à l'affût des dernières tendances, des nouvelles technologies et des mécanismes de jeu émergents. Cette passion me pousse à repousser les limites et à créer des expériences uniques pour les joueurs.
                    </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <!-- Card 4 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/dev.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Tech et Avancées dans le Domaine de l'Informatique</h5>
                      <p class="card-text">
                        La technologie et les avancées constantes dans le domaine de l'informatique m'enthousiasment au plus haut point. Les domaines de l'IoT, de l'informatique quantique, de l'intelligence artificielle, de la réalité virtuelle, et bien d'autres, sont des sources inépuisables d'inspiration et de défis intellectuels. Je suis constamment en quête de nouvelles connaissances et je m'efforce de rester à jour avec les dernières tendances technologiques. Cette fascination pour la tech me pousse à contribuer activement au développement de solutions innovantes et à explorer les frontières de l'informatique.
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/jap.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Mangas, Culture Japonaise et Webtoon</h5>
                      <p class="card-text">
                        Les mangas, la culture japonaise et les Webtoons sont pour moi une source d'évasion et d'inspiration. Leurs histoires captivantes et leurs dessins uniques créent un monde fantastique où l'imagination n'a pas de limite. Je suis fasciné par la façon dont ces médias réussissent à transmettre des émotions profondes et à aborder des sujets variés, allant de l'aventure épique à l'introspection personnelle. Ils ont nourri ma créativité et m'ont incité à explorer différentes formes d'expression artistique.
                      </p>                    
                    </div>
                  </div>
                </div>
                <!-- Card 6 -->
                <div class="col-sm-12 col-md-6 col-lg-4">
                  <div class="card">
                    <img class="card-img-top" src="assets/img/voyage.gif" alt="game image cap">
                    <div class="card-body">
                      <h5 class="card-title">Voyages et Découverte de Nouvelles Cultures et Paysages</h5>
                      <p class="card-text">
                        Depuis toujours, j'ai été captivé par l'idée d'explorer le monde et de m'immerger dans de nouvelles cultures. Les voyages sont bien plus qu'une simple passion pour moi, ils sont une source infinie d'inspiration et d'enrichissement personnel. Chaque nouvelle destination me permet de découvrir des paysages à couper le souffle, des traditions uniques et des modes de vie différents. À travers mes voyages, j'ai appris à apprécier la diversité de notre planète et à développer une ouverture d'esprit qui m'influence tant sur le plan personnel que professionnel.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fin Carousel -->

      </div>
    </section>
<!-- End Hobbies Section -->


    
    <!-- ======= Contact Section ======= -->
    <!-- 
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row" data-aos="fade-in">


          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    -->
    <!-- End Contact Section -->
  
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
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!--owl carousel default naviguation-->

  <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>



  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>