<?php session_start();
   if (empty($_SESSION['token'])) {
   
   $_SESSION['token'] = bin2hex(rand(11111,99999));
   
   }
   
   $token = $_SESSION['token']; ?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-N3T64WL');
      </script>
      <!-- End Google Tag Manager -->
      <!-- google Analytics -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-69365626-1"></script> -->
      <!-- <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag(){dataLayer.push(arguments);}
         
         gtag('js', new Date());
         
         
         
         gtag('config', 'UA-69365626-1');
         
      </script> -->
      <!-- google Analytics -->
      <!-- Global site tag (gtag.js) - Google Ads: 801694390 -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=AW-801694390"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag(){dataLayer.push(arguments);}
         
         gtag('js', new Date());
         
         
         
         gtag('config', 'AW-801694390');
         
      </script>
      <?php include 'inc/head-tag-inc.php';?>
      <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/main-lp.css" rel="stylesheet">
      <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/swiper.css" rel="stylesheet">
      <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/responsive-lp.css" rel="stylesheet">
      <link href="<?php echo getCurrentPageURL('base_url'); ?>/css/jquery.fancybox.min.css" rel="stylesheet">
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-152x152.png">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo getCurrentPageURL('base_url'); ?>/images/apple-icon-180x180.png">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo getCurrentPageURL('base_url'); ?>/images/android-icon-192x192.png">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo getCurrentPageURL('base_url'); ?>/images/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo getCurrentPageURL('base_url'); ?>/images/favicon-96x96.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo getCurrentPageURL('base_url'); ?>/images/favicon-16x16.png">
      <?php //include 'other-codes.php';?>
      <!-- Start of HubSpot Embed Code -->
      <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8221763.js"></script>
      <!-- End of HubSpot Embed Code -->
      <style>
         .hs-form-e3e8bf1b-56c7-42f7-9720-c14a2f4f5158_5d145354-b7ca-44a3-9be1-2e5170c3cba8 .hs-form-field label:not(.hs-error-msg) { color:#FFF !important }
         .infoboxwrp{
         margin-top: 25px;
         padding-bottom: 100px;
         }
         .home-bnr .home-sldr {
         overflow: visible;
         }
         .infoboxwrp .infobox{
         border-radius:10px;
         box-shadow: 0 3px 10px rgb(0 0 0 / 20%);
         background: #ffffff;
         min-height: 620px;
         overflow: hidden;
         }
         /* .infoboxwrp .infobox .infoimg{
         object-fit: cover;
         } */
         .infoboxwrp .infobox .desc {
         padding: 20px 35px;
         }  
         .infoboxwrp .infobox .desc .title{
         font-size: 22px;
         font-weight: 600;
         margin-top: 20px;
         }
         .infoboxwrp .infobox .desc ul{
         margin: 0;
         padding: 0;
         }
         .infoboxwrp .infobox .desc ul li{
         margin-left: 20px;
         font-size: 18px;
         margin-left: 25px;
         }
         .fs20 {
         margin-bottom: 50px;
         }
         .home-bnr .home-sldr .home-bnr-screen .formhubSpot {
         background: #fff;
         border-radius: 10px;
         }
         .formhubSpot-box{
         position: relative;
         }
         .home-bnr .home-sldr .home-bnr-screen .formhubSpot h5{
         color: #000;
         font-size: 16px !important;
         margin-bottom: 15px;
         }
         .employee-tracking-container .home-bnr {
         height:100%;
         }
         .employee-tracking-container .home-bnr .home-sldr .home-bnr-screen .bnr-caption-bx {
         width: 555px;
         }
         .common-ttle {
         font-style: normal;
         font-weight: 700;
         font-size: 35px;
         line-height: 1.4;
         text-align: center;
         color: #112A5F;
         }
         body .rtfc-wrp {
         min-height: auto;
         }
         .home-bnr .home-bnr-screen .formhubSpot {
         max-width: 600px;
         width: 100%;
         padding: 20px;
         /*            transform: translate(0, -50%);
         */        }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-box h2 {
         color: #fff;
         font-size: 35px;
         line-height: 1.4;
         font-weight: 600;
         margin-bottom: 20px;
         }
         .formhubSpot-box{
         position: relative;
         }
         .home-bnr .home-sldr .home-bnr-screen .formhubSpot .common-ttle{
         font-style: normal;
         font-weight: 700;
         font-size: 24px;
         line-height: 115%;
         color: #0D3C58;
         }
         .home-bnr .home-sldr .home-bnr-screen .formhubSpot h5{
         color: #000;
         font-size: 16px !important;
         margin-bottom: 15px;
         }
         .employee-tracking-container .home-bnr {
         height:100%;
         }
         .employee-tracking-container .home-bnr .home-sldr .home-bnr-screen .bnr-caption-bx {
         width: 555px;
         }
         #workforce-lp .award-winning-wrp .award-grid-workf .col-md-6 {
         justify-content: center;
         }
         #workforce-lp .award-winning-wrp .award-grid-workf .col-md-6 {
         background-color: #fff;
         -webkit-box-shadow: 0px 0px 14px 0px rgb(0 0 0 / 37%);
         -moz-box-shadow: 0px 0px 14px 0px rgba(0, 0, 0, 0.37);
         box-shadow: 0px 0px 14px 0px rgb(0 0 0 / 37%);
         flex: 0 0 45%;
         max-width: 45%;
         margin: 2%;
         padding: 20px;
         }
         .employee-tracking-container .home-bnr {
         height: 100%;
         background: #1e90ff url(https://www.prohance.net/new-lp/img/mask-group.png);
         width: 100%;
         background-repeat: no-repeat;
         background-position: left top;
         background-size: cover;
         }
         #workforce-lp .award-winning-wrp .award-grid-workf .award-work-card {
         margin-top: 0px;
         padding: 0px;
         }
         #workforce-lp .award-winning-wrp .award-grid-workf .award-work-card {
         background-color: #fff;
         -webkit-box-shadow:  none;
         -moz-box-shadow:  none;
         box-shadow: none;
         }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-bx {
         /* width: 385px; */
         position: relative;}
         .home-bnr .home-sldr .home-bnr-screen .cbox{
         display: flex;
         justify-content: space-around;
         position: relative;
         }
         .formhubSpot-box {
         position: relative;
         width: 65%;
         }
         .containerbox{
         max-width: 1360px;
         margin: 0 auto;
         }
         .prohance-white-logo {
         position: relative;
         top: auto;
         left:  auto;
         margin-top: 0;
         margin-bottom: 0px;
         padding-top: 20px;
         }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-box .subtitle, p.software-description {
         font-size: 24px;
         line-height: 30px;
         color: #f8d960;
         font-weight: 600;
         }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-box .feature-row .feature-text{
         font-size: 18px;
         line-height: 25px;
         color: #fff;
         font-weight: 600;
         margin: 0;
         }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-box ul{
         font-size: 20px;
         color: #fff
         }
         section.trusted-wrp {
         margin-top:200px;
         }
         .home-bnr .home-bnr-screen .formhubSpot {
         margin-bottom: 40px;
         }
         .bnr-caption-box {
         margin:40px 0px 0px 0px;
         }
         @media (min-width: 320px) and (max-width: 767px)
         {
         .formhubSpot-box, .bnr-caption-box {
         position: relative;
         width: 100%;
         }
         .bnr-caption-box {
         margin:0px 0px 0px 0px;
         }
         .home-bnr .home-sldr .home-bnr-screen .cbox{
         display: flex;
         justify-content: space-around;
         flex-wrap: wrap;
         position: relative;
         }
         .home-bnr .home-sldr .home-bnr-screen .bnr-caption-box, .prohance-white-logo {
         padding: 20px;
         }
         }
         section.time-tracking-section {
         background: #F1FBFF;
         padding: 40px 0;
         margin-bottom: 50px;
         }
         .trusted-wrp  .company-logo-wrp {
         display: flex;
         margin-top: 75px;
         max-width: 1440px;
         justify-content: center;
         gap: 40px;
         width: 100%;
         margin: 50px auto;
         list-style: none;
         align-items: center;
         }
         .trusted-wrp  .company-logo-wrp img {
         height: auto;  
         width: auto;  
         max-width: 100%;  
         }
         .feature-row {
         display: flex;
         margin-top: 33px;
         gap: 20px;
         }
         @media (max-width: 991px) {
         .feature-row {
         flex-wrap: wrap;
         }
         }
         .feature-item { 
         display: flex;
         gap: 19px;
         flex: 1;
         align-items: center;
         }
         .feature-icon {
         aspect-ratio: 1;
         object-fit: auto;
         object-position: center;
         width: 46px;
         margin: auto 0;
         }
         .feature-text {
         font-family: Lexend, sans-serif;
         flex-grow: 1;
         }
         .feature-item-alt {
         display: flex;
         gap: 17px;
         flex: 1;
         margin: auto 0;
         color: #fff;
         }
         .feature-icon-alt {
         aspect-ratio: 1;
         object-fit: auto;
         object-position: center;
         width: 51px;
         }
         .feature-text-alt {
         flex-grow: 1;
         margin: auto 0;
         color: #fff;
         }
         .feature-row-2 {
         display: flex;
         margin-top: 25px;
         width: 100%;
         gap: 20px;
         }
         @media (max-width: 991px) {
         .feature-row-2 {
         max-width: 100%;
         flex-wrap: wrap;
         }
         }
         .feature-item-2 {
         display: flex;
         align-items: start;
         gap: 20px;
         flex: 1;
         }
         .feature-icon-2 {
         aspect-ratio: 0.89;
         object-fit: auto;
         object-position: center;
         width: 43px;
         }
         .feature-text-2 {
         color: #fff; 
         flex-grow: 1;
         }
         .feature-item-3 {
         align-self: start;
         display: flex;
         margin-top: 8px;
         gap: 18px;
         flex: 1;
         }
         .feature-icon-3 {
         aspect-ratio: 1.18;
         object-fit: auto;
         object-position: center;
         width: 48px;
         align-self: start;
         }
         .feature-text-3 {
         width: 255px;
         color: #fff;
         }
         .feature-item-4 {
         align-self: start;
         display: flex;
         margin-top: 23px;
         gap: 20px;
         }
         .feature-icon-4 {
         aspect-ratio: 1;
         object-fit: auto;
         object-position: center;
         width: 39px;
         }
         .feature-text-4 {
         color: #fff;
         flex-grow: 1;
         margin: auto 0;
         }
         .time-tracking-section .section-title {
         color: #0d3c58;
         font: 700 42px Montserrat, sans-serif;
         }
         .time-tracking-section .section-description {
         color: #000;
         text-align: center;
         font: 400 24px Lexend, sans-serif;
         margin-top: 23px;
         }
         .time-tracking-section .content-wrapper {
         width: 100%;
         max-width: 1360px;
         margin: 44px auto 0
         }
         .time-tracking-section .content-columns {
         display: flex;
         gap: 20px;
         }
         .time-tracking-section .main-column {
         display: flex;
         flex-direction: column;
         width: 100%;
         }
         .time-tracking-section .main-content {
         flex-grow: 1;
         }
         .time-tracking-section .sub-columns {
         display: flex;
         gap: 20px;
         }
         .time-tracking-section .image-column {
         width: 56%;
         }
         .time-tracking-section .feature-image {
         aspect-ratio: 0.89;
         object-fit: auto;
         object-position: center;
         width: 100%;
         border-radius: 26px;
         box-shadow: 3px 4px 5.8px 0 rgba(0, 0, 0, 0.15);
         border: 1px solid #00ed85;
         flex-grow: 1;
         }
         .time-tracking-section .feature-column {
         border-radius: 26px;
         box-shadow: 3px 4px 5.8px 0 rgba(0, 0, 0, 0.15);
         border: 1px solid #00ed85;
         background-color: #f3fff5;
         display: flex;
         flex-grow: 1;
         padding-bottom: 45px;
         flex-direction: column;
         width: 100%;
         }
         .time-tracking-section .feature-card {
         }
         .time-tracking-section .card-header {
         border-radius: 26px 26px 0 0;
         border: 1px solid #00ed85;
         background-color: #fff;
         display: flex;
         flex-direction: column;
         justify-content: center;
         padding: 1px 0;
         }
         .time-tracking-section .header-image {
         aspect-ratio: 1.91;
         object-fit: auto;
         object-position: center;
         width: 100%;
         }
         .time-tracking-section .card-content {
         display: flex;
         margin-top: 24px;
         flex-direction: column;
         font-size: 16px;
         color: #000;
         font-weight: 400;
         padding: 0 33px;
         }
         .time-tracking-section .card-title {
         color: #0d3c58;
         font: 700 24px/27px Montserrat, sans-serif;
         }
         .time-tracking-section .feature-item {
         display: flex;
         margin-top: 18px;
         gap: 11px;
         }
         .time-tracking-section .feature-icon {
         aspect-ratio: 1.05;
         object-fit: auto;
         object-position: center;
         width: 19px;
         align-self: start;
         }
         .time-tracking-section .feature-text {
         font-family: Lexend, sans-serif;
         flex-grow: 1;
         flex-basis: auto;
         margin: 0;
         }
         .time-tracking-section .side-column {
         width: 30%;
         }
         .time-tracking-section .side-card {
         border-radius: 26px;
         box-shadow: 3px 4px 5.8px 0 rgba(0, 0, 0, 0.15);
         border: 1px solid #00ed85;
         background-color: #f3fff5;
         display: flex;
         flex-grow: 1;
         padding-bottom: 29px;
         flex-direction: column;
         width: 100%;
         }
         .time-tracking-section .side-card-content {
         display: flex;
         margin-top: 25px;
         flex-direction: column;
         font-size: 16px;
         color: #000;
         font-weight: 400;
         padding: 0 42px;
         }
         .time-tracking-section .side-feature-icon {
         aspect-ratio: 1.11;
         object-fit: auto;
         object-position: center;
         width: 20px;
         align-self: start;
         }
         .time-tracking-section .cta-button {
         border-radius: 10px;
         background: linear-gradient(91deg, #91e2a1 0.86%, #73be82 100%);
         margin-top: 36px;
         color: #fff;
         text-align: center;
         padding: 20px 36px;
         font: 700 18px Lexend, sans-serif;
         }
         @media (max-width: 991px) {
         .time-tracking-section .time-tracking-section {
         max-width: 100%;
         padding: 0 20px;
         }
         .time-tracking-section .section-title, .time-tracking-section .section-description {
         max-width: 100%;
         }
         .time-tracking-section .content-wrapper {
         max-width: 100%;
         margin-top: 40px;
         }
         .time-tracking-section .content-columns, .time-tracking-section .sub-columns {
         flex-direction: column;
         align-items: stretch;
         gap: 0;
         }
         .time-tracking-section .main-column, .time-tracking-section .image-column, .time-tracking-section .feature-column, .time-tracking-section .side-column {
         width: 100%;
         }
         .time-tracking-section .main-content, .time-tracking-section .feature-image, .time-tracking-section .feature-card, .time-tracking-section .side-card {
         margin-top: 40px;
         }
         .time-tracking-section .card-content, .time-tracking-section .side-card-content {
         padding: 0 20px;
         }
         .time-tracking-section .cta-button {
         padding: 20px;
         }
         }
         /*testimonial section*/
         .testimonial-container {
         width: 100%;
         max-width: 1240px;
         margin: 50px auto 0;
         }
         .testimonial-wrapper {
         gap: 20px;
         display: flex;
         width: 100%;
         max-width: 1440px;
         margin: 44px auto 0;
         }
         .testimonial-column {
         display: flex;
         flex-direction: column;
         line-height: normal;
         width: 50%;
         margin-left: 0;
         }
         .read-testimonial {
         display: flex;
         flex-direction: column;
         position: relative;
         overflow: hidden;
         min-height: 377px;
         flex-grow: 1;
         align-items: center;
         color: #0075ff;
         justify-content: center;
         padding: 100px 60px 80px;
         font: 400 22px Lexend, sans-serif;
         }
         .testimonial-background {
         position: absolute;
         inset: 0;
         height: 100%;
         width: 100%;
         object-fit: cover;
         object-position: center;
         }
         .testimonial-card {
         display: flex;
         flex-direction: column;
         fill: #f2f9ff;
         stroke: #0d3c58;
         overflow: hidden;
         border: 1px solid rgba(13, 60, 88, 1);
         position: relative;
         min-height: 351px;
         margin-top: 26px;
         flex-grow: 1;
         padding-bottom: 58px;
         }
         .testimonial-card {
         position: relative;
         padding: 20px;
         border-radius: 10px;
         background-color: #f2f9ff;
         width: fit-content;
         display: inline-block;
         overflow: visible;
         }
         .testimonial-card:after {
         content: "";
         position: absolute;
         border-width: 0px 0px 1px 1px;
         border-style: solid;
         width: 48.32px;
         border-color: #0d3c58;
         height: 54.76px;
         right: 100px;
         top: 322.76px;
         background: #f2f9ff;
         border-radius: 3px;
         transform: rotate(311deg);
         overflow: visible;
         background: #f2f9ff;
         }
         .testimonial-icon {
         aspect-ratio: 1.39;
         object-position: center;
         width: 75px;
         z-index: 9;
         position: absolute;
         right: 50px;
         top: -30px;
         }
         .testimonial-content {
         position: relative;
         display: flex;
         margin-top: 19px;
         flex-direction: column;
         padding: 0 36px;
         }
         .testimonial-title {
         color: #0d3c58;
         font: 500 30px Montserrat, sans-serif;
         }
         .testimonial-details {
         margin-top: 49px;
         }
         .testimonial-author {
         gap: 20px;
         display: flex;
         }
         .author-image-column {
         display: flex;
         flex-direction: column;
         line-height: normal;
         width: 27%;
         margin-left: 0;
         }
         .author-image {
         aspect-ratio: 1;
         object-fit: auto;
         object-position: center;
         width: 134px;
         max-width: 100%;
         }
         .author-info-column {
         display: flex;
         flex-direction: column;
         line-height: normal;
         width: 73%;
         margin-left: 20px;
         }
         .author-info {
         display: flex;
         flex-direction: column;
         font-weight: 400;
         }
         .read-link {
         color: #0075ff;
         font: 22px Lexend, sans-serif;
         }
         .author-name {
         color: #0d3c58;
         margin-top: 20px;
         font: 700 24px Montserrat, sans-serif;
         }
         .author-position {
         color: #000;
         margin-top: 9px;
         font: 18px Lexend, sans-serif;
         }
         @media (max-width: 991px) {
         .testimonial-container {
         max-width: 100%;
         margin-top: 40px;
         }
         .testimonial-wrapper {
         flex-direction: column;
         align-items: stretch;
         gap: 0;
         }
         .testimonial-column {
         width: 100%;
         }
         .read-testimonial {
         max-width: 100%;
         margin-top: 40px;
         padding: 40px 20px 0;
         }
         .testimonial-card {
         max-width: 100%;
         margin-top: 40px;
         }
         .testimonial-icon {
         margin-right: 10px;
         }
         .testimonial-content {
         max-width: 100%;
         padding: 0 20px;
         }
         .testimonial-title {
         max-width: 100%;
         }
         .testimonial-details {
         max-width: 100%;
         margin-top: 40px;
         }
         .testimonial-author {
         flex-direction: column;
         align-items: stretch;
         gap: 0;
         }
         .author-image-column {
         width: 100%;
         }
         .author-image {
         margin-top:0px;
         }
         .author-info-column {
         width: 100%;
         }
         .author-info {
         margin-top: 32px;
         }
         }
         /*Bottom Form section */
         .bottom-form{
         background: #1e90ff url(img/mask-group-4.png);
         background-size: 100% 100%;
         }
         .bottom-form .demo-section {
         display: flex;
         flex-direction: column;
         overflow: hidden;
         position: relative;
         min-height: 623px;
         width: 100%;
         align-items: center;
         justify-content: center;
         padding: 42px 60px  150px;
         }
         @media (max-width: 991px) {
         .bottom-form .demo-section {
         max-width: 100%;
         padding: 0 20px;
         }
         }
         .bottom-form .background-image {
         position: absolute;
         inset: 0;
         height: 100%;
         width: 100%;
         object-fit: cover;
         object-position: center;
         }
         .bottom-form .content-wrapper {
         position: relative;
         width: 100%;
         max-width: 1233px;
         }
         @media (max-width: 991px) {
         .bottom-form .content-wrapper {
         max-width: 100%;
         }
         }
         .bottom-form .flex-container {
         gap: 20px;
         display: flex;
         }
         @media (max-width: 991px) {
         .bottom-form .flex-container {
         flex-direction: column;
         align-items: stretch;
         gap: 0px;
         }
         }
         .bottom-form .left-column {
         display: flex;
         flex-direction: column;
         line-height: normal;
         width: 58%;
         margin-left: 0px;
         }
         @media (max-width: 991px) {
         .bottom-form .left-column {
         width: 100%;
         }
         }
         .bottom-form .text-content {
         position: relative;
         display: flex;
         flex-direction: column;
         align-self: stretch;
         margin: auto 0;
         }
         @media (max-width: 991px) {
         .bottom-form .text-content {
         max-width: 100%;
         margin-top: 40px;
         }
         }
         .bottom-form .main-heading {
         color: #fff;
         font: 700 42px Roc Grotesk, sans-serif;
         }
         @media (max-width: 991px) {
         .bottom-form .main-heading {
         max-width: 100%;
         }
         }
         .bottom-form .sub-heading {
         color: #fff500;
         margin-top: 51px;
         font: 600 30px Lexend, sans-serif;
         }
         @media (max-width: 991px) {
         .bottom-form .sub-heading {
         max-width: 100%;
         margin-top: 40px;
         }
         }
         .bottom-form .right-column {
         display: flex;
         flex-direction: column;
         line-height: normal;
         width: 42%;
         margin-left: 20px;
         }
         @media (max-width: 991px) {
         .bottom-form .right-column {
         width: 100%;
         }
         }
         .bottom-form .form-container {
         border-radius: 13px;
         border: 1px solid #00ed85;
         background-color: #fff;
         position: relative;
         display: flex;
         flex-grow: 1;
         flex-direction: column;
         font-size: 14px;
         color: #ff492c;
         font-weight: 300;
         line-height: 121%;
         width: 100%;
         padding: 50px 61px 30px;
         }
         @media (max-width: 991px) {
         .bottom-form .form-container {
         max-width: 100%;
         margin-top: 40px;
         padding: 0 20px;
         }
         }
         .bottom-form .hbspt-form{
         border-radius: 10px;
         } 
         .ph-yt-vdo {
             left: 0;
    position: absolute;
    bottom: -150px;
         }
         .ellipse-1 {
         background-color: #000;
         border-radius: 31.4px;
         height: 63px;
         left: 342px;
         position: absolute;
         top: 234px;
         width: 63px;
         }
         .polygon-1 {
         height: 22px;
         left: 367px;
         position: absolute;
         top: 254px;
         width: 19px;
         }
         @media (max-width:767px) {
         .casestudy-container {
         flex-wrap: wrap;
         padding: 15px;
         }
         .trusted-wrp  .company-logo-wrp {
         flex-wrap: wrap;
         }
         .casestudy-section .business-challenge-container, .casestudy-section .approach-container, .casestudy-section .improvements-container{
         width: auto;
         }
         .time-tracking-section .feature-column{
         margin-bottom: 40px;
         }
         .software-section .text-column, .software-section .image-column, .feature-item {
         width: 100%;
         } 
         .software-section .title {
         margin-top: 0px;
         font: 700 26px Montserrat, sans-serif;
         line-height:1.3;
         }
         .time-tracking-section .sub-columns, .software-section .text-column, .software-section .image-column, .feature-item, .testimonial-wrapper{
         padding: 0 15px
         }
         .testimonial-card:after{
         display:none!important;
         }
         .software-section .image-column{
         margin-left:0;
         }
         .common-ttle {
         font-size: 24px !important;
         }
         .bottom-form .right-column {
         margin-left: 0;
         }
         .time-tracking-section .card-footer {
         border-radius: 0 0 26px 26px;
         padding: 10px 16px;
         }
         .casestudy-container {
         margin-top: 20px;
         }
         .casestudy-section .case-study-subtitle{
         margin-top: 0px;
         padding: 8px;
         }
         .time-tracking-section .section-description {
         padding: 0 15px;
         }
         .ph-yt-vdo {
         left: auto;
         position: absolute;
         bottom: 0;
         }
         section.trusted-wrp {
         margin-top:0px;
         }
         }
      </style>
      </style>
   </head>
   <body class="employee-tracking-container">
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N3T64WL"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <section class="home-bnr mt0">
         <div class="swiper-container home-sldr">
            <div class="swiper-slide home-bnr-screen ">
               <div class="prohance-white-logo containerbox"><img src="images/prohance-white-logo.png" alt=""></div>
               <break></break>
               <div class="cbox containerbox">
                  <div class="bnr-caption-box">
                     <h2 class="mt-3">Employee Time Monitoring Software to Monitor Work Hours</h2>
                     <p class="subtitle">Helping organizations gain visibility of employee activities and monitor time worked.</p>
                     <p class="software-description">ProHance - #1 Work Management Software for All Businesses</p>
                     <div class="feature-row">
                        <div class="feature-item">
                           <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/baaa7bef73641ae70e02c405d51673e9468d55f067ee3986042c0352f8434284?apiKey=13afca4f450b492581b6852c1eaebe93&amp;" alt="Automated work tracking icon" class="feature-icon">
                           <p class="feature-text">Automated work monitoring
                              software for desktop based
                              workforce
                           </p>
                        </div>
                        <div class="feature-item-alt">
                           <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2cdda01b8d7a6131c3aa51abf89af58267ed9ffc7fe81fb3dc9930348e138839?apiKey=13afca4f450b492581b6852c1eaebe93&amp;" alt="Measure work hours icon" class="feature-icon-alt">
                           <p class="feature-text">Measure the work hours of your employees</p>
                        </div>
                     </div>
                     <div class="feature-row">
                        <div class="feature-item">
                           <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3fe0b5055b6ea9455ee351462bd5fb26966fdce35f1684c3ea889214c6155906?apiKey=13afca4f450b492581b6852c1eaebe93&amp;" alt="Set productivity benchmarks icon" class="feature-icon-2">
                           <p class="feature-text">Set & measure productivity benchmarks</p>
                        </div>
                        <div class="feature-item">
                           <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/52c51ff508205870e567cfaff1a627436f5089493e95f7a4d8de694d4d67ec12?apiKey=13afca4f450b492581b6852c1eaebe93&amp;" alt="Work pattern analysis icon" class="feature-icon-3">
                           <p class="feature-text">Provides complete work pattern analysis</p>
                        </div>
                     </div>
                     <div class="feature-row">
                        <div class="feature-item">
                           <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ed43305c90924c608a6ee63f3dfbfb220eabbdc2f4a43e026ab866e68e8e9a8d?apiKey=13afca4f450b492581b6852c1eaebe93&amp;" alt="Cost optimization icon" class="feature-icon-4">
                           <p class="feature-text">Enables Cost Optimization across Teams</p>
                        </div>
                     </div>
                  </div>
                  <div class="formhubSpot-box">
                     <div class="formhubSpot ">
                        <!--                         <span class="blob-bx tt-bnr-pic"><img src="images/t-t-p-m-i_1.png" alt="" width="98%" ></span>
                           -->
                        <h2 class="common-ttle text-center">Ready to Get Full Visibility Into your Operations?</h2>
                        <h5 class="text-center">Ready to experience ProHance ?</h5>
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script data-hubspot-rendered="true">
                           hbspt.forms.create({
                           region: "na1",
                           portalId: "8221763",
                           formId: "e3e8bf1b-56c7-42f7-9720-c14a2f4f5158"
                           });
                        </script>
                     </div>
                  </div>
                  <div class="ph-yt-vdo">
                     <a data-fancybox href="https://www.youtube.com/watch?v=X4ZBcXcPfhQ" class="">
                        <!-- <div class="ellipse-1"></div>-->
                        <img class="img-fluid" src="images/video-poster-phlp.png" alt="video ProHance">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="trusted-wrp common-pd-tb">
         <h2 class="common-ttle text-center">Trusted By
            Over <span style="color: #91e2a1;">370,000+ </span>Users In <span style="color: #91e2a1;"> 25+ </span>Countries
         </h2>
         <ul class="company-logo-wrp">
            <li> <img class="group-629237" src="img/cognizant.png" alt="Group 629237">
            </li>
            <li> <img class="image-37" src="img/image-37.png" alt="image 37">
            </li>
            <li>  <img class="image-27" src="img/image-27.png" alt="image 27">
            </li>
            <li>  <img class="image-24" src="img/american-exp.png" alt="image 24">
            </li>
            <li>   <img class="image-28" src="img/image-28.png" alt="image 28">
            </li>
            <li>   <img class="image-29" src="img/image-29.png" alt="image 29">
            </li>
         </ul>
         <ul class="company-logo-wrp">
            <li>   <img class="image-32" src="img/image-32.png" alt="image 32">
            </li>
            <li>   <img class="image-14" src="img/image-14.png" alt="image 14">
            </li>
            <li>   <img class="image-18" src="img/image-18.png" alt="image 18">
            </li>
            <li>   <img class="group-629238" src="img/group-629238.png" alt="Group 629238">
            </li>
            <li>   <img class="image-31" src="img/image-31.png" alt="image 31">
            </li>
            <li>  <img class="abc-logo-1" src="img/abc-logo-1.png" alt="abc-logo 1"> 
            </li>
         </ul>
      </section>
      <section class="time-tracking-section">
         <h2 class="common-ttle text-center">Automated Time Tracking & Real-Time Visibility</h2>
         <p class="section-description">Work time module provides the analytics and key insights for the organization to manage the new-age hybrid workforce.</p>
         <div class="content-wrapper">
            <div class="content-columns">
               <div class="main-column">
                  <div class="main-content">
                     <div class="sub-columns">
                        <div class="feature-column">
                           <div class="feature-card">
                              <div class="card-header">
                                 <img loading="lazy" src="https://www.prohance.net/new-lp/img/ph-testimonial-lp.png" class="header-image" alt="Hybrid workforce tracking header" />
                              </div>
                              <div class="card-content">
                                 <h3 class="card-title">Real-Time Employee Monitoring</h3>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4f8299e3cf8f1a30d344ec90ef3d38154291222aecbd9e7a51e0f4c79fc6fee?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Real-time employee work time monitoring</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Best time tracking software for employees</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Avoid burnout and under-utilization of resources</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Balance workload across individuals and teams</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="feature-column">
                           <div class="feature-card">
                              <div class="card-header">
                                 <img loading="lazy" src="https://www.prohance.net/new-lp/img/ph-testimonial-2-lp.png" class="header-image" alt="Hybrid workforce tracking header" />
                              </div>
                              <div class="card-content">
                                 <h3 class="card-title">Hybrid Workforce Tracking</h3>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c4f8299e3cf8f1a30d344ec90ef3d38154291222aecbd9e7a51e0f4c79fc6fee?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Accurate, real time employee tracking</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Insights on employee break time</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Remote workforce task tracking</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4481a0e347e34e4121bfef618f9d1079dee4c2445fb2fa975d55d311caf58014?apiKey=13afca4f450b492581b6852c1eaebe93&" class="feature-icon" alt="" />
                                    <p class="feature-text">Actionable insights on time worked</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="feature-column">
                           <div class="feature-card">
                              <div class="card-header">
                                 <img loading="lazy" src="https://www.prohance.net/new-lp/img/ph-testimonial-3-lp.png" class="header-image" alt="Hybrid workforce tracking header" />
                              </div>
                              <div class="card-content">
                                 <h3 class="card-title">Control & Compliance</h3>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6219af6a5f00d89a100af20d859031d7c112fb54126021b5a73e365a049552a0?apiKey=13afca4f450b492581b6852c1eaebe93&" class="side-feature-icon" alt="" />
                                    <p class="feature-text">Track current activity employees</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6219af6a5f00d89a100af20d859031d7c112fb54126021b5a73e365a049552a0?apiKey=13afca4f450b492581b6852c1eaebe93&" class="side-feature-icon" alt="" />
                                    <p class="feature-text">On demand screen capture</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/6219af6a5f00d89a100af20d859031d7c112fb54126021b5a73e365a049552a0?apiKey=13afca4f450b492581b6852c1eaebe93&" class="side-feature-icon" alt="" />
                                    <p class="feature-text">Protect confidential data</p>
                                 </div>
                                 <div class="feature-item">
                                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9317c2cf6d68a78576059c9ae13533c943903776236267239e7f8cf1454fa5da?apiKey=13afca4f450b492581b6852c1eaebe93&" class="side-feature-icon" alt="" />
                                    <p class="feature-text">Adhering global data privacy standards</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="text-center mt-5 ">
            <a class="common-cta HubSpotBt cta-button" href="javascript:;">Book A Demo with Product Expert</a>
         </div>
      </section>
      <section class="testimonial-container">
         <h2 class="common-ttle text-center">Testimonials</h2>
         <div class="testimonial-wrapper">
            <div class="testimonial-column">
               <article class="testimonial-card">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7a1b041ab0c8ad095847ce9b36c45c366cd52899d67d5cebeb645c8eadc6322?apiKey=13afca4f450b492581b6852c1eaebe93&" class="testimonial-icon" alt="Testimonial icon" />
                  <div class="testimonial-content">
                     <h2 class="testimonial-title">Retail Industry - Workforce Analytics & Capacity Utilization</h2>
                     <div class="testimonial-details">
                        <div class="testimonial-author">
                           <div class="author-image-column">
                              <img loading="lazy" src="images/madhu-natesan.png" class="author-image" alt="Madhu Natesan" />
                           </div>
                           <div class="author-info-column">
                              <div class="author-info">
                                 <a  data-fancybox  href="https://www.youtube.com/watch?v=IU2VTDBlFgs-3SQxbWOFoIb4kiPp&t=41s"  class="read-link">See Testimonial </a>
                                 <h3 class="author-name">Madhu Natesan</h3>
                                 <p class="author-position">VP - Merchandising Operations, Hudson Bay</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
            <div class="testimonial-column">
               <article class="testimonial-card">
                  <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c7a1b041ab0c8ad095847ce9b36c45c366cd52899d67d5cebeb645c8eadc6322?apiKey=13afca4f450b492581b6852c1eaebe93&" class="testimonial-icon" alt="Testimonial icon" />
                  <div class="testimonial-content">
                     <h2 class="testimonial-title">Driving Operational Excellence in Work From Home Environment</h2>
                     <div class="testimonial-details">
                        <div class="testimonial-author">
                           <div class="author-image-column">
                              <img loading="lazy" src="images/binu-nair.png" class="author-image" alt="Binu Nair" />
                           </div>
                           <div class="author-info-column">
                              <div class="author-info">
                                 <a  data-fancybox  href="https://www.youtube.com/watch?v=2ms-NTIPDtE&t=10s" class="read-link">See Testimonial</a>
                                 <h3 class="author-name">Binu Nair</h3>
                                 <p class="author-position">Vice President-Training & Quality Assurance, Everise</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </article>
            </div>
         </div>
      </section>
    <section class="ttlp-award-wrp pb-5 pt-5">
         <div class="container-1360-wrp plr-15">
            <h2 class="common-ttle text-center">Award Winning Operations 
               Enablement Platform
            </h2>
            <div class="ttlp-award-sldr swiper-container">
               <div class="swiper-wrapper">

                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/highest-user-adoption-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/high-performer-asia-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/high-performer-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/sumer-best-roi-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/summer-asia-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/summer-fastest-implementation-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/summer-mid-market-awards.png" alt="" class="img-fluid">
                     </div>
                  </div>
                 
                  <div class="swiper-slide">
                     <div class="ttlp-award-bx">
                        <img src="images/ttpl-badges2.png" alt="" class="img-fluid">
                     </div>
                  </div>
                   
                
               </div>
               <div class="swiper-pagination ttlp-pagi"></div>
            </div>
         </div>
         <div class="award-seg-wrp">
         </div>
      </section>
      <section class="bottom-form">
         <div class="demo-section">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/771ab05a59f0273b50813b1cbb921e641082b5ce2e75bbe50e25337c99982f4f?apiKey=13afca4f450b492581b6852c1eaebe93&" alt="" class="background-image" />
            <div class="content-wrapper">
               <div class="flex-container">
                  <div class="left-column">
                     <div class="text-content">
                        <h2 class="main-heading">Ready To Get Full Visibility Into Your Operations?</h2>
                        <p class="sub-heading">Book a Free Demo Now!</p>
                     </div>
                  </div>
                  <div class="right-column">
                     <div class="formhubSpot">
                        <!--                         <span class="blob-bx tt-bnr-pic"><img src="images/t-t-p-m-i_1.png" alt="" width="98%" ></span>
                           -->
                        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                        <script data-hubspot-rendered="true">
                           hbspt.forms.create({
                           region: "na1",
                           portalId: "8221763",
                           formId: "e3e8bf1b-56c7-42f7-9720-c14a2f4f5158"
                           });
                        </script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- <section class="rtfc-wrp tt-land-btn">
         <div class="rtfc-container"> -->
      <!-- <h2 class="common-ttle text-center">Ready to Get Full Visibility Into your Operations?</h2>
         <p>Ready to experience ProHance</p> -->
      <!-- <a href="javascript:;" class="HubSpotBt">HubSpot Form</a> -->
      <!-- <a href="javascript:void(0)">New Features</a> -->
      <!--[if lte IE 8]>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
      <![endif]-->
      <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
         <script>
         hbspt.forms.create({
         region: "na1",
         portalId: "8221763",
         formId: "e3e8bf1b-56c7-42f7-9720-c14a2f4f5158"
         });
         </script> -->
      <!-- 
         </div>
         </section> -->
      <?php //include 'read_more_form.php'; ?>
      <?php //include 'footer.php';?>
      <div class="sticky-banner sticky-remove">
         <div class="sticky-banner__item">
            <a href="javascript:;" class="btn btn--outline HubSpotBt">
            <span>
            Book A Demo with Product Expert
            </span>
            </a>
         </div>
         <div class="sticky-banner__item">
            <a data-fancybox href="https://www.youtube.com/watch?v=55nFREGvrzg" class="btn btn--outline">
            <span>
            Watch 2-Mins Overview Video
            </span>
            </a>
         </div>
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <!-- <script src="https://www.prohance.net/js/jquery-3.3.1.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
         
         integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
         
         </script>
         
         <script src="https://www.prohance.net/js/bootstrap.min.js"></script>
         
         
         
         <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
         
         <script src="https://www.prohance.net/js/jquery.fancybox.min.js"></script>
         
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
         
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
      <script src="https://www.prohance.net/js/mainjs1.js"></script>
      <script>
         $('a.HubSpotBt').click(function(){
         //$('.hbspt-form').addClass('showhbspt-form')
         $('html, body').animate({
         scrollTop: $(".hbspt-form").offset().top
         }, 800);
         
         });
         
         
         /* $(window).scroll(function() {
         $(".sticky-banner").removeClass("viewport-bottom");
         if($(window).scrollTop() + $(window).height() > ($(document).height() - 100) ) {
         //you are at bottom
         $(".sticky-banner").addClass("viewport-bottom");
         }
         });
         */
         
         
         $(window).scroll(function() {
         if ($(window).scrollTop() >= 400) {
         $('.sticky-banner').addClass('sticky-slideup');
         } else {
         $('.sticky-banner').removeClass('sticky-slideup');
         }
         });
         
         
         $(window).scroll(function() {
         if ($('.sticky-remove').offset().top + $('.sticky-remove').outerHeight() > $('.rtfc-wrp').offset().top) {
         $('.sticky-remove').addClass('hidden');
         } else {
         $('.sticky-remove').removeClass('hidden');
         }
         });
         
         
         (function ($) {
         
         
         var windowWidth = $(window).width();
         //  if(windowWidth>767){
         $.when(
         $.getScript("/js/slick.min.js"),
         $.getScript("/js/swiper-bundle.min.js"),
         $.getScript("/js/jquery.fancybox.min.js"),
         
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
         
         slidesPerView:'5',
         
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
         
         
         
         var swiper = new Swiper(".ttlp-trust-sldr", {
         
         navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
         },
         breakpoints: {
         320: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         480: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         640: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         768: {
         slidesPerView: 2,
         spaceBetween: 20,
         },
         1024: {
         slidesPerView: 2,
         spaceBetween:20,
         },
         },
         /* autoplay: {
         delay: 3000,
         disableOnInteraction: true,
         
         }, */
         });
         
         
         var swiper = new Swiper('.ttlp-award-sldr', {
         effect: 'coverflow',
         grabCursor: true,
         spaceBetween:20,
         centeredSlides: false,
         loop:'true',
         speed: 2000,
         coverflowEffect: {
         rotate: 0,
         stretch: 0,
         depth: 500,
         modifier: 1,
         slideShadows: false,
         },
         autoplay: {
         delay: 1500,
         disableOnInteraction: true,
         },
         pagination: {
         el: '.ttlp-pagi',
         clickable: true,
         },
         breakpoints: {
         320: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         480: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         640: {
         slidesPerView: 1,
         spaceBetween: 20,
         },
         768: {
         slidesPerView: 2,
         spaceBetween: 20,
         },
         1024: {
         slidesPerView: 6,
         spaceBetween: 20,
         },
         },
         });
         
         
         });
         //}
         })(jQuery);
         
      </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js" integrity="sha512-XZEy8UQ9rngkxQVugAdOuBRDmJ5N4vCuNXCh8KlniZgDKTvf7zl75QBtaVG1lEhMFe2a2DuA22nZYY+qsI2/xA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
         // var swiper3 = new Swiper(".indus-thumb-wrp", {
         
         //     loop: true,
         
         //    slidesPerView: 7,
         
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
         
         
         
         
         $('.accordion-list > li > .answer').hide();
         
         $('.accordion-list > li').click(function() {
         if ($(this).hasClass("active")) {
         $(this).removeClass("active").find(".answer").slideUp();
         } else {
         $(".accordion-list > li.active .answer").slideUp();
         $(".accordion-list > li.active").removeClass("active");
         $(this).addClass("active").find(".answer").slideDown();
         }
         return false;
         });
         
         
         
         
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