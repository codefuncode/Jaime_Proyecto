<!DOCTYPE html>
<html class="h-100" lang="en">
   <head>
      <meta charset="utf-8"/>
      <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta content="width=device-width,initial-scale=1" name="viewport"/>
      <title>
         Focus - Bootstrap Admin Dashboard
      </title>
      <link href="./images/favicon.png" rel="icon" sizes="16x16" type="image/png"/>
      <link href="./css/style.css" rel="stylesheet"/>
   </head>
   <!--  No esta habilitado aun. Puede ser habilitado a petición   -->
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
                                 Sign up your account
                              </h4>
                              <form action="index.html">
                                 <div class="form-group">
                                    <label>
                                       <strong>
                                          Username
                                       </strong>
                                    </label>
                                    <input class="form-control" placeholder="username" type="text">
                                    </input>
                                 </div>
                                 <div class="form-group">
                                    <label>
                                       <strong>
                                          Password
                                       </strong>
                                    </label>
                                    <input class="form-control" type="password" value="Password">
                                    </input>
                                 </div>
                                 <div class="text-center mt-4">
                                    <button class="btn btn-primary btn-block" type="submit">
                                       Sign me up
                                    </button>
                                 </div>
                              </form>
                              <div class="new-account mt-3">
                                 <p>
                                    Already have an account?
                                    <a class="text-primary" href="page-login.html">
                                       Sign in
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
      <!--endRemoveIf(production)-->
   </body>
</html>
