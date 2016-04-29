<!doctype html>                                                                                                                                                                                                                                    

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>OnDemand | Discovery</title>
</head>

<body>

<?php
  $issuer = 'https://cilogon.org';

  $oidc_callback = $_GET['oidc_callback'];
  $target_link_uri = $_GET['target_link_uri'];
  $csrf = $_GET['x_csrf'];

  echo '<p><a href="' . htmlspecialchars($oidc_callback . "?iss=" . urlencode($issuer) . "&target_link_uri=" . urlencode($target_link_uri) . "&x_csrf=" . urlencode($csrf)) . '">' . $issuer . '</a></p>';
?>

</body>
</html>
