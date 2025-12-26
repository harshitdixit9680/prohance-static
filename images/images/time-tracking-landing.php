<?php session_start();

if (empty($_SESSION['token'])) {

    $_SESSION['token'] = bin2hex(rand(11111,99999));

}

$token = $_SESSION['token']; ?>

<!doctype html>

<html lang="en">



<head>

  <meta charset="utf-8">


  <title>ProHance | Workforce & Productivity Analytics | Employee Engagement</title>



  <meta name="description" content="ProHance is an Operations Management Platform compatible with Multiple operating systems. It helps organizations to analyze employee Monitoring and productivity insights." />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"

    integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous">

  </script>
 

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 
  <link href="css/main-lp.css" rel="stylesheet">

  <link rel="canonical" href="https://www.prohance.net/" />

   <link href="css/swiper.css" rel="stylesheet">

   <link href="css/responsive-lp.css" rel="stylesheet">


  <?php include 'other-codes.php';?>



</head>



<body>



  <?php include 'header.php';?>



  <section class="home-bnr">

    <div class="swiper-container home-sldr">

      <div class="swiper-wrapper">



        <div class="swiper-slide home-bnr-screen screen-bg1">

          <div class="container-1360-wrp">

            <div class="bnr-caption-bx">

              <h2>Leading Time Tracking & Productivity Monitoring Software</h2>

              <p>ProHance Analytics - #1 Work Management
                Software for All Businesses</p>

              <a class="common-cta" href="14days-trial.php">Start 14 Day Trial Now</a>

            </div>



           



            <div class="bnr-pic-bx">

            <span class="blob-bx tt-bnr-pic"><img src="images/time-tacking-bnr-pic.png" alt="" class="img-fluid"></span>

            </div>



          </div>

        </div>




      </div>

      <!-- <div class="swiper-pagination home-bnr-pagi"></div> -->

    </div>

  </section>



<section class="trusted-wrp common-pd-tb">
<h2 class="common-ttle text-center">Trusted by<br> over <span class="green">200,000+</span> users in <span class="green">24+</span> countries</h2>

<div class="cntr-desg-wrp text-center mt-5">
 <!--<img src="images/Work-Time_2022-optmized.jpg" alt="" class="img-fluid"> -->
 
 <div class="ttlp-trust-sldr swiper-container">
 <div class="swiper-wrapper">
 <div class="swiper-slide">
  <img src="images/ttle-sldr4.jpg" class="img-fluid">
  <p>Evaluate key business metrics against time metrics</p>
 </div>

 <div class="swiper-slide">
  <img src="images/ttle-sldr3.jpg" class="img-fluid">
  <p>Analyze work-related time metrics to provide actionable insights</p>
 </div>

 <div class="swiper-slide">
  <img src="images/ttle-sldr1.jpg" class="img-fluid">
  <p>Deep analytics on time metrics for lean management</p>
 </div>

 <div class="swiper-slide">
  <img src="images/ttle-sldr2.jpg" class="img-fluid">
  <p>Track turnaround time and other key business metrics in real-time</p>
 </div>

 </div>
 <div class="swiper-button-next swiper-button-black"></div>
 <div class="swiper-button-prev swiper-button-black"></div>
 </div>
 
</div>
</section>

<section class="pftt-wrp common-pd-tb">
    <h2 class="common-ttle text-center">ProHance Features Enabling Time Tracking<br>
        To Streamline Processes</h2>


        <div class="container-1360-wrp plr-15">

            <div class="att-wrp">
               <div class="row">
                <div class="col-md-6">
                  <div class="att-lhs">
                    <div class="bx">
                        <p class="ttle">Automated Time Tracking & Real-time Visibility into</p>
                        <p class="desc">Work time module provides the analytics and key insights for the organization to manage the new- age hybrid workforce</p>
                        <a href="#" class="common-cta">Know More</a>
                    </div>

                    <ul>
                     <li>Time Sheet & Attendance</li>
                     <li>Idle Hours</li>
                     <li>Productive Hours</li>
                     <li>Work Load Balancing</li>
                     <li>Goal Setting</li>
                     <li>Schedule Adherence </li>
                     <li>Report builder</li>   
                    </ul>

                  </div>  
                </div>
                <div class="col-md-6">
                 <div class="att-rhs">
                 <img src="images/pfett-pic.png" alt="" class="img-fluid">    
                 </div>   
                </div>   
               </div> 
            </div>

        </div>

</section>

<section class="trusted-wrp common-pd-tb">
    <h2 class="common-ttle text-center">Clients</h2>

    <div class="company-logo-wrp">

        <div class="company-logo-sldr swiper-container">
  
          <div class="swiper-wrapper">
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo1.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo2.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo3.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo4.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo5.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo6.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo7.png">
  
              </span>
  
            </div>
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo9.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo10.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo11.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo12.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo13.png">
  
              </span>
  
            </div>
  
  
  
            <div class="swiper-slide logo-slide">
  
              <span>
  
                <img class="img-fluid" src="images/comp-logo14.png">
  
              </span>
  
            </div>
  
  
  
  
  
          </div>
  
          <!-- <div class="swiper-pagination company-pagi"></div> -->
  
        </div>
  
      </div>

      <div class="text-center mt-5">
        <a href="#" class="common-cta">Start 14 Day Trial Now</a>
      </div>

</section>        


<section class="ttlp-award-wrp common-pd-tb">
    <div class="container-1360-wrp plr-15">
        <h2 class="common-ttle text-center">Award Winning Operations<br>
            Enablement Platform</h2>

            <div class="ttlp-award-sldr swiper-container">
             <div class="swiper-wrapper">
              
             <div class="swiper-slide">
              <div class="ttlp-award-bx">
                <img src="images/award1.png" alt="" class="img-fluid">  
              </div>   
             </div>  
             <div class="swiper-slide">
                <div class="ttlp-award-bx">
                  <img src="images/award2.png" alt="" class="img-fluid">  
                </div>   
               </div>  
               <div class="swiper-slide">
                <div class="ttlp-award-bx">
                  <img src="images/award4.png" alt="" class="img-fluid">  
                </div>   
               </div>  
               <div class="swiper-slide">
                <div class="ttlp-award-bx">
                  <img src="images/award5.png" alt="" class="img-fluid">  
                </div>   
               </div>  
               <div class="swiper-slide">
                <div class="ttlp-award-bx">
                  <img src="images/award6.png" alt="" class="img-fluid">  
                </div>   
               </div>  
               <div class="swiper-slide">
                <div class="ttlp-award-bx">
                  <img src="images/award7.png" alt="" class="img-fluid">  
                </div>   
               </div>   
                
             </div>

             <div class="swiper-pagination ttlp-pagi"></div>

            </div>

    </div>

    <div class="award-seg-wrp">
                 
    </div>

</section>

<section class="rtfc-wrp tt-land-btn">
    <div class="rtfc-container">
       <h2 class="common-ttle text-center">Ready to Get Full Visibility Into your Operations?</h2> 
       <p>Ready to discover smooth and seamless product</p>
       <a href="14days-trial.php">Start 14 Day Trial Now</a>
       <!-- <a href="javascript:void(0)">New Features</a> -->
    </div>
    </section>

  <?php include 'read_more_form.php'; ?>

  <?php include 'footer.php';?>

 

   



  <!-- Bootstrap core JavaScript

    ================================================== -->

  <!-- Placed at the end of the document so the pages load faster -->

  <!-- <script src="js/jquery-3.3.1.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"

    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">

  </script>

  <script src="js/bootstrap.min.js"></script>



  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
   

 
 

  <script src="js/mainjs1.js"></script>

 
    <script>
     (function ($) {


        var windowWidth = $(window).width();
          if(windowWidth>767){
                $.when(
                  $.getScript("/js/slick.min.js"),
                  $.getScript("/js/swiper-bundle.min.js"),

                  $.Deferred(function( deferred ){
                       $( deferred.resolve );
                  })
              ).done(function(){
                
    // var swiper = new Swiper(".home-sldr", {

    //   pagination: {

    //     el: ".home-bnr-pagi",

    //     clickable: true,

    //   },

    //   autoplay: {

    //       delay: 5000,

    //       disableOnInteraction: false,

    //     },

    // });



    var swiper = new Swiper(".company-logo-sldr", {

  spaceBetween: 0,

  centeredSlides: true,

  speed: 1000,

  autoplay: {

          delay: 0,

          disableOnInteraction: true,

        },

  loop: true,

  slidesPerView:'7',

  allowTouchMove: false,

  disableOnInteraction: true,

  breakpoints: {

    320: {

            slidesPerView: 2,

            spaceBetween: 20,

          },

          480: {

            slidesPerView: 2,

            spaceBetween: 20,

          },

          640: {

            slidesPerView: 2,

            spaceBetween: 20,

          },

          768: {

            slidesPerView: 4,

            spaceBetween: 40,

          },

          1024: {

            slidesPerView: 5,

            spaceBetween: 50,

          },

        },

    });


    

              });
          }
      })(jQuery);

    </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 

  <script>




var swiper = new Swiper(".ttlp-trust-sldr", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

var swiper = new Swiper('.ttlp-award-sldr', {
      effect: 'coverflow',
      grabCursor: true,
      spaceBetween:20,
      centeredSlides: false,
      loop:'true',
      speed: 2000,

autoplay: {

        delay: 1500,

        disableOnInteraction: true,

      },
      slidesPerView: 4,
      coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 500,
          modifier: 1,
          slideShadows: false,
        },
      pagination: {
        el: '.ttlp-pagi',
        clickable: true,
      },
    });


    // var swiper3 = new Swiper(".indus-thumb-wrp", {

    //     loop: true,

		//   	slidesPerView: 7,

    //     watchSlidesVisibility: true,

    //     watchSlidesProgress: true,

    //     centeredSlides: true,

    //     slideToClickedSlide: true,

    //     touchRatio: 0.2,

    //   });

    //   var swiper2 = new Swiper(".indus-cont-bx", {

    //     loop: true,

    //     spaceBetween: 30,

    //     navigation: {

    //       nextEl: ".swiper-button-next",

    //       prevEl: ".swiper-button-prev",

    //     },

    //     thumbs: {

    //       swiper: swiper3,

    //     },

    //   });









    $(document).ready(function () {





      $(".tab_content").hide();

      $(".tab_content:first").show();



      /* if in tab mode */

      $("ul.tabs li").click(function () {



        $(".tab_content").hide();

        var activeTab = $(this).attr("rel");

        $("#" + activeTab).fadeIn();



        $("ul.tabs li").removeClass("active");

        $(this).addClass("active");



        $(".tab_drawer_heading").removeClass("d_active");

        $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");



      });

      /* if in drawer mode */

      $(".tab_drawer_heading").click(function () {



        $(".tab_content").hide();

        var d_activeTab = $(this).attr("rel");

        $("#" + d_activeTab).fadeIn();



        $(".tab_drawer_heading").removeClass("d_active");

        $(this).addClass("d_active");



        $("ul.tabs li").removeClass("active");

        $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");

      });





      /* Extra class "tab_last" 

         to add border to right side

         of last tab */

      $('ul.tabs li').last().addClass("tab_last");










    });

  </script>





</body>



</html>