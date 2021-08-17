<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">


<head>
  <!-- Basic need -->
  <title>Moview WEB</title>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <link rel="profile" href="#">
  <title></title>

  <!--Google Font-->
  <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
  <!-- Mobile specific meta -->
  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone-no">

  <!-- CSS files -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/plugins.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .crop-text {
        -webkit-line-clamp: 2 !important;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-box-orient: vertical
    }

    .cmpny-name {
        color: blue;
        font-weight: 600
    }

    .dots {
        height: 6px;
        width: 6px;
        margin-left: 5px;
        margin-right: 5px;
        margin-bottom: 1px;
        background-color: rgb(180, 181, 180);
        border-radius: 50%;
        display: inline-block
    }

    .num-reviews {
        font-weight: 600;
        font-size: 13px
    }

    .ratings {
        color: blue;
        margin-right: 3px
    }

    .rating-none {
        color: #dad6d6
    }

    .excellent {
        font-size: 13px;
        margin-bottom: 2px
    }

    .get-rating {
        font-size: 35px;
        font-weight: 700
    }

    .rating-out {
        margin-bottom: -8px
    }
  </style>

</head>
<body>
<!-- BEGIN | Header -->
<header class="ht-header">
  <div class="container">
    <nav class="navbar navbar-default navbar-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header logo">
            <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <div id="nav-icon1">
              <span></span>
              <span></span>
              <span></span>
            </div>
            </div>
            <a href="<?php echo base_url('welcome/index'); ?>"><img class="logo" src="<?php echo base_url('assets/images/logo1.png'); ?>" alt="" width="119" height="58"></a>
          </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav flex-child-menu menu-left">
            <li class="hidden">
              <a href="#page-top"></a>
            </li>
            <li class="dropdown first">
              <a class="btn btn-default dropdown-toggle lv1" href="<?php echo base_url('welcome/index'); ?>">
              Home
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav flex-child-menu menu-right">
            <li class="loginLink"><a href="#">LOG In</a></li>
            <li class="btn signupLink"><a href="#">sign up</a></li>
          </ul>
        </div>
      <!-- /.navbar-collapse -->
      </nav>
      
      <!-- top search form -->
      <div class="top-search">
        <select>
        <option value="united">TV show</option>
        <option value="saab">Others</option>
      </select>
      <input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
      </div>
  </div>
</header>
<!-- END | Header -->