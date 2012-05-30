<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>d-formed.net</title>
  <meta name="description" content="At D-formed, we believe in the power of creative communication. We’ve been offering web design and hosting for five years, and have expanded over time into a comprehensive service agency.">
  <!--<meta name="og:title" content="D-Formed - Digital Agency" />-->
  <!--<meta name="og:description" content="At D-formed, we believe in the power of creative communication. We’ve been offering web design and hosting for five years, and have expanded over time into a comprehensive service agency." />-->
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
  <!--<meta name="og:image" content="img/shareimg.jpg" />-->
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/lightbox.css">
  <?php
  $bg = array('bg.jpg', 'bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg', 'bg6.jpg', 'bg7.jpg' );
  $i = rand(0, count($bg)-1);
  $selectedBg = "$bg[$i]";
  ?>
  <style type="text/css">
  <!--
  body{
  background:url('img/<?php echo $selectedBg; ?>') no-repeat;
  background-color:#111111;
  background-position:center top;
  background-attachment:fixed;
  }
  -->
  </style>
</head>

<body>

<div class="wrapper"><!-- open footer wrapper -->

<header>
  <div class="container">
    <div class="row-fluid">
      <div class="span5">
        <div class="logo">
          <p><a href="http://www.d-formed.net"><span>d-formed.net</span></a></p>
        </div>
      </div>
      <div class="span7">
        <div class="contact-info">
          <p><span class="blue">Tel:</span> +44 (0)20 000 0000<br />
          <span class="blue">Email:</span> <a href="mailto:hello@d-formed.net">hello@d-formed.net</a></p>
          <p class="social">
            <a class="facebook" href="#"><span class="hidden">Like us on facebook...</span></a>
            <a class="twitter" href="#"><span class="hidden">Follow us on twitter...</span></a>
          </p>
        </div>
        <ul>
  	     <li class="home"><a href="/home"><span class="hidden">Home</span></a></li>
  	     <li class="about"><a href="/about"><span class="hidden">About</span></a></li>
  	     <li class="services"><a href="/services"><span class="hidden">Services</span></a></li>
  	     <li class="projects"><a href="/projects"><span class="hidden">Projects</span></a></li>
  	     <li class="news"><a href="/news"><span class="hidden">News</a></span></li>
  	     <li class="contact"><a href="/contact"><span class="hidden">Contact</a></span></li>
        </ul>
      </div>
    </div>
  </div>
</header>
