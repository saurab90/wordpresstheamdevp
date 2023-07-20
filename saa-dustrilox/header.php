<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *

 */
	wp_head();
?>

<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <!-- <title>Dustrilox - Construction & Industry HTML5 Template </title> -->
      <title>
		<?php bloginfo('name'); ?> 
		<?php wp_title(); ?> 
		<?php 
			if(is_front_page()) 
			{  
			 	echo "|";	bloginfo('discription'); 
			} 
		?> 
	 </title>

      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?> /assets/img/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/bootstrap.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /assets/css/meanmenu.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /assets/css/animate.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/owl-carousel.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /assets/css/backtotop.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/magnific-popup.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/nice-select.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/flaticon.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?> /assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/spacing.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');  ?> /assets/css/style.css">
   </head>
   <body <?php body_class(); ?> >
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->
      
      <!-- header-area-start -->
      <header id="header-sticky" class="header-area">
         <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-2 col-lg-2 col-md-6 col-6">

				  <?php  
				  	$logoimg = get_header_image();
				  ?>
                     <div class="logo-area">
                           <div class="logo">
                              <!-- <a href=" <?php echo site_url();  ?> "><img src="<?php bloginfo('template_directory');  ?> /assets/img/logo/logo-white.png" alt=""></a> -->
							  <a href=" <?php echo site_url();  ?> "><img src="<?php echo $logoimg  ?> " alt=""></a>
                           </div>
                     </div>
                  </div>
                  <div class="col-xl-7 col-lg-6 col-md-6 col-6">
                     <div class="menu-area menu-padding">
                           <div class="main-menu">
                              <nav id="mobile-menu">
								<?php wp_nav_menu(
										array('theme_location'=>'primary-menu')
									);  
								
								?>
								
								
                                 <!-- <ul>
                                    <li class="has-dropdown"><a href="index.php">Home</a>
                                       <ul class="sub-menu">
                                          <li><a href="index.html">Home One</a></li>
                                          <li><a href="index-2.html">Home Two</a></li>
                                          <li><a href="index-3.html">Home Three</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="services.html">Services</a>
                                       <ul class="sub-menu">
                                          <li><a href="services.html">Services</a></li>
                                          <li><a href="services-details.html">Services Details</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="about.html">Pages</a>
                                       <ul class="sub-menu">
                                          <li><a href="about.html">About Us</a></li>
                                          <li><a href="team.html">Team</a></li>
                                          <li><a href="team-details.html">Team Details</a></li>
                                          <li><a href="portfolio.html">Cases</a></li>
                                          <li><a href="portfolio-details.html">Cases Details</a></li>
                                          <li><a href="pricing.html">pricing Page</a></li>
                                          <li><a href="faq.html">FAQ Page</a></li>
                                       </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog.html">News</a>
                                       <ul class="sub-menu">
                                          <li><a href="blog.html">News</a></li>
                                          <li><a href="blog-details.html">News Details</a></li>
                                       </ul></li>
                                    <li><a href="contact.html">Contact</a></li>
                                 </ul> -->
                              </nav>
                           </div>
                     </div>
                     <div class="side-menu-icon d-lg-none text-end">
                        <a href="javascript:void(0)" class="info-toggle-btn f-right sidebar-toggle-btn"><i class="fal fa-bars"></i></a>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                     <div class="header-info f-right">
                           <div class="info-item info-item-right">
                              <span>Phone Number</span>
                              <h5><a href="tel:+88096389">786 686 350 36</a></h5>
                           </div>
                           <div class="info-item">
                              <span>Free Consultancy</span>
                              <h5><a href="mailto:info@webmail.com">info@webmail.com</a></h5>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </header>
      <!-- header-area-end -->

	    <!-- sidebar area start -->
		<div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
                  <i class="fal fa-times"></i>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="sidebar__logo mb-40">
                  <a href="index.html">
                  <img src="<?php bloginfo('template_directory');  ?> /assets/img/logo/logo-black.png" alt="logo">
                  </a>
               </div>
               <div class="sidebar__search mb-25">
                  <form action="#">
                     <input type="text" placeholder="What are you searching for?">
                     <button type="submit" ><i class="far fa-search"></i></button>
                  </form>
               </div>
               <div class="mobile-menu fix"></div>
               <div class="sidebar__contact mt-30 mb-20">
                  <h4>Contact Info</h4>
                  <ul>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A, Mirnada City Tower, NYC</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="far fa-phone"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="tel:+012-345-6789">088889797697</a>
                        </div>
                     </li>
                     <li class="d-flex align-items-center">
                        <div class="sidebar__contact-icon mr-15">
                           <i class="fal fa-envelope"></i>
                        </div>
                        <div class="sidebar__contact-text">
                           <a href="mailto:info@gmail.com">info@gmail.com</a>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="sidebar__social">
                  <ul>
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                     <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->     
      <div class="body-overlay"></div>
      <!-- sidebar area end --> 
 