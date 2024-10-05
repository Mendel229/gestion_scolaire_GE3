<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SC-LE-VERGER</title>
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

  <style>
    .sales-card {
      width: auto;
      min-width: 250px;
      height: auto;
      background-color: #f8f8f8;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
    }

    .sales-card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 0px 10px 10px rgba(0, 0, 0, 0.2);
    }

    .sales-card .card-icon {
      font-size: 40px;
      color: #007bff;
    }

    .sales-card h6 {
      margin-top: 10px;
      font-size: 18px;
      font-weight: 600;
    }

    .sales-card span {
      font-size: 14px;
      color: #888;
    }

    /* Animation Elements */
    .animation-circle {
      position: absolute;
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background-color: #007bff;
      opacity: 0;
      z-index: -1;
    }

    .animation-circle.scale-up {
      animation: scaleUp 1s ease-in-out;
    }

    .animation-circle.fade-out {
      animation: fadeOut 1s ease-in-out;
    }

    @keyframes scaleUp {
      0% {
        transform: scale(0);
        opacity: 1;
      }

      100% {
        transform: scale(1.5);
        opacity: 0;
      }
    }

    @keyframes fadeOut {
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
      padding: 20px;
      background-color: #f8f8f8;
      border-top: 1px solid #e1e1e1;
    }

    #search-bar {
      display: none;
    }

    #icone-menu {
      display: none;
    }
  </style>
</head>

<body>

  <div class="container">
    <main>
      <!-- Votre contenu principal ici -->

      <div>
          <li>
                <span style="display:none;" id="type_user"><?php echo $_SESSION["statut"] ?></span>
          </li>
        <br/>
        <h2 class="text-primary text-center"><b>Nos fonctionnalités</b></h2><hr/>
      </div><!-- End Page Title -->

      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin comptable secretaire/caissiere censeur">
                <a href="index.php?controller=GestionScolaire&action=index">
                  <div class="card info-card sales-card" onclick="animateSalesCard(this)">

                    <div class="card-body">
                      <h5 class="card-title">GESTION SCOLAIRE</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-buildings"></i>
                        </div>
                      </div>
                    </div>

                    <!-- Animation Elements -->
                    <div class="animation-circle scale-up"></div>
                    <div class="animation-circle fade-out"></div>
                  </div>
                </a>
              </div><!-- End Sales Card -->

             
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin comptable secretaire/caissiere censeur">
                <a href="index.php?controller=GestionNote&action=index">
                  <div class="card info-card sales-card" onclick="animateSalesCard(this)">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES NOTES</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-buildings"></i>
                        </div>
                      </div>
                    </div>

                    <!-- Animation Elements -->
                    <div class="animation-circle scale-up"></div>
                    <div class="animation-circle fade-out"></div>
                  </div>
                </a>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin">
                <a href="index.php?controller=GestionPersonnel&action=ajoutPersonnelTitulaire">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DU PERSONNEL</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-person-vcard"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </a>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin comptable">
                <a href="index.php?controller=GestionStock&action=ajoutArticle">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES STOCKS</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-box-seam"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin comptable ">
                <a href="index.php?controller=GestionImmobilisation&action=ajoutImmobilisation">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES IMMOBILISATIONS</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-house-fill"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </a>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin comptable secretaire/caissiere">
                <a href="index.php?controller=GestionOperation&action=ajoutOperation">
                  <div class="card info-card sales-card">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES OPERATIONS JOURNALIERES</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-calendar-check-fill"></i>
                        </div>
                      </div>
                    </div>

                  </div>
                </a>
              </div><!-- End Sales Card -->

              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-4 admin superAdmin">
                <a href="index.php?controller=GestionUser&action=AjoutUser">
                  <div class="card info-card sales-card">
                    <div class="card-body">
                      <h5 class="card-title">Gestion des utilisateurs</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-person-vcard"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div><!-- End Sales Card -->
                            <div class="col-xxl-4 col-md-4 admin superAdmin comptable secretaire/caissiere censeur">
                <a href="index.php?controller=GestionDocument&action=ajoutDocument">
                  <div class="card info-card sales-card" onclick="animateSalesCard(this)">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES DOCUMENTS</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-buildings"></i>
                        </div>
                      </div>
                    </div>

                    <!-- Animation Elements -->
                    <div class="animation-circle scale-up"></div>
                    <div class="animation-circle fade-out"></div>
                  </div>
                </a>
              </div><!-- End Sales Card -->
 <div class="col-xxl-4 col-md-4 admin superAdmin comptable secretaire/caissiere censeur">
                <a href="index.php?controller=GestionCompte&action=ajoutClasse">
                  <div class="card info-card sales-card" onclick="animateSalesCard(this)">

                    <div class="card-body">
                      <h5 class="card-title">GESTION DES COMPTES</span></h5>

                      <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                          <i class="bi bi-buildings"></i>
                        </div>
                      </div>
                    </div>

                    <!-- Animation Elements -->
                    <div class="animation-circle scale-up"></div>
                    <div class="animation-circle fade-out"></div>
                  </div>
                </a>
              </div><!-- End Sales Card -->
            </div>
          </div>
        </div>
      </section>
    </main>
  </div><!-- Fin du container -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="public/assets/vendor/quill/quill.min.js"></script>
  <script src="public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>
  <script src="public/assets/js/affichageMenu.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

</body>

</html>
