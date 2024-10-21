<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>

    <!-- Favicons -->
    <link href="../../public/assets/img/favicon.png" rel="icon">
    <link href="../../public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    
    <link href="../../public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../public/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="../../public/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="../../public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../public/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../../public/assets/css/style.css" rel="stylesheet">

</head>
<body>
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Gestion Scolaire</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Dashboard</span>
    </a>
    
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
    <i class="bx bxs-edit"></i> <span>Inscriptions / Réinscriptions </span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="forms-elements.html">
          <i class="bi bi-circle"></i><span>Inscriptions</span>
        </a>
      </li>
      <li>
        <a href="forms-layouts.html">
          <i class="bi bi-circle"></i><span>Réinscription</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
    <i class="bx bx-money"></i><span>Gestion des paiements</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.html">
          <i class="bi bi-circle"></i><span>Ajouter paiement</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Consulter paiement</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
    <i class="bx bxs-user"></i><span>Utiliisateurs</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Ajouter un utilisateurs</span>
        </a>
      </li>
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Modifier un utilisateurs</span>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
    <i class="ri-settings-4-line"></i><span>Paramètres</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="charts-echarts.html">
            <i class="bi bi-circle"></i><span>Gestion des frais de scolarité</span>
            </a>
        </li>
        <li>
            <a href="charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Gestion des scolarités spéciales</span>
            </a>
        </li>
        <li>
            <a href="charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>Gestion des années scolaires</span>
            </a>
        </li>
        <li>
            <a href="charts-echarts.html">
            <i class="bi bi-circle"></i><span>Gestion des classes</span>
            </a>
        </li>
    </ul>
  </li><!-- End Charts Nav -->

  <!-- End Icons Nav -->

  <li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="users-profile.html">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-faq.html">
      <i class="bi bi-question-circle"></i>
      <span>F.A.Q</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-contact.html">
      <i class="bi bi-envelope"></i>
      <span>Contact</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-register.html">
      <i class="bi bi-card-list"></i>
      <span>Register</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->
</ul>

</aside><!-- End Sidebar-->

<script src="../../public/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../../public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../public/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../../public/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../../public/assets/vendor/quill/quill.js"></script>
  <script src="../../public/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../../public/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../../public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../public/assets/js/main.js"></script>
</body>
</html>
