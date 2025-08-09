<?php
session_start();
error_reporting(0);
include('dbconnection.php');
if (strlen($_SESSION['login_id']==0)) {
  header('location:logout.php');
} else {
  $id = $_SESSION['login_id'];

  if(isset($_POST['submit']))
  {
    $img=$_FILES['img']['name'];
    $img_name = "uploaded_image.jpg";
    $target_dir = "Disease Image/";
    $target_file = $target_dir . $img_name;
    move_uploaded_file($_FILES['img']['tmp_name'],$target_dir.$img_name);
    $output = shell_exec("python test.py");
  }
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
      <div class="col-md-12">
        <form method="POST" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <label class="mt-2">Upload Image</label>
                <input class="form-control" type="file" name="img" accept="image/*" onchange="loadFile(event)">

                <div class="d-flex justify-content-center mt-3">
                    <img src="assets/img/blank.png" id="output" class="mt-4" width="350" height="250"/>
                </div>

                <div class="d-flex justify-content-center mt-3">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-title">
                <h3>Result</h3>
            </div>
            <div class="card-body">
                <?php 
                    $query1=mysqli_query($con,"select * from tbl_result");
                    while($row1=mysqli_fetch_array($query1)){
                ?>
                <textarea class="form-control" name="description" id="description" rows="5" cols="50"><?php echo $row1['result']; ?></textarea>
            <?php } ?>
            </div>
        </div>
        </form>
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
    
  <script>
    var loadFile = function(event) {
      var image = document.getElementById('output');
      image.src=URL.createObjectURL(event.target.files[0]);
    };
  </script>

</body>

</html>
<?php } ?>