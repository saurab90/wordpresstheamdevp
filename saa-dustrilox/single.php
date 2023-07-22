<?php
get_header();

?>



<main>

<!-- slider-area-start  -->
<section class="page__title-area page__title-height page__title-overlay d-flex align-items-center">
<div class="slide-bg">
     <img src="<?php bloginfo('template_directory');  ?> /assets/img/bg/page-bg.jpg" alt="">

</div>
  <div class="container">
     <div class="row">
        <div class="col-xxl-12">
           <div class="page__title-wrapper mt-100">
              <div class="breadcrumb-menu">
                 <ul>
                     <li><a href="index.html">Home</a></li>
                     <li><span>News</span></li>
                 </ul>
             </div>
              <h3 class="page__title mt-20">News Feeds</h3>
           </div>
        </div>
     </div>
  </div>
</section>
<!-- slider-area-end -->

<!-- blog__details-area start -->
<div class="blog__area pt-120 pb-65">
  <div class="container custom-container-3">

     <!-- my custom blog start -->

     <div class="row">
        <div class="col-lg-8">
           <div class="tp-blog__wrapper mb-50">
            
                          <div class="tp-blog mb-60">
                             <div class="tp-blog__thumb m-img mb-35">
                                <!-- <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-1.jpg" alt="blog-img"></a> -->
                                <a href="blog-details.html"><?php the_post_thumbnail('large');  ?></a>
                             </div>

                             <div class="tp-blog__content">
                                <div class="tp-blog__meta mb-15">
                                   
                                   <span><a href="#"><i class="fal fa-clock"></i><?php the_date();  ?> </a></span>
                                   
                                   <p> <i> <?php the_excerpt();  ?> </i> </p>
                                   <!-- <span><a href="#"><i class="far fa-user"></i> Iqbal</a></span>
                                   <span><a href="#"><i class="far fa-comments"></i> 2 Comments</a></span> -->
                                </div>
                                
                                <h3 class="tp-blog__title mb-15"><a href="blog-details.html"> <?php the_title();  ?> </a></h3>
                                
                                <p><?php the_content();  ?></p>
                                
                                <div class="tp-blog-btn mt-25">
                                   <!-- <a href="blog-details.html" class="tp-btn">Read More</a> -->
                                   <!-- <a href="<?php the_permalink();  ?>" class="tp-btn">Read More</a> -->
                                    <?php comments_template() ?>
                                </div>


                             </div>
                          </div>
                          <ul>
            <li>
               <!-- custom post Type with custom Fields Data -->
               <p>Today's Mood: <?php echo get_post_meta($post->ID, 'Mood', true); ?></p>
            </li>
   </ul>

              <div class="row">
                 <?php
                    echo wp_pagenavi();
                 ?>
              </div>

           </div>
        </div>
        <div class="col-lg-4">  
            <!-- call custom sidebar.php here --> 
            <?php get_sidebar();  ?>
        </div>
     </div>
     <!-- my custom blog end -->

     <!-- <div class="row">

        <div class="col-lg-8">
           <div class="tp-blog__wrapper mb-50">
              <div class="tp-blog mb-60">
                 <div class="tp-blog__thumb m-img mb-35">
                    <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-1.jpg" alt="blog-img"></a>
                 </div>

                 <div class="tp-blog__content">
                    <div class="tp-blog__meta mb-15">
                       <span><a href="#"><i class="fal fa-clock"></i> October 30, 2021 </a></span>
                       <span><a href="#"><i class="far fa-user"></i> Iqbal</a></span>
                       <span><a href="#"><i class="far fa-comments"></i> 2 Comments</a></span>
                    </div>
                    <h3 class="tp-blog__title mb-15"><a href="blog-details.html">Both the act of teaching knowledge to others and the act of kind.</a></h3>
                    <p>Nancy boy Charles down the pub get stuffed mate easy peasy brown bread car boot squiffy loo, blimey arse over tit it’s your round cup of char horse play chimney pot old. Chip shop bonnet barney owt to do with me what a plonker hotpot loo that gormless off his nut a blinding.</p>
                    <div class="tp-blog-btn mt-25">
                       <a href="blog-details.html" class="tp-btn">Read More</a>
                    </div>
                 </div>
              </div>
              <div class="tp-blog mb-60">
                 <div class="tp-blog__thumb m-img mb-35">
                    <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-2.jpg" alt="blog-img"></a>
                    <div class="vide-button vide-button-3">
                       <a href="https://www.youtube.com/watch?v=o4GuSJYSzrY" class="popup-video"><i class="fa-solid fa-play"></i></a>
                    </div>
                 </div>
                 <div class="tp-blog__content">
                    <div class="tp-blog__meta mb-15">
                       <span><a href="#"><i class="fal fa-clock"></i> October 29, 2021 </a></span>
                       <span><a href="#"><i class="far fa-user"></i> Maxson</a></span>
                       <span><a href="#"><i class="far fa-comments"></i> 2 Comments</a></span>
                    </div>
                    <h3 class="tp-blog__title mb-15"><a href="blog-details.html">How To Build And Launch Powerful Responsive Websites With Editor.</a></h3>
                    <p>Nancy boy Charles down the pub get stuffed mate easy peasy brown bread car boot squiffy loo, blimey arse over tit it’s your round cup of char horse play chimney pot old. Chip shop bonnet barney owt to do with me what a plonker hotpot loo that gormless off his nut a blinding.</p>
                    <div class="tp-blog-btn mt-25">
                       <a href="blog-details.html" class="tp-btn">Read More</a>
                    </div>
                 </div>
              </div>
              <div class="tp-blog mb-60">
                 <div class="tp-blog__thumb m-img mb-35">
                    <div class="tp-blog__slider swiper-container p-relative">
                       <div class="swiper-wrapper">
                          <div class="tp-blog__slider-item swiper-slide">
                             <img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-4.jpg" alt="">
                          </div>
                          <div class="tp-blog__slider-item swiper-slide">
                             <img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-5.jpg" alt="">
                          </div>
                          <div class="tp-blog__slider-item swiper-slide">
                             <img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/blog-d-6.jpg" alt="">
                          </div>
                       </div>
                       <div class="tp-blog-nav">
                          <button class="tp-blog-button-next"><i class="fal fa-arrow-right"></i></button>
                          <button class="tp-blog-button-prev"><i class="fal fa-arrow-left"></i></button>
                       </div>
                    </div>
                 </div>
                 <div class="tp-blog__content">
                    <div class="tp-blog__meta mb-15">
                       <span><a href="#"><i class="fal fa-clock"></i> October 27, 2021 </a></span>
                       <span><a href="#"><i class="far fa-user"></i>Chopper</a></span>
                       <span><a href="#"><i class="far fa-comments"></i> 2 Comments</a></span>
                    </div>
                    <h3 class="tp-blog__title mb-15"><a href="blog-details.html">New items are released weekly. Check out some of our newest.</a></h3>
                    <p>Nancy boy Charles down the pub get stuffed mate easy peasy brown bread car boot squiffy loo, blimey arse over tit it’s your round cup of char horse play chimney pot old. Chip shop bonnet barney owt to do with me what a plonker hotpot loo that gormless off his nut a blinding.</p>
                    <div class="tp-blog-btn mt-25">
                       <a href="blog-details.html" class="tp-btn">Read More</a>
                    </div>
                 </div>
              </div>
              <div class="tp-pagination">
                 <nav>
                    <ul>
                       <li>
                          <a href="blog.html">
                             <i class="far fa-angle-left"></i>
                          </a>
                       </li>
                       <li>
                          <a href="blog.html">1</a>
                       </li>
                       <li>
                          <span class="current">2</span>
                       </li>
                       <li>
                          <a href="blog.html">3</a>
                       </li>
                       <li>
                          <a href="blog.html">
                             <i class="far fa-angle-right"></i>
                          </a>
                       </li>
                    </ul>
                  </nav>
              </div>
           </div>
        </div>
        <div class="col-lg-4">
           <div class="blog-sidebar__wrapper pl-30">
              <div class="blog-sidebar__widget mb-55 d-none">
                 <div class="blog-sidebar__widget-content">
                    <div class="blog-sidebar__widget-head mb-30">
                       <h3 class="blog-sidebar__widget-title">About me</h3>
                    </div>
                    <div class="blog-sidebar__about">
                       <div class="featured__author text-center">
                          <a href="team-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/featured-img.jpg" alt=""></a>
                          <h6 class=" featured__author-title mt-20"><a href="team-details.html">Rosalina D. Willaimson</a></h6>
                          <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod
                              tempor
                              incidi dunt.</p>
                          <div class="featured__author-social">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-behance"></i></a>
                              <a href="#"><i class="fab fa-linkedin"></i></a>
                              <a href="#"><i class="fab fa-youtube"></i></a>
                          </div>
                      </div>
                    </div>
                 </div>
              </div>
              <div class="blog-sidebar__widget mb-55">
                 <div class="blog-sidebar__widget-content">
                    <div class="blog-sidebar__widget-head mb-30">
                       <h3 class="blog-sidebar__widget-title">Search Here</h3>
                    </div>
                    <div class="blog-sidebar__search p-relative">
                       <form action="#">
                          <input type="text" placeholder="Search your keyword...">
                          <button type="submit">
                             <i class="fa-light fa-magnifying-glass"></i>
                          </button>
                       </form>
                    </div>
                 </div>
              </div>
              <div class="blog-sidebar__widget mb-55">
                 <div class="blog-sidebar__widget-head mb-30">
                    <h3 class="blog-sidebar__widget-title">Recent posts</h3>
                 </div>
                 <div class="blog-sidebar__widget-content">
                    <div class="rc__post-wrapper">
                       <div class="rc__post d-flex align-items-start">
                          <div class="rc__thumb mr-20">
                             <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/sm-blog-1.jpg" alt=""></a>
                          </div>
                          <div class="rc__content">
                             <h6 class="rc__title"><a href="blog-details.html">The Importance  Intrinsic Motivation.</a></h6>
                             <div class="rc__meta">
                                <span><i class="fal fa-clock"></i> October 30, 2021</span>
                             </div>
                          </div>
                       </div>
                       <div class="rc__post d-flex align-items-start">
                          <div class="rc__thumb mr-20">
                             <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/sm-blog-2.jpg" alt=""></a>
                          </div>
                          <div class="rc__content">
                             <h6 class="rc__title"><a href="blog-details.html">A Better Alternative To Grading Student.</a></h6>
                             <div class="rc__meta">
                                <span><i class="fal fa-clock"></i> October 25, 2021</span>
                             </div>
                          </div>
                       </div>
                       <div class="rc__post d-flex align-items-start">
                          <div class="rc__thumb mr-20">
                             <a href="blog-details.html"><img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/sm-blog-3.jpg" alt=""></a>
                          </div>
                          <div class="rc__content">
                             <h6 class="rc__title"><a href="blog-details.html">Strategic Social Media &amp; Evolution of Visual</a></h6>
                             <div class="rc__meta">
                                <span><i class="fal fa-clock"></i> October 24, 2021</span>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="blog-sidebar__widget mb-55">
                 <div class="blog-sidebar__widget-head mb-30">
                    <h3 class="blog-sidebar__widget-title">Category</h3>
                 </div>
                 <div class="blog-sidebar__widget-content">
                       <ul>
                          <li><a href="blog.html">Category</a></li>
                          <li><a href="blog.html">Video &amp; Tips  (4)</a></li>
                          <li><a href="blog.html">Education  (8)</a></li>
                          <li><a href="blog.html">Business  (5)</a></li>
                          <li><a href="blog.html">UX Design  (3)</a></li>
                       </ul>
                 </div>
              </div>
              <div class="blog-sidebar__widget mb-55">
                 <div class="blog-sidebar__widget-head mb-30">
                    <h3 class="blog-sidebar__widget-title">Tags</h3>
                 </div>
                 <div class="blog-sidebar__widget-content">
                    <div class="tagcloud">
                       <a href="#">Art</a>
                       <a href="#">Course</a>
                       <a href="#">Videos</a>
                       <a href="#">App</a>
                       <a href="#">Education</a>
                       <a href="#">Data</a>
                       <a href="#">Machine </a>
                       <a href="#">Tips</a>
                    </div>
                 </div>
              </div>
              <div class="blog-sidebar__widget mb-55">
                 <div class="blog-sidebar__widget-head mb-30">
                    <h3 class="blog-sidebar__widget-title">Sponsor</h3>
                 </div>
                 <div class="blog-sidebar__banner m-img">
                    <img src="<?php bloginfo('template_directory');  ?> /assets/img/blog/sponsor.jpg" alt="">
                 </div>
              </div>
           </div>
        </div>
     </div> -->

  </div>
</div>
<!-- blog__details-area end  -->
</main>
















<?php
get_footer();

?>