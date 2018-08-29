<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Nilai Tukar Rupiah</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url('assets'); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url('assets'); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link rel="stylesheet" href="<?php echo base_url('plugins'); ?>/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="<?php echo base_url('plugins'); ?>/fullcalendar/fullcalendar.print.css" media="print">
</head>
<body>
  <nav class="grey darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><img src="<?php echo base_url('assets'); ?>/image/logo-re.png" class="responsive-img"></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>

      <div class="row center">        
        <div class="col s12">
        <img src="<?php echo base_url('assets'); ?>/image/logo.png" class="responsive-img">
        </div>
      </div>
      <div class="col s12">
<h4 class="header center grey-text text-darken-3">Prediksi Nilai Tukar Rupiah Terhadap Dollar Amerika</h4>
      <h6 class="header center grey-text text-darken-3">Menggunakan Fuzzy Time Series</h6>
        </div>
      <a class="waves-effect waves-light btn">button</a>

      <br><br>
       <div id='calendar'>
         boboy boy
       </div>

      <div class="row center">
        <div class="col s12">
          <canvas id="myChart" width="800" height="400"></canvas>
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer grey">
    <div class="container">
      <div class="row">
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="white-text text-lighten-3" href="http://materializecss.com">SrivijayaID</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="<?php echo base_url('plugins'); ?>jQuery/jquery-2.1.3.min.js"></script>
  <script src="<?php echo base_url('assets'); ?>js/materialize.js"></script>
  <script src="<?php echo base_url('assets'); ?>js/init.js"></script>
  <script src="<?php echo base_url('plugins'); ?>chartjs/Chart.js"></script>
</body>
</html>
