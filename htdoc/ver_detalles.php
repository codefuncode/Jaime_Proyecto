<!--
Condicional para detectar la galleta
insertada en el navegador "Cooke"
-->
<?php if (!isset($_COOKIE["user"])):
   header("Location: page-login.php");?>
		   <?php else: ?>

<!DOCTYPE html>
<html lang="en">
   <!--
   Cabecera del documento incluye enlace a hojas externas y etiquetas meta entre otros
   -->
   <?php include_once "comp/head.php";?>
   <body>
      <!--  Componente previo a la carga total del; fichero actual  -->
      <?php include_once "comp/preloader.php";?>
      <div id="main-wrapper">
         <div class="nav-header">
            <a class="brand-logo" href="index.html">
               <img alt="" class="logo-abbr" src="./images/logo.png"/>
               <img alt="" class="logo-compact" src="./images/logo-text.png"/>
               <img alt="" class="brand-title" src="./images/logo-text.png"/>
            </a>
            <div class="nav-control">
               <div class="hamburger">
                  <span class="line">
                  </span>
                  <span class="line">
                  </span>
                  <span class="line">
                  </span>
               </div>
            </div>
         </div>
         <!--  Cabecera del documento  -->

         <?php include_once "comp/header.php";?>

         <!--
         Menú contiene solo la barra lateral y ademas enlaces de navegación
         -->
         <?php include_once "comp/menu.php";?>

         <div class="content-body">

         </div>
         <!--  Pie de la pagina web o aplicación  -->
         <?php include_once "comp/footer.php";?>
      </div>
      <!--
      Contiene enlaces a ficheros externos de JavaScript
      -->
      <?php include_once "comp/javascript_pie.php";?>
   </body>
</html>
<?php endif;?>
