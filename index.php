<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Ípsillon | Y</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Startup de Transformação Digital, inteligência de negócios e modelos disruptivos.">  
  <meta name="keywords" content="Inovação, Transformação Digital, CRM, ERP, Tecnologia, Inteligência de negócios, disrupção">
  <meta name="author" content="Ípsillon | Y">
  <link rel="stylesheet" href="assets/css/main.css">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  

</head>

<body>
  <!-- Global site tag (gtag.js) - Google Analytics --><script async src="https://www.googletagmanager.com/gtag/js?id=UA-147984989-1"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'UA-147984989-1');</script>

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
            <a class="header--logo" href="/">
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
    </ul>
  </div>
  <style>
  .swal2-content{
    color:#FFF;
  }
  .swal2-styled.swal2-confirm {
    border-radius: 0;
    border: none;
  } 
  </style>

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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>
    
    document.getElementById("send_form").addEventListener("click", function(event){
      event.preventDefault()
    });

    function send() {

      var name = $('#name').val();
      var mail = $('#email').val();
      var opt1 = $('#opt-1').val();
      var opt2 = $('#opt-2').val();
      var opt3 = $('#opt-3').val();
      var opt4 = $('#opt-4').val();
      var opt5 = $('#opt-5').val();
      var opt6 = $('#opt-6').val();

      if(name == '') {
        return false;
      }

      if(mail == '') {
        return false;
      }

      $.ajax({
        type: "POST",
        url: 'form_plus.php',
        data: { nome: name, 
              email: mail ,
              op1: opt1 ,
              op2: opt2 ,
              op3: opt3 ,
              op4: opt4 ,
              op5: opt5 ,
              op6: opt6,
        },

        success: function(data) {
          
          data = JSON.parse(data);
          
          if (data.response == 'success') {
            Swal.fire({
              imageUrl: "assets/img/y/Y_semborda_grande.ai.png",
              html: "Muito obrigado!<br>Em breve entraremos em contato.",
              imageSize: '100x100',
              background: '#205e5b',
              confirmButtonText: 'Ok',
              confirmButtonColor: '#40b297'
            })
          } 
        }
      });
    }
  </script>  

</body>

</html>
