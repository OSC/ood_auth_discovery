<!DOCTYPE html>
<!--[if lt IE 9]><html class="lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
  <title>OnDemand | Discovery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
.navbar-brand {
  color: white !important;
}

.navbar.navbar-inverse {
  background-color: #cf102d !important;
  border-color: #a00c23 !important;
}

body {
  padding-top: 60px;
}

.thumbnail h4{
  min-height: 80px;
}

div.row {
  margin-bottom: 50px;
}

h2 {
  text-align: center;
  font-weight: 300;
  margin-bottom: 40px;
}

.btn-primary   {
  /* 10% lighter than the ohtech dark gray*/
  background-color: #6c696a !important;
  border-color: rgb(82, 80, 81) !important;
}
.btn-primary:hover {
  background-color: rgb(82, 80, 81) !important;
}
</style>
</head>

<body>

<!-- navigation bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OSC OnDemand</a>
    </div>
  </div><!-- /.navbar-collapse -->
</nav>
<!-- navbar -->



<div class="container">
<h2>Login to OSC OnDemand</h2>


<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h4 style="text-align: center;">Step 1. Choose your identity provider<br><small>CILogon provides access to identity providers from many academic institutions across the state.</small></h4>
      <img class="img-rounded" alt="100%x200" src="img/login1.png" style="display: block;">
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h4 style="text-align: center;">Step 2. Login via your provider<br><small>For example, here I've chosen Ohio State University as my provider and am presented OSU's login page.</small></h4>
      <img class="img-rounded" data-src="holder.js/100%x200" alt="100%x200" src="img/login2.png" style="display: block;">
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <h4 style="text-align: center;">Step 3. Map it to your OSC account<br><small>If it is the first time logging in with this provider, you will need to associate it with your OSC account.</small></h4>
      <img class="img-rounded" data-src="holder.js/100%x200" alt="100%x200" src="img/login3.png" style="display: block;">
    </div>
  </div>
</div>


<?php
  $issuer = 'https://cilogon.org';

  $oidc_callback = $_GET['oidc_callback'];
  $target_link_uri = $_GET['target_link_uri'];
  $csrf = $_GET['x_csrf'];


  $cilogon_url = htmlspecialchars($oidc_callback . "?iss=" . urlencode($issuer) . "&target_link_uri=" . urlencode($target_link_uri) . "&x_csrf=" . urlencode($csrf));
?>

<div class="row">
  <p style="text-align: center;">
    <a class="btn btn-primary btn-lg" href="<?= $cilogon_url ?>">Login via CILogon</a>
  </p>
</div>

</div>

</body>
</html>
