<?php if (!isset($_COOKIE["user"])):
header("Location: page-login.php"); ?>
<?php else: ?>
<!DOCTYPE html>
<html lang="en">
   <!-- gegerar id del isuario datos nombre todo -->
   <head>
      <meta charset="utf-8"/>
      <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta content="width=device-width,initial-scale=1" name="viewport"/>
      <title>
         Focus - Bootstrap Admin Dashboard
      </title>
      <!-- Favicon icon -->
      <link href="./images/favicon.png" rel="icon" sizes="16x16" type="image/png"/>
      <link href="./vendor/owl-carousel/css/owl.carousel.min.css" rel="stylesheet"/>
      <link href="./vendor/owl-carousel/css/owl.theme.default.min.css" rel="stylesheet"/>
      <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet"/>
      <link href="./css/style.css" rel="stylesheet"/>
   </head>
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
         <div class="header">
            <div class="header-content">
               <nav class="navbar navbar-expand">
                  <div class="collapse navbar-collapse justify-content-between">
                     <div class="header-left">
                        <div class="search_bar dropdown">
                           <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                              <i class="mdi mdi-magnify">
                              </i>
                           </span>
                           <div class="dropdown-menu p-0 m-0">
                              <form>
                                 <input aria-label="Search" class="form-control" placeholder="Search" type="search"/>
                              </form>
                           </div>
                        </div>
                     </div>
                     <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                           <a class="nav-link" data-toggle="dropdown" href="#" role="button">
                              <i class="mdi mdi-bell">
                              </i>
                              <div class="pulse-css">
                              </div>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <ul class="list-unstyled">
                                 <li class="media dropdown-item">
                                    <span class="success">
                                       <i class="ti-user">
                                       </i>
                                    </span>
                                    <div class="media-body">
                                       <a href="#">
                                          <p>
                                             <strong>
                                                Martin
                                             </strong>
                                             has added a
                                             <strong>
                                                customer
                                             </strong>
                                             Successfully
                                          </p>
                                       </a>
                                    </div>
                                    <span class="notify-time">
                                       3:20 am
                                    </span>
                                 </li>
                                 <li class="media dropdown-item">
                                    <span class="primary">
                                       <i class="ti-shopping-cart">
                                       </i>
                                    </span>
                                    <div class="media-body">
                                       <a href="#">
                                          <p>
                                             <strong>
                                                Jennifer
                                             </strong>
                                             purchased Light Dashboard 2.0.
                                          </p>
                                       </a>
                                    </div>
                                    <span class="notify-time">
                                       3:20 am
                                    </span>
                                 </li>
                                 <li class="media dropdown-item">
                                    <span class="danger">
                                       <i class="ti-bookmark">
                                       </i>
                                    </span>
                                    <div class="media-body">
                                       <a href="#">
                                          <p>
                                             <strong>
                                                Robin
                                             </strong>
                                             marked a
                                             <strong>
                                                ticket
                                             </strong>
                                             as unsolved.
                                          </p>
                                       </a>
                                    </div>
                                    <span class="notify-time">
                                       3:20 am
                                    </span>
                                 </li>
                                 <li class="media dropdown-item">
                                    <span class="primary">
                                       <i class="ti-heart">
                                       </i>
                                    </span>
                                    <div class="media-body">
                                       <a href="#">
                                          <p>
                                             <strong>
                                                David
                                             </strong>
                                             purchased Light Dashboard 1.0.
                                          </p>
                                       </a>
                                    </div>
                                    <span class="notify-time">
                                       3:20 am
                                    </span>
                                 </li>
                                 <li class="media dropdown-item">
                                    <span class="success">
                                       <i class="ti-image">
                                       </i>
                                    </span>
                                    <div class="media-body">
                                       <a href="#">
                                          <p>
                                             <strong>
                                                James.
                                             </strong>
                                             has added a
                                             <strong>
                                                customer
                                             </strong>
                                             Successfully
                                          </p>
                                       </a>
                                    </div>
                                    <span class="notify-time">
                                       3:20 am
                                    </span>
                                 </li>
                              </ul>
                              <a class="all-notification" href="#">
                                 See all notifications
                                 <i class="ti-arrow-right">
                                 </i>
                              </a>
                           </div>
                        </li>
                        <li class="nav-item dropdown header-profile">
                           <a class="nav-link" data-toggle="dropdown" href="#" role="button">
                              <i class="mdi mdi-account">
                              </i>
                           </a>
                           <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="./app-profile.html">
                                 <i class="icon-user">
                                 </i>
                                 <span class="ml-2">
                                    Profile
                                 </span>
                              </a>
                              <a class="dropdown-item" href="./email-inbox.html">
                                 <i class="icon-envelope-open">
                                 </i>
                                 <span class="ml-2">
                                    Inbox
                                 </span>
                              </a>
                              <a class="dropdown-item" href="./page-login.html">
                                 <i class="icon-key">
                                 </i>
                                 <span class="ml-2">
                                    Logout
                                 </span>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <div class="quixnav">
            <div class="quixnav-scroll">
               <ul class="metismenu" id="menu">
                  <li class="nav-label first">
                     Main Menu
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-single-04">
                        </i>
                        <span class="nav-text">
                           Dashboard
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./index.html">
                              Dashboard 1
                           </a>
                        </li>
                        <li>
                           <a href="./index2.html">
                              Dashboard 2
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-label">
                     Apps
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-app-store">
                        </i>
                        <span class="nav-text">
                           Apps
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./app-profile.html">
                              Profile
                           </a>
                        </li>
                        <li>
                           <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                              Email
                           </a>
                           <ul aria-expanded="false">
                              <li>
                                 <a href="./email-compose.html">
                                    Compose
                                 </a>
                              </li>
                              <li>
                                 <a href="./email-inbox.html">
                                    Inbox
                                 </a>
                              </li>
                              <li>
                                 <a href="./email-read.html">
                                    Read
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="./app-calender.html">
                              Calendar
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-chart-bar-33">
                        </i>
                        <span class="nav-text">
                           Charts
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./chart-flot.html">
                              Flot
                           </a>
                        </li>
                        <li>
                           <a href="./chart-morris.html">
                              Morris
                           </a>
                        </li>
                        <li>
                           <a href="./chart-chartjs.html">
                              Chartjs
                           </a>
                        </li>
                        <li>
                           <a href="./chart-chartist.html">
                              Chartist
                           </a>
                        </li>
                        <li>
                           <a href="./chart-sparkline.html">
                              Sparkline
                           </a>
                        </li>
                        <li>
                           <a href="./chart-peity.html">
                              Peity
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-label">
                     Components
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-world-2">
                        </i>
                        <span class="nav-text">
                           Bootstrap
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./ui-accordion.html">
                              Accordion
                           </a>
                        </li>
                        <li>
                           <a href="./ui-alert.html">
                              Alert
                           </a>
                        </li>
                        <li>
                           <a href="./ui-badge.html">
                              Badge
                           </a>
                        </li>
                        <li>
                           <a href="./ui-button.html">
                              Button
                           </a>
                        </li>
                        <li>
                           <a href="./ui-modal.html">
                              Modal
                           </a>
                        </li>
                        <li>
                           <a href="./ui-button-group.html">
                              Button Group
                           </a>
                        </li>
                        <li>
                           <a href="./ui-list-group.html">
                              List Group
                           </a>
                        </li>
                        <li>
                           <a href="./ui-media-object.html">
                              Media Object
                           </a>
                        </li>
                        <li>
                           <a href="./ui-card.html">
                              Cards
                           </a>
                        </li>
                        <li>
                           <a href="./ui-carousel.html">
                              Carousel
                           </a>
                        </li>
                        <li>
                           <a href="./ui-dropdown.html">
                              Dropdown
                           </a>
                        </li>
                        <li>
                           <a href="./ui-popover.html">
                              Popover
                           </a>
                        </li>
                        <li>
                           <a href="./ui-progressbar.html">
                              Progressbar
                           </a>
                        </li>
                        <li>
                           <a href="./ui-tab.html">
                              Tab
                           </a>
                        </li>
                        <li>
                           <a href="./ui-typography.html">
                              Typography
                           </a>
                        </li>
                        <li>
                           <a href="./ui-pagination.html">
                              Pagination
                           </a>
                        </li>
                        <li>
                           <a href="./ui-grid.html">
                              Grid
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-plug">
                        </i>
                        <span class="nav-text">
                           Plugins
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./uc-select2.html">
                              Select 2
                           </a>
                        </li>
                        <li>
                           <a href="./uc-nestable.html">
                              Nestedable
                           </a>
                        </li>
                        <li>
                           <a href="./uc-noui-slider.html">
                              Noui Slider
                           </a>
                        </li>
                        <li>
                           <a href="./uc-sweetalert.html">
                              Sweet Alert
                           </a>
                        </li>
                        <li>
                           <a href="./uc-toastr.html">
                              Toastr
                           </a>
                        </li>
                        <li>
                           <a href="./map-jqvmap.html">
                              Jqv Map
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a aria-expanded="false" href="widget-basic.html">
                        <i class="icon icon-globe-2">
                        </i>
                        <span class="nav-text">
                           Widget
                        </span>
                     </a>
                  </li>
                  <li class="nav-label">
                     Forms
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-form">
                        </i>
                        <span class="nav-text">
                           Forms
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./form-element.html">
                              Form Elements
                           </a>
                        </li>
                        <li>
                           <a href="./form-wizard.html">
                              Wizard
                           </a>
                        </li>
                        <li>
                           <a href="./form-editor-summernote.html">
                              Summernote
                           </a>
                        </li>
                        <li>
                           <a href="form-pickers.html">
                              Pickers
                           </a>
                        </li>
                        <li>
                           <a href="form-validation-jquery.html">
                              Jquery Validate
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-label">
                     Table
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-layout-25">
                        </i>
                        <span class="nav-text">
                           Table
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="table-bootstrap-basic.html">
                              Bootstrap
                           </a>
                        </li>
                        <li>
                           <a href="table-datatable-basic.html">
                              Datatable
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-label">
                     Extra
                  </li>
                  <li>
                     <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                        <i class="icon icon-single-copy-06">
                        </i>
                        <span class="nav-text">
                           Pages
                        </span>
                     </a>
                     <ul aria-expanded="false">
                        <li>
                           <a href="./page-register.html">
                              Register
                           </a>
                        </li>
                        <li>
                           <a href="./page-login.html">
                              Login
                           </a>
                        </li>
                        <li>
                           <a aria-expanded="false" class="has-arrow" href="javascript:void()">
                              Error
                           </a>
                           <ul aria-expanded="false">
                              <li>
                                 <a href="./page-error-400.html">
                                    Error 400
                                 </a>
                              </li>
                              <li>
                                 <a href="./page-error-403.html">
                                    Error 403
                                 </a>
                              </li>
                              <li>
                                 <a href="./page-error-404.html">
                                    Error 404
                                 </a>
                              </li>
                              <li>
                                 <a href="./page-error-500.html">
                                    Error 500
                                 </a>
                              </li>
                              <li>
                                 <a href="./page-error-503.html">
                                    Error 503
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="./page-lock-screen.html">
                              Lock Screen
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
         <!--**********************************
            Sidebar end
        ***********************************-->
         <!--**********************************
            Content body start
        ***********************************-->
         <div class="content-body">
            <!-- row -->
         </div>
         <!--**********************************
            Content body end
        ***********************************-->
         <!--**********************************
            Footer start
        ***********************************-->
         <div class="footer">
            <div class="copyright">
               <p>
                  Copyright © Designed & Developed by
                  <a href="#" target="_blank">
                     Quixkit
                  </a>
                  2019
               </p>
               <p>
                  Distributed by
                  <a href="https://themewagon.com/" target="_blank">
                     Themewagon
                  </a>
               </p>
            </div>
         </div>
      </div>
      <script src="./vendor/global/global.min.js">
      </script>
      <script src="./js/quixnav-init.js">
      </script>
      <script src="./js/custom.min.js">
      </script>
      <!-- Vectormap -->
      <script src="./vendor/raphael/raphael.min.js">
      </script>
      <script src="./vendor/morris/morris.min.js">
      </script>
      <script src="./vendor/circle-progress/circle-progress.min.js">
      </script>
      <script src="./vendor/chart.js/Chart.bundle.min.js">
      </script>
      <script src="./vendor/gaugeJS/dist/gauge.min.js">
      </script>
      <!--  flot-chart js -->
      <script src="./vendor/flot/jquery.flot.js">
      </script>
      <script src="./vendor/flot/jquery.flot.resize.js">
      </script>
      <!-- Owl Carousel -->
      <script src="./vendor/owl-carousel/js/owl.carousel.min.js">
      </script>
      <!-- Counter Up -->
      <script src="./vendor/jqvmap/js/jquery.vmap.min.js">
      </script>
      <script src="./vendor/jqvmap/js/jquery.vmap.usa.js">
      </script>
      <script src="./vendor/jquery.counterup/jquery.counterup.min.js">
      </script>
      <script src="./js/dashboard/dashboard-1.js">
      </script>
   </body>
</html>
<?php endif; ?>
