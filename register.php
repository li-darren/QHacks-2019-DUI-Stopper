<?php 
include("server.php") 
?>
<!--QHacks 2019-->
<!--Created BY: Mohammed Perves, Berrnedate, Rayan & Deren -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Colorlib Templates">
      <meta name="author" content="Colorlib">
      <meta name="keywords" content="Colorlib Templates">
      <title><?php echo "$site_name"; ?> - Registration</title>
      <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
      <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
      <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
      <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link href="css/style.css" rel="stylesheet" media="all">
   </head>
   <body>
      <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
      <div class="card card-5">
         <div class="card-heading">
            <h2 class="title">Registration</h2>
         </div>
         <div class="card-body">
            <form method="POST" action="register.php">
               <?php include("errors.php") ?>
               <div class="form-row">
                  <div class="name">Username</div>
                  <div class="value">
                     <div class="input-group">
                        <input class="input--style-5" type="text" name="username">
                     </div>
                  </div>
               </div>
               <div class="form-row m-b-55">
                  <div class="name">PIN</div>
                  <div class="value">
                     <div class="row row-space">
                        <div class="col-2">
                           <div class="input-group-desc">
                              <input class="input--style-5" type="password" name="pin_1">
                              <label class="label--desc">PIN</label>
                           </div>
                        </div>
                        <div class="col-2">
                           <div class="input-group-desc">
                              <input class="input--style-5" type="password" name="pin_2">
                              <label class="label--desc">Confirm PIN</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="name">Full Name</div>
                  <div class="value">
                     <div class="input-group">
                        <input class="input--style-5" type="text" name="name">
                     </div>
                  </div>
               </div>
               <div class="form-row">
                  <div class="name">Email</div>
                  <div class="value">
                     <div class="input-group">
                        <input class="input--style-5" type="email" name="email">
                     </div>
                  </div>
               </div>
               <div class="form-row m-b-55">
                  <div class="name">Age</div>
                  <div class="value">
                     <div class="row row-refine">
                        <div class="col-3">
                           <div class="input-group-desc">
                              <input class="input--style-5" type="number" name="age" min="16" max="55">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="form-row m-b-55">
                     <div class="name"></div>
                     <div class="value">
                        <div class="row row-space">
                           <div class="col-2">
                              <button class="btn btn--radius-2 btn--blue" type="submit" name="reg_user">Register</button>
                           </div>
                           <div class="col-2">
                              <a href="index.php">
                                 <div class="btn btn--radius-2 btn--green">Login</div>
                              </a>
                           </div>
                        </div>
                     </div>
            </form>
            </div>
            </div>
         </div>
      </div>
      <!-- Jquery JS-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <!-- Vendor JS-->
      <script src="vendor/select2/select2.min.js"></script>
      <script src="vendor/datepicker/moment.min.js"></script>
      <script src="vendor/datepicker/daterangepicker.js"></script>
      <!-- Main JS-->
      <script src="js/global.js"></script>
   </body>
</html>