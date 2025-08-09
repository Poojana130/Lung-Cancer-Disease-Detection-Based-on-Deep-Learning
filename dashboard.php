<?php
session_start();
// error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['login_id']==0)) {
  header('location:logout.php');
} else {
  $id = $_SESSION['login_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" http-equiv="refresh" content="20">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lung Cancer Disease Detection</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/customize.css" rel="stylesheet">

  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <span class="d-flex justify-content-start" style="font-size:27px">Lung Cancer Disease Detection</span>
      </a>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

        <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <!-- <div class="pagetitle">
      <h1>Blank Page</h1>
    </div> -->

    <section class="section">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-title">
          <h3>Adenocarcinoma (Left Lower Lobe)</h3>
          </div>
          <div class="card-body">
          <p>Adenocarcinoma is the most common type of non-small cell lung cancer (NSCLC), especially 
            among non-smokers. It typically starts in the glandular cells of the lungs and often affects the outer regions of the lungs. 
            In this case, it’s located in the left lower lobe. Symptoms can include persistent cough, 
            chest pain, weight loss, and shortness of breath. This type of cancer grows slowly but can spread 
            to other parts of the body, requiring early detection for effective treatment.</p>
          </div>
        </div>

        <div class="card mt-3">
          <div class="card-title">
            <h3>Large Cell Carcinoma</h3>
          </div>
          <div class="card-body">
            <p>Large cell carcinoma is a type of NSCLC
               characterized by large, abnormal-looking cells. It can develop in any part of the lung 
               and tends to grow and spread quickly, making it more aggressive than other forms of lung cancer. 
               Symptoms include chest pain, cough, and difficulty breathing. Treatment often involves a combination of surgery,
               chemotherapy, and radiation therapy, 
               but the rapid spread makes it more difficult to manage compared to other types of lung cancer.</p>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-title">
            <h3>Normal Case</h3>
          </div>
          <div class="card-body">
            <p>In a normal, healthy lung, there are no signs of cancer or disease. The lung tissue functions properly, 
              with clear airways and healthy alveoli that facilitate the exchange of oxygen and carbon dioxide.
               There are no obstructions, tumors, or other
               abnormalities present. Normal lung function ensures proper respiratory efficiency and helps maintain the body’s overall health.</p>
          </div>
        </div>
        <div class="card mt-3">
          <div class="card-title">
            <h3>Squamous Cell Carcinoma (Left Hilum)</h3>
          </div>
          <div class="card-body">
            <p>Squamous cell carcinoma is another form of NSCLC that arises from the squamous cells lining the airways.
               It is most often linked to smoking and typically occurs near the central part of the lungs, such as the left hilum, where the airways, blood vessels, and nerves enter the lungs. 
               This type of cancer grows more slowly than others but can cause symptoms like coughing, chest pain, and hemoptysis (coughing up blood). 
              Squamous cell carcinoma is treatable with surgery, chemotherapy, and radiation, especially if detected early.</p>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <a href="detect_disease.php" class="btn btn-primary">Detect Disease</a>
        </div>
      </div>
    </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
 

</body>

</html>
<?php } ?>