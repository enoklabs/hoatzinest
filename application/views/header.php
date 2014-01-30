<!DOCTYPE html>
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>

    <!-- ======== META TAGS ======== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="HoatziNest is just a place where teams are born through discussing
creative and inspirational ideas. Inside the HoatziNest, these
innovative ideas will be ready to be hatched into life." />
    <meta name="keywords" content="Web development, Team build, Collaboration, Project, Ideas, Creative" />
    <meta name="author" content="Bryan Penkala & Enok Madrid" />

    <!-- ======== TITLE ======== -->
    <title><?php echo $title;?></title>
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.gif" type="image/gif" sizes="16x16">

    <!-- ======== FONTS ======== -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,400italic,600italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,600' rel='stylesheet' type='text/css'>

    <!-- ======== CSS FILES ======== -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/foundation.css" />
    <link rel="stylesheet" id="flatui-css" media="all" type="text/css" href="<?php echo base_url();?>assets/css/flatui.css" >
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css" />
    <link rel="stylesheet" type="text/css" href="//www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />

    <script src="<?php echo base_url();?>assets/js/modernizr.js"></script>

</head>
<body>




<!-- Header -->
<header>

    <?php
    
    if ($this->session->userdata('is_logged_in') == TRUE){
    
        echo"
        <div class='sign-up'>
        <div class='row'>
            <ul id='account' class='large-4 columns top-button right'>
                <li><a class='button small borderShadow right submenu wide'>";?><?php echo $this->session->userdata('email');?><?php echo"</a></li>
                <li id='signout'><a class='button small borderShadow right signout wide' href='";?><?php echo base_url();?><?php echo"login/signout'>Sign Out</a></li>
            </ul>
        </div>
    </div>";

	?><?php		
    } else {echo"
    
     <div class='sign-up'>
        <div class='row'>
            <div class='large-12 columns top-button'>
                <a class='button small borderShadow right rightRadius' href='";?> <?php echo base_url();?><?php echo"login'>Sign In</a>
                <a class='button small borderShadow right leftRadius' href='";?> <?php echo base_url();?><?php echo"login/signup'>Sign Up</a>
            </div>
        </div>
    </div>";   
    }
    ?>


    <!-- Navigation -->
    <nav>
        <div class="row">

            <a class="large-4 columns logo" href="<?php echo base_url();?>">
                <img src="<?php echo base_url();?>assets/img/hoatzinest_logo.png" alt="HoatziNest Logo">
            </a>

            <div class="large-8 columns nav">
                <ul class="right inline-list">
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="<?php echo base_url();?>build">Let's Build</a></li>
                    <li><a href="<?php echo base_url();?>projects">Projects</a></li>
                    <li><a href="<?php echo base_url();?>showcase">Showcase</a></li>
                    <li><a href="<?php echo base_url();?>about">About</a></li>
                    <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
