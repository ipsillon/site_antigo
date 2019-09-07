<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ípsillon | Y</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="global, template, html, sass, jquery">
  <meta name="author" content="Bucky Maler">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />

</head>

<body>

  <!-- notification for small viewports and landscape oriented smartphones -->
  <div class="device-notification">
    <a class="device-notification--logo" href="#0">
      <img src="assets/img/y/logo_peq.png" alt="Global">
      <p>Global</p>
    </a>
    <p class="device-notification--message">Nosso site oferece uma experiência incrível, mas precisamos que você vire o
      seu dispositivo ou utilize uma tela maior. Você não vai se arrepender.</p>
    </div>
  <div id="particles-js"></div>

  <div class="perspective effect-rotate-left">
    <div class="container">

      <div class="outer-nav--return"></div>

      <div id="viewport" class="l-viewport">

        <div class="l-wrapper">
          
          <header class="header">
            <a class="header--logo" href="#0">
              <img src="assets/img/y/logo_peq.png" alt="Global">
            </a>
            <div class="header--nav-toggle">
              <span></span>
            </div>
          </header>

          <?php
            include_once('nav.php')
          ?>
          
          <ul class="l-main-content main-content">
            
            <li class="l-section section section--is-active">
              <?php
                include_once('intro.php');
              ?>
            </li>

            <li class="l-section section">
              <?php
                include_once('about.php');
              ?>
            </li>

            <li class="l-section section">
              <?php
                include_once('model.php');
              ?>
            </li>

            <li class="l-section section">
              <?php
                include_once('work.php');
              ?>
            </li>

            <li class="l-section section">
              <?php
                include_once('contact.php');
              ?>
            </li>

            <li class="l-section section">
              <?php
                include_once('plus.php');
              ?>
            </li>

          </ul>

        </div>
      </div>
    </div>
    <ul class="outer-nav">
      <li class="is-active">Início </li>
      <li>Perfil</li>
      <li>Modelo de negócio </li>
      <li>O que fazemos</li>
      <li>Contato</li>
      <li>Fale Conosco</li>
    </ul>
  </div>

  <!--layout js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="assets/js/functions-min.js"></script>
  <!--layout js-->
  
  <!-- Particles scripts -->
  <script src="assets/js/particles.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="assets/js/custom.js"></script>
  <!--<script src="https://kit.fontawesome.com/22eb19dd33.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>


</body>

</html>