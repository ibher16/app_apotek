<?php
session_start();
include("models/konek.php");

include("view/func.php");

?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="snet/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>APP APOTEK</title>

  <meta name="description" content="" />

  <?php include('template/snet/scss/css-info.php'); ?>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <?php include('view/index/menu.php'); ?>

      <!-- Layout container -->
      <div class="layout-page">
        <?php include('view/index/header.php'); ?>

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <?php include('view/halaman.php'); ?>

          <?php include('view/index/footer.php'); ?>

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->
  <?php include('template/snet/js/js-info.php'); ?>
</body>

</html>