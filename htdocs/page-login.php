<!DOCTYPE html>
<html class="h-100" lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta content="width=device-width,initial-scale=1" name="viewport"/>
      <title>
         Focus - Bootstrap Admin Dashboard
      </title>
      <!-- Favicon icon -->
      <link href="./images/favicon.png" rel="icon" sizes="16x16" type="image/png"/>
      <link href="./css/style.css" rel="stylesheet"/>
   </head>
   <body class="h-100">
      <div class="authincation h-100">
         <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
               <div class="col-md-6">
                  <div class="authincation-content">
                     <div class="row no-gutters">
                        <div class="col-xl-12">
                           <div class="auth-form">
                              <h4 class="text-center mb-4">
                                 Sign in your account
                              </h4>
                              <form action="php/inicio_sesion.php" method="post">
                                 <div class="form-group">
                                    <label>
                                       <strong>
                                          Username
                                       </strong>
                                    </label>
                                    <input class="form-control" name="user" placeholder="username" type="text"/>
                                 </div>
                                 <div class="form-group">
                                    <label>
                                       <strong>
                                          Password
                                       </strong>
                                    </label>
                                    <input class="form-control" name="pass" type="password" value="Password"/>
                                 </div>
                                 <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                    <div class="form-group">
                                       <div class="form-check ml-2">
                                          <input class="form-check-input" id="basic_checkbox_1" type="checkbox"/>
                                          <label class="form-check-label" for="basic_checkbox_1">
                                             Remember me
                                          </label>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <a href="page-forgot-password.html">
                                          Forgot Password?
                                       </a>
                                    </div>
                                 </div>
                                 <div class="text-center">
                                    <button class="btn btn-primary btn-block" type="submit">
                                       Sign me in
                                    </button>
                                 </div>
                              </form>
                              <div class="new-account mt-3">
                                 <p>
                                    Don't have an account?
                                    <a class="text-primary" href="./page-register.html">
                                       Sign up
                                    </a>
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="./vendor/global/global.min.js">
      </script>
      <script src="./js/quixnav-init.js">
      </script>
      <script src="./js/custom.min.js">
      </script>
   </body>
</html>
