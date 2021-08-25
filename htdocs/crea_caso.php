crea_caso.php
<?php if (!isset($_COOKIE["user"])):
   header("Location: page-login.php");
   ?>
   <?php else: ?>
<!DOCTYPE html>
<html lang="en">
   <?php include_once "comp/head.php";?>
   <body>
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
         <?php include_once "comp/header.php";?>
         <?php include_once "comp/menu.php";?>
         <div class="content-body">
            <!--   -->
            <?php include "php/crea_caso.php";?>
         </div>
         <?php include_once "comp/footer.php";?>
      </div>
      <?php include_once "comp/javascript_pie.php";?>
   </body>
</html>
<?php endif;?>
