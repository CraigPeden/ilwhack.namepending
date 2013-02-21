<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    
    <title>SkyHopper</title>
    
    <meta name="description" content="#ilwhack">
    <meta name="author" content="SkyHopper">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le Styles -->
    <link href="<?= base_url('/css/skyhopper.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/css/bootstrap.css'); ?>" rel="stylesheet">
    <style>
    	body {
    		padding-top: 60px;
    	}
    </style>
    <link href="<?= base_url('/css/bootstrap-responsive.css'); ?>" rel="stylesheet">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="<?= site_url("javascript"); ?>"></script>
</head>

<body>
	<header class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img class="logo" src="<?= base_url('/img/SkyHopper_transparent.png'); ?>"></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             <!-- Logged in as <a href="#" class="navbar-link">Username</a> -->
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </header>

