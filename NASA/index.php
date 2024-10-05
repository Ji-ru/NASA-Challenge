<?php
include 'templates/header.php';
include 'templates/navbar.php';
?>

<style>
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
</style>
<body>
<gmp-map-3d
      center="7.84925557906087, 125.0509561613793"
      tilt="50"
      min-altitude="1000"
    ></gmp-map-3d>
    <script
      async
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8rlfEG9wu6xJaKgcNKp-9_Y0BxxX22bs&v=alpha&libraries=maps3d"
    ></script>
</body>

<?php
include 'templates/footer.php';
?>