
<?php
get_header();
the_post();

?>

<main>

         <div class="container">
            <div class="row showpath">
               <div class="col-xl-12">
                  <div class="brand__title text-center">
                     <span><u> <a href="<?php echo site_url();  ?> "> <i> Home/</a> <?php the_title();  ?>: </i> </u> </br></span>
                  </div>
               </div>
            </div>
            
         </div>

        <section class="pagespaceing">
         <div class="container">
            <div class="row align-items-center">
               <!-- <div class="col-xl-2 col-lg-2">
                  <div class="ab-tab-info mb-30">
                     <div class="ab-image w-img">
                        <img src="<?php bloginfo('template_directory');  ?> /assets/img/about/about-1.jpg" alt="">
                     </div>
                     <div class="absp-text absp-text-1">
                        <i class="flaticon-windmill"></i>
                        <div class="absp-info">
                           <h5><span class="counter">5000</span>+</h5>
                           <span class="absm-title">Projects Done</span>
                        </div>
                     </div>
                     <div class="absp-text absp-text-2">
                        <i class="flaticon-container-1"></i>
                        <div class="absp-info">
                           <h5><span class="counter">3300</span>+</h5>
                           <span class="absm-title">Happy Customer</span>
                        </div>
                     </div>
                  </div>
               </div> -->
               <div class="col-xl-12 col-lg-12">
                  <div class="ab-left-content">
                     <?php the_post_thumbnail('large');  ?>

                     <p class="abd-text"><?php the_content();  ?></p>
                     
                     <div class="ab-button mb-30">
                        <a href="about.html" class="tp-btn">Learn More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

</main>

<?php
get_footer();

?>

