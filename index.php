<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Ípsillon | Y</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="HTML5 website template">
  <meta name="keywords" content="inovação, tecnologia, startup, CRM, Informação,, Digital">
  <meta name="author" content="Ípsillon">
  <link rel="stylesheet" type="text/css" href="assets/css/viewScroller.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
  <div id="particles-js"></div>
  <div id="copyright">
    &copy; Ípsillon, Inc. Todos os direitos reservados.
  </div>
  <div class="mainbag">

    <?PHP include "capa.php";?>
    
    <?php include("perfil.php");?>
    <section vs-anchor="perfil" id="perfil" class="mainview">
      Perfil
      <div class="subbag">
        <div vs-anchor="perfilpessoas" class="subview">Pessoas
          <img src="assets/img/y/pessoas.jpg">
        </div>
        <div vs-anchor="perfilprocessos" class="subview">Processos
          <img src="assets/img/y/processos.jpg">
        </div>
        <div vs-anchor="perfiltecnologia" class="subview">
          Tecnologia
            <img src="assets/img/y/robozinho.png">
        </div>
      </div>
    </section>
    <?php include("modelo.php");?>
    <section vs-anchor="modelo" id="modelo" class="mainview">
      Modelo de Negócio
      <div class="subbag">
        <div vs-anchor="modelodesc" class="subview">Canvas
        </div>
        <div vs-anchor="modelocanvas" class="subview">Canvas
        </div>
      </div>
    </section>
    <?php include("oque.php");?>
    <section vs-anchor="oque" id="oque" class="mainview">
      O que fazemos
      <div class="subbag">
        <div vs-anchor="oquetd" class="subview">Transformação Digital
        </div>
        <div vs-anchor="oquepdi" class="subview">Pesquisa, Desenvolvimento e Inovação
        </div>
        <div vs-anchor="oquecrm" class="subview">Inteligêcia de Mercado (CRM)
        </div>
        <div vs-anchor="oqueapps" class="subview">Aplicações e Plataformas
        </div>
      </div>
    </section>
    <?php include("contato.php");?>
    <section vs-anchor="contato" id="contato" class="mainview">Contato</section>
    <?php include("saibamais.php");?>
    <section vs-anchor="saibamais" id="saibamais" class="mainview">Saiba Mais</section>
  </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Scroll -->
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.mousewheel.min.js"></script>
  <script src="assets/js/viewScroller.js"></script>

  <!-- Particles scripts -->
  <script src="assets/js/particles.js"></script>
  <script src="assets/js/app.js"></script>
  <!-- <script src="https://kit.fontawesome.com/22eb19dd33.js"></script> -->


  <script>
    $(document).ready(function () {

      // Sets viewScroller with sample events
      $('.mainbag').viewScroller({
        useScrollbar: false,
        beforeChange: function () {
          console.log('beforeChange fired!');
          return false; // It means that views change will be terminated
        },
        afterChange: function () {
          console.log('afterChange fired!');
        },
        beforeResize: function () {
          console.log('beforeResize fired!');
        },
        afterResize: function () {
          console.log('afterResize fired!');
        },
        loopMainViews: true, // Change horizontal views (mainviews) in loop mode
        loopSubViews: true, // Change vertical views (subviews) in loop mode

      });

      // Sets start params for MENU
      $('.mainbag').css({
      });
      $.fn.viewScroller.setSpaceMainBag(0); // Sets 140px space for MENU


      // Show / hide menu panel
      $('#hidePanel').on('click', function () {
        if ($('.panel').css('display') !== 'none') {
          $('#hidePanel').text('>>');
          $('.panel').hide();
          $('.mainbag').css({
            'left': '0px'
          });
          $.fn.viewScroller.setSpaceMainBag(0); // sets mainbag's width when panel is closed
        } else {
          $('#hidePanel').text('<<');
          $('.panel').show();
          $('.mainbag').css({

          });
          $.fn.viewScroller.setSpaceMainBag(140); // sets mainbag's width when panel is open
        }
      });

      // Turnon / turnoff the scroll views when they are animate
      $('#scroll').on('click', function () {
        if ($('#scroll').prop("checked")) {
          $.fn.viewScroller.setChangeWhenAnim(true);
        } else {
          $.fn.viewScroller.setChangeWhenAnim(false);
        }
      });

    });
  </script>

</body>

</html>