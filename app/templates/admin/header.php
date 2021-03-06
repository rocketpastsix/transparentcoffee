<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
<!--  --><?php
//    if ($data['title'] == 'Registration Approval') {
//      echo "<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>";
//    }
//  else {
     echo "<meta charset='utf-8'>";
//  }
//  ?>
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

<!--  <link rel="stylesheet" type="text/css" href="/bower_components/foundation/css/foundation.css">-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
  <script src="/bower_components/modernizr/modernizr.js"></script>


  <!-- CSS -->
  <?php
  helpers\assets::css(array(
      '//netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css',
      '//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css',
      '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
      helpers\url::admin_template_path() . 'css/style.css',
      helpers\url::admin_template_path() . 'css/main.css',
  ))
  ?>

</head>
<body>

<div class="fixed">
  <nav class="top-bar" data-topbar role="navigation" id="adminNav">
    <ul class="title-area">
      <li class="name"><!-- Leave this empty --></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <ul>
        <li class="show-for-small-only"><a href="home"><i class="fa fa-home"></i></a></li>
        <li><a href="/home">Site</a></li>
        <li><a href="/admin">Home</a></li>
        <li><a href="/admin/posts">Insights</a></li>
        <li><a href="/admin/csv">CSV</a></li>
        <li><a href="/admin/scrpi">SCRPI</a></li>
        <li><a href="/admin/cats">Categories</a></li>
        <li><a href="/admin/users">Users</a></li>
        <li><a href="/admin/pending">Coffees</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </section>
  </nav>
</div>
<div class="container">
