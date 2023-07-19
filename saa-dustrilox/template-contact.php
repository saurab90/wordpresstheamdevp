<?php  
//Template Name: tmp-contactus
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
                            <li><span>Contact</span></li>
                        </ul>
                    </div>
                     <h3 class="page__title mt-20">Get In Touch</h3>      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- slider-area-end -->

      <!-- contact__area start -->
      <section class="contact__area pt-120 pb-80" >
        <div class="slide-bg">
            <img src="<?php bloginfo('template_directory');  ?> /assets/img/bg/contact-bg.png" alt="">

       </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fal fa-envelope-open-text"></i>
                     </div>
                     <h5 class="contact__title mb-25">Email Address</h5>
                     <div class="contact__text">
                        <p><a href="mailto:info@webmail.com">info@webmail.com</a></p>
                        <p><a href="mailto:jobs@websitehints.com">jobs@websitehints.com</a></p>
                     </div>
                     <div class="contact__button mt-30">
                        <a href="mailto:jobs@websitehints.com" class="tp-btn-white">Email Us <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-phone"></i>
                     </div>
                     <h5 class="contact__title mb-25">Phone Number</h5>
                     <div class="contact__text">
                        <p><a href="tel:+78923656825">789. 236. 568. 25</a></p>
                        <p><a href="tel:+7892516563">789 (125) 165 63</a></p>
                     </div>
                     <div class="contact__button mt-30">
                        <a href="tel:+7892516563" class="tp-btn-white">Call Us <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-map-location-dot"></i>
                     </div>
                     <h5 class="contact__title mb-25">Office Address</h5>
                     <div class="contact__text">
                        <p><a href="https://goo.gl/maps/ZW5MZEgAG4zRJc6B7" target="blank">15 E Joseph St, Moonachie, <br> NJ 07074, USA</a></p>
                     </div>
                     <div class="contact__button mt-30">
                        <a href="https://goo.gl/maps/ZW5MZEgAG4zRJc6B7" target="blank" class="tp-btn-white">Direction <i class="fa-light fa-arrow-right-long"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="contact__item text-center mb-30">
                     <div class="contact__icon mb-35">
                        <i class="fa-light fa-bullseye-arrow"></i>
                     </div>
                     <h5 class="contact__title mb-25">Social Connect</h5>
                     <div class="contact__social mt-30">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-behance"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact__area end -->

      <!-- contact__area-2 start -->
      <section class="contact__area-2">
         <div class="container">
            <div class="contact__form">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="section__wrapper mb-45">
                           <h4 class="section__title">We can take your business to the next level.</h4>
                           <div class="r-text">
                              <span>contact</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12">
                        <form id="contact-form" action="mail.php" method="POST">
                           <div class="row">
                              <div class="col-lg-6">
                                 <div class="contact-filed mb-20">
                                    <input type="text" name="name" placeholder="Enter your name here">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="contact-filed contact-icon-mail mb-20">
                                    <input email="text" name="email" placeholder="Enter email address here">
                                </div>
                              </div>
                           </div>
                           <div class="contact-filed contact-icon-message mb-25">
                              <textarea placeholder="Enter message here" name="message"></textarea>
                          </div>
                          <div class="contact__form-agree  d-flex align-items-center mb-20">
                              <input name="checkbox" class="e-check-input" type="checkbox" id="e-agree">
                              <label class="e-check-label" for="e-agree">I agree to the<a href="contact.html">Terms &amp; Conditions</a></label>
                           </div>
                           <div class="form-submit text-center">
                               <button class="tp-btn" type="submit">Submit Request</button>
                           </div>
                           <p class="ajax-response"></p>
                       </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- contact__area-2 end -->

      <!-- contact__map start -->
      <section class="contact__map">
         <div class="contact__map-wrap">
             <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=Mission%20District%2C%20San%20Francisco%2C%20CA%2C%20USA&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
             <div class="contact__map-icon">
                  <i class="fa-solid fa-location-dot"></i>
                  <img src="<?php bloginfo('template_directory');  ?> /assets/img/bg/contact-icon-bg.png" alt="">
             </div>
         </div>
      </section>
      <!-- contact__map end -->

     </main>





<?php 
    get_footer();

?>