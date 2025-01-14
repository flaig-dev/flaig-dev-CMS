﻿<?php
// Include config file
require_once "includes/db.php";
include_once 'includes/dbPDO.php';
include_once 'classes/subject.php';

$database = new Database();
$db = $database->getConnection();

$items = new Subject($db);

$stmt = $items->getSubjects();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="WEBD-325-45 Project- Public Home" />
  <meta name="author" content="Matthew R. Flaig" />
  <title>Branding</title><!--Future DB Content-->
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Branding</a><!--Future DB Content-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?php   while($row = $stmt->fetch()) {
          echo "
          <li class='nav-item'><a class='nav-link' href='subject.php?id={$row['id']}'>" . $row['title'] . "</a></li>"; //Will need Page href
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page header with logo and tagline-->
  <header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
      <div class="text-center my-5">
        <h1 class="fw-bolder">Branding</h1><!--Future DB Content-->
        <p class="lead mb-0">Flavor Text Branding</p><!--Future DB Content-->
      </div>
    </div>
  </header>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div><!--Future DB Content-->
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</html>