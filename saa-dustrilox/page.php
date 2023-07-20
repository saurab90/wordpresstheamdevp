
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
               <div class="col-xl-8 col-lg-8">
                  <div class="ab-left-content">
                     <?php the_post_thumbnail('large');  ?>

                     <p class="abd-text"><?php the_content();  ?></p>
                     
                     <div class="ab-button mb-30">
                        <a href="about.html" class="tp-btn">Learn More</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="ab-left-content">
                        <!-- call custom sidebar.php here --> 
                        <?php get_sidebar();  ?>
                  </div>
               </div>
            </div>
         </div>
      </section> 
</main>

<?php
get_footer();

?>

