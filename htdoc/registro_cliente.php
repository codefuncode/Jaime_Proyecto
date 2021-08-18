<?php if (!isset($_COOKIE["user"])):
   header("Location: page-login.php");?>
               <?php else: ?>
<!DOCTYPE html>
<html lang="en">
   <!-- gegerar id del isuario datos nombre todo -->
   <?php include "comp/head.php";?>
   <body>
      <div id="preloader">
         <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1">
            </div>
            <div class="sk-child sk-bounce2">
            </div>
            <div class="sk-child sk-bounce3">
            </div>
         </div>
      </div>
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
     <?php include "comp/header.php";?>
         <?php include "comp/menu.php";?>
         <!--**********************************
            Sidebar end
        ***********************************-->
         <!--**********************************
            Content body start
        ***********************************-->
         <div class="content-body">
         <?php include "comp/formulario_cliente.php";?>
         </div>
         <!--**********************************
            Content body end
        ***********************************-->
         <!--**********************************
            Footer start
        ***********************************-->
             <?php include "comp/footer.php";?>
      </div>
      <?php include "comp/javascript_pie.php";?>
   </body>
</html>
<?php endif;?>

