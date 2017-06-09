<!DOCTYPE html>
<!--[if lt IE 9]><html class="lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<?php
include('config.php');

// delete the cookie that proxy sets for the cache hint for mapping oidc to username
setcookie('mod_ood_proxy_session', '', time() - 86400*2, "/");
?>

<head>
  <title><?= $config->title ?> | Discovery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/public/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link rel="stylesheet" href="css/bootstrap.min.css">

<style type="text/css">
.navbar-brand {
  color: <?= $config->nav_brand_text_color ?> !important;
}

.navbar.navbar-inverse {
  background-color: <?= $config->nav_background_color ?> !important;
  border-color: <?= $config->nav_background_color ?> !important;
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
</style>
</head>

<body>

<!-- navigation bar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?= $config->title ?></a>
    </div>
  </div><!-- /.navbar-collapse -->
</nav>
<!-- navbar -->

<?php
  $oidc_callback = $_GET['oidc_callback'];
  $target_link_uri = $_GET['target_link_uri'];
  $csrf = $_GET['x_csrf'];


  $cilogon_url = htmlspecialchars($oidc_callback . "?iss=" . urlencode('https://cilogon.org') . "&target_link_uri=" . urlencode($target_link_uri) . "&x_csrf=" . urlencode($csrf));
  $osc_url     = htmlspecialchars($oidc_callback . "?iss=" . urlencode('https://idp-dev.osc.edu/auth/realms/osc') . "&target_link_uri=" . urlencode($target_link_uri) . "&x_csrf=" . urlencode($csrf));
?>



<div class="container">
  <div class="page-header">
    <h2>Login to <?= $config->title ?></h2>
    <p class="lead" style="text-align: center;">Log in with either your
      <a href="<?= $osc_url ?>">OSC Account</a> or a
      <a href="<?= $cilogon_url ?>">third party account via CILogon</a>.</p>
  </div>

  <div class="row">
    <div class="col-sm-6 col-md-6" style=" background-color: #eee; padding-top: 20px;">
      <p style="text-align: center;">
        <a class="btn btn-primary btn-lg" href="<?= $osc_url ?>">Log in with your OSC account</a>
      </p>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <h4 style="text-align: center;">Step 1. Login with your OSC account</h4>
            <img class="img-rounded img-responsive center-block" data-src="holder.js/100%x200" alt="100%x200" src="img/login2.png">
          </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <h4 style="text-align: center;">Step 2. Map it to your OSC account (first login only)<br>
              <small>If it is the first time logging in with this provider, you will need to associate it with your HPC account.</small>
            </h4>
            <img class="img-rounded img-responsive center-block" data-src="holder.js/100%x200" alt="100%x200" src="img/login3.png">
          </div>
        </div>
      </div>

      <p style="text-align: center;">
        <a class="btn btn-primary btn-lg" href="<?= $osc_url ?>">Log in with your OSC account</a>
      </p>

    </div>
    <div class="col-sm-6 col-md-6" style="padding-top: 20px;">
      <p style="text-align: center;">
        <a class="btn btn-primary btn-lg" href="<?= $cilogon_url ?>">Log in with third party through CILogon</a>
      </p>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <h4 style="text-align: center;">Step 1. Choose your identity provider<br><small>CILogon provides access to identity providers from many academic institutions across the state.</small></h4>
            <img class="img-rounded img-responsive center-block" alt="100%x200" src="img/login1.png" style="display: block;">
          </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <h4 style="text-align: center;">Step 2. Login via your provider<br><small>For example, here I've chosen Ohio State University as my provider and am presented OSU's login page.</small></h4>
            <img class="img-rounded img-responsive center-block" data-src="holder.js/100%x200" alt="100%x200" src="img/login2.png" style="display: block;">
          </div>
        </div>
        <div class="col-sm-12 col-md-12">
          <div class="thumbnail">
            <h4 style="text-align: center;">Step 3. Map it to your HPC account (first login only)<br>
              <small>If it is the first time logging in with this provider, you will need to associate it with your HPC account.</small>
            </h4>
            <img class="img-rounded img-responsive center-block" data-src="holder.js/100%x200" alt="100%x200" src="img/login3.png" style="display: block;">
          </div>
        </div>
      </div>

      <p style="text-align: center;">
        <a class="btn btn-primary btn-lg" href="<?= $cilogon_url ?>">Log in with third party through CILogon</a>
      </p>

    </div>
  </div>
</div>

</body>
</html>
