
<?php
include ("header.php")
?>
<!--QHacks 2019-->
<!--Created BY: Mohammed Perves, Berrnedate, Rayan & Deren -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title><?php echo "$site_name"; ?> - Login</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
      <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
      <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
      <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
   </head>
   <body>
      <div class="limiter">
         <div class="container-login100" style="background-image: url('images/bg.jpg');">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62">
      <center><div id="vehicles">
  <h3>Step 2: Make a request</h3>
  <p>
    Congrats! You have successfully authenticated with Smartcar and exchanged an authorization code for an access token that can be used to make requests to vehicles. Now, select a vehicle and request type below and click "Send request" to trigger a request to the vehicle.
  </p>

  <form action="vehicles.php" method="post">
    <div class="form-group">
      <label class="label" for="vehicle">Select a vehicle:</label>
      <select class="form-control" id="vehicle" name="vehicleId">
        {{#each vehicles}}
        <option value="{{id}}">{{year}} {{make}} {{model}}</option>
        {{/each}}
      </select>
    </div>
    <div class="form-group">
      <label class="label" for="request">Select a request type:</label>
      <select class="form-control" id="request" name="requestType">
        <option value="info">Vehicle info</option>
        <option value="location">Location</option>
        <option value="odometer">Odometer</option>
        <option value="lock">Lock doors</option>
        <option value="unlock">Unlock doors</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary" onclick="showall()">Send request</button>
    <a href="/logout" class="btn btn-link" role="button">Logout</a>
  </form>
</div>
</center>
      <script src="https://javascript-sdk.smartcar.com/sdk-2.0.0.js"></script>
      <script src="js/car.js"></script>
   </body>

</html>