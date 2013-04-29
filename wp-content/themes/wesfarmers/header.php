<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
        <meta name="viewport" content="width=device-width">

        <title>Wesfarmers | <?php echo $title; ?></title>

        <link rel="shortcut icon" href="/favicon.ico">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/min/?g=css" type="text/css" media="screen" title="no title" charset="utf-8">
        <script type="text/javascript" src="//use.typekit.net/dnt1zeb.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <!--[if IE 7 ]><link rel="stylesheet" href="/css/ie7.css"> <![endif]-->
        <!--[if IE 8 ]><link rel="stylesheet" href="/css/ie8.css"> <![endif]-->
        <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
        
    <body>
            
        <div id="top-bar">
            <div class="wrapper clearfix">
                <div class="left">Wesfarmers Share Price $40.29  <span>5 April 2013 10:26:53 AEST</span></div>
                
                <div class="right"><img src="<?php echo get_stylesheet_directory(); ?>/img/example-linkedin.png" alt="Linkedin Example" /></div>
            </div>
        </div>
        
        <header class="wrapper clearfix">
            
            <a href="/" id="logo" class="sprite"></a>
            
            <nav>
                <a href="about-us.php"<?php if ($title == 'About Us') { echo ' class="active"'; } ?>>About Us</a>
                <a href="careers.php"<?php if ($title == 'Careers') { echo ' class="active"'; } ?>>Careers</a>
                <a href="customers.php"<?php if ($title == 'Customers') { echo ' class="active"'; } ?>>Customers</a>
                <a href="our-brands.php"<?php if ($title == 'Our Brands') { echo ' class="active"'; } ?>>Our Brands</a>
                <a href="community.php"<?php if ($title == 'Community') { echo ' class="active"'; } ?>>Community</a>
                <a href="media.php"<?php if ($title == 'Media') { echo ' class="active"'; } ?>>Media</a>
                <a href="investors.php"<?php if ($title == 'Investors') { echo ' class="active"'; } ?>>Investors</a>
            </nav>

        </header>
        
