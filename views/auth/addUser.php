<?php
    $success='<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Enregistrement effectué avec succès
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                ';
    $erreur_mdp='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Les mots de passe ne sont pas identique!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
    $erreur_doublon='<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Cet addresse mail existe déjà dans la bas de donnée!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="public/assets/img/favicon.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="public/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php
        if (isset($_GET["success"])) {
            echo $success;
        }
        if (isset($_GET["erreurMdp"])) {
            echo $erreur_mdp;
        }
        if (isset($_GET["erreurDoublon"])) {
            echo $erreur_doublon;
        }
    ?>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="public/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Creez un utilisateur</h5>
                    <p class="text-center small">Entrez vos informations personnelle pour creer l'utilisateur</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="index.php?controller=Auth&action=signUp" method="post">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Nom</label>
                      <input type="text" name="nom" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Entrez votre nom s'il vous plaît!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Prenom</label>
                      <input type="text" name="prenom" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Entrez votre prenom s'il vous plaît!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="mail_user" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Entrez votre mail s'il vous plaît!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="pw1" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrez un mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Confirmez le mot de passe</label>
                      <input type="password" name="pw2" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Confirmez le mot de passe s'il vous plaît!</div>
                    </div>

                    <div class="col-12">
                        <select id="inputState" class="form-select" name="type">
                            <option selected value="Admin">Administrateur</option>
                            <option value="secretaire">secretaire / Caissiaire</option>
                        </select>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                    <input type="submit" class="btn btn-primary w-100" value="S'inscrire" name="btn">
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous avez déjà un compte? <a href="index.php?controller=Auth&action=login">Connectez-vous</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="public/assets/vendor/quill/quill.js"></script>
  <script src="public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

</body>

</html>