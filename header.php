<?php

/**

 * The template for displaying the header

 *

 * @package WordPress

 * @subpackage Dynasty3

 * @since Dynasty3 1.0

 */

?>

<!doctype html>
<html lang="en-US">
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta charset="utf-8">


<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','no entry');?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />

<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- fancyBox main CSS files -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- sc-menu STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sc-menu.css">

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
    	<div class="container">
        	<div class="top-header">
            	<div class="col-md-4">
                	<div class="logo-area">
                    	<a href="<?php bloginfo('url'); ?>" title="<?php echo of_get_option('sitename','no entry');?>"><img src="<?php echo of_get_option('logo','no entry');?>" alt="logo"></a>	
                    </div>	
                    <!--logo-area ends....-->
                </div>
                <!--col-md-4 ends....-->
                
                <div class="col-md-8">
                	<div class="social-bookmarks">
                    	<ul>
                    	  <li><a href="" class="purple">Do you have a question?</a></li>
                    	  <li>Email:<?php echo of_get_option('em','no entry');?></li>
                    	  <li>Tel:<?php echo of_get_option('phn','no entry');?></li>
                    	</ul>
                        <!--ul ends...-->	
                    </div>	
                    <!--social-bookmarks ends....-->
                </div>
                <!--col-md-8 ends....-->
            </div>	
            <!--top-header ends...	-->
            
            <div class="menu-area">
            	<div id='scmenu'>
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => '','container'=> '',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => '', ) ); ?>

                <?php /*?> <?php
							  $url=get_post_permalink();
								 $pageid = url_to_postid( $url );
							?>  
                    <ul>
                       <li><a href="default.php">About us</a>
                          <ul>
                             <li><a href="default.php">Faculty</a></li>
                             <li><a href="news.php">News</a></li>
                             <li><a href="default.php">Location</a></li>
                          </ul>
                       </li>
                       <li><a href="default.php"> Preschool Dance</a></li>
                       <li><a href="default.php">Classes</a>
                       	  <ul>
                             <li><a href="default.php">Children’s Classes</a></li>
                             <li><a href="default.php">Adult Classes</a></li>
                          </ul>
                       </li>
                       <li><a href="default.php">Dance Styles</a>
                       		 <ul>
                                 <li><a href="default.php">Ballet</a></li>
                                 <li><a href="default.php">Jazz</a></li>
                                 <li><a href="default.php">Tap</a></li>
                                 <li><a href="default.php">Lyrical Jazz</a></li>
                                 <li><a href="default.php">Contemporary</a></li>
                                 <li><a href="default.php">Musical Theatre</a></li>
                                 <li><a href="default.php">Acrodance</a></li>
                                 <li><a href="default.php">Stretch & Strengthen</a></li>
                                 <li><a href="default.php">Boys Only</a></li>
                                 <li><a href="default.php">Private Lessons</a></li>
                             </ul>
                       </li>
                       <li><a href="calendar.php">Calendar</a></li>
                       <li><a href="default.php">Start Dancing</a>
                       		<ul>
                                 <li><a href="registration.php">Online Registration</a></li>
                                 <li><a href="pricing.php">Pricing</a></li>
                                 <li><a href="uniform.php">Uniforms</a></li>
                            </ul>
                       </li>
                       <li><a href="testimonial.php">Testimonial</a></li>
                       <li><a href="gallery.php">Gallery</a>
                       		<ul>
                                 <li><a href="gallery.php">Photos</a></li>
                                 <li><a href="gallery.php">Video</a></li>
                            </ul>
                       </li>
                       <li><a href="gellery.php">Shop</a></li>
                       <li><a href="contact.php">Contact Us</a></li>                                                             
                    </ul><?php */?>
                    </div>
                    <!--sc menu....-->	
             </div>
             <!--menu-area ends...-->
        </div>
        <!--container ends...-->
    </header>
    <!--header ends...-->
    
 

        
              <?php /*?><li><a href="<?php bloginfo('url');?>/about-us/" <?php echo $pageid== '7'?'class="active"':'';?>>ABOUT</a></li><?php */?>
           
    