<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

  <!-- Site meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $data['title'].' | '.SITETITLE; //SITETITLE defined in app/core/config.php ?></title>
  <meta name="ROBOTS" content="Index, Follow">
  <link rel="author" href="humans.txt" />
  <link rel="stylesheet" type="text/css" href="/bower_components/foundation/css/foundation.css">
  <script src="/bower_components/modernizr/modernizr.js"></script>

  <!-- CSS -->
  <?php
  helpers\assets::css(array(
    //'//cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.min.css',
      '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
      "h//cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css",
      helpers\url::template_path() . 'css/main.css',
  ))
  ?>
  <link rel="stylesheet" type="text/css" href="/bower_components/slick-1.5.0/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="/bower_components/slick-1.5.0/slick/slick-theme.css"/>

  <!-- JS -->
  <?php
  helpers\assets::js(array(
      helpers\url::template_path() . 'js/jquery.js',
      helpers\url::template_path() . '//cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.js',
      helpers\url::template_path() . 'js/main.js'
  ))
  ?>

</head>
<body>

<div class="fixed">
  <nav class="top-bar" data-topbar role="navigation" id="nav">
    <ul class="title-area">
      <li class="name"><!-- Leave this empty --></li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>
    <section class="top-bar-section">
      <ul>
        <li class="show-for-small-only"><a href="home"><i class="fa fa-home"></i></a></li>
        <li class="has-dropdown">
          <a class="dropdown-link" href="#">ABOUT</a>
          <ul id="nav-dropdown" class="dropdown">
            <li><a href="transparency">Transparency</a></li>
            <li><a href="seg">SE@G</a></li>
          </ul>
        </li>
        <li><a href="transparentcoffees">TT COFFEES</a></li>
        <li><a href="register">REGISTER</a></li>
        <li id="li-header-logo"><a href="home"><img id="header-logo" src="<?php echo helpers\url::template_path() .
                'img/Transparent%20Trade%20White-08-09.png'?>"/></a></li>
        <li><a href="insights">INSIGHTS</a></li>
        <li class="has-dropdown">
          <a class="dropdown-link" href="#">SCRPI</a>
          <ul id="nav-dropdown" class="dropdown">
            <li><a href="scrpi">SCRPI</a></li>
            <li><a href="roasters">Roasters</a></li>
          </ul>
        </li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </section>
  </nav>
</div>


<!-- Collect the nav links, forms, and other content for toggling -->
    <section class="top-bar-section">
      <ul>
        <li class="show-for-small-only"><a href="home"><i class="fa fa-home"></i></a></li>
        <li><a href="<?php echo DIR;?>admin/cats">Categories</a></li>
        <li><a href="<?php echo DIR;?>admin/posts">Posts</a></li>
        <li><a href="<?php echo DIR;?>admin/users">Users</a></li>
      </ul>

      <ul>
      	<li><a href="<?php echo DIR;?>admin/logout">Logout</a></li>
      </ul>
  
