<?php 
/*
*header template
*/
?>
<DOCTYPE html>
<html <?php  language_attributes();?>>
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Our Church is a loacated in makindye, events, sermons, ministries, working church contact form etc..">
<meta name="keywords" content="Church, Website,  Bulletin, Programs, Events, , Premium, Charity, Non Profit ">
<meta name="author" content="Komagum Moise">
<title>Body of Christ - Church Uganda</title>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

<!-- Favicons -->
<link rel="shortcut icon" href="images/favicon.png">

<!-- Custom Google Font : Montserrat and Droid Serif -->

<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>
    <?php wp_head()?>
<body <?php body_class();?>>
    <header>
<!-- Navigation Bar Starts -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="<?php echo esc_url(home_url());?>"> <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/church-logo.png" alt="church logo" class="img-responsive"></a> </div>
    
     <!-- <ul class="nav navbar-nav navbar-right">
        <li ><a href="index.html">HOME </a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">MINISTRY <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="ministry.html">Childrens Ministry</a></li>
            <li><a href="ministry.html">Students Ministry</a></li>
            <li><a href="ministry.html">Groups</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERMONS <span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="sermons.html">Christ-Occupied</a></li>
            <li><a href="sermons.html">God's Love</a></li>
            <li><a href="sermons.html">Faithfulness</a></li>
            <li><a href="sermons.html">Praise Him</a></li>
          </ul>
        </li>
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG<span class="caret"></span></a>
          <ul class="dropdown-menu dropdown-menu-left" role="menu">
            <li><a href="image-gallery.html">Image Gallery</a></li>
            <li><a href="video-gallery.html">Video Gallery</a></li>
            <li><a href="blog.html">Blog list</a></li>
            <li><a href="blog-single.html">Blog Single</a></li>
            <li><a href="events-programs.html">Events &amp; Programs</a></li>
            <li><a href="event-single.html">Event Single</a></li>
            <li><a href="event-calendar.html">Event Calendar</a></li>
            <li><a href="charity-donation.html">Charity &amp; Donations</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">OTHER PAGES</li>
            <li><a href="prayers.html">Prayers</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="shortcodes.html">Shortcodes</a></li>
            <li><a href="full-width.html">Full Width</a></li>
            <li><a href="left-sidebar.html">Left Sidebar</a></li>
            <li><a href="http://bit.ly/BuyCatholic">Buy this Template</a></li>
          </ul>
        </li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>-->
        <?php 
        wp_nav_menu( array(
    'theme_location'  => 'primary',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'navbar-collapse collapse',
    'container_id'    => 'navbarNav',
    'menu_class'      => 'nav navbar-nav navbar-right',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );
        
        
        
        
        
        
        
        ?>
    </div>
    <!--/.nav-collapse --> 
    
  </div>

<!--// Navbar Ends--> 
    </header>