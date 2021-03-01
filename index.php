<?php
	require "./assets/less/lessc.inc.php";
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache); if (!is_array($cache) ||
$newCache["updated"] > $cache["updated"]) { file_put_contents($cacheFile,
serialize($newCache)); file_put_contents($outputFile, $newCache['compiled']); }
} autoCompileLess('./assets/less/style.less', './assets/css/style.css'); 
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s" ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>sosLanding</title>
   <link rel="stylesheet" href="assets/css/lustratio.css" />
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
   <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
   <div class="wrapper scroll-wrapper">
      <section class="sec-start section">
         <header class="header">
            <div class="container">
               <div class="header_wrapper">
                  <a href="#" class="logo">
                     <img src="assets/img/logo.png" alt="logo" />
                  </a>
                  <nav>
                     <ul class="menu">
                        <li class="item"><a href="#">main</a></li>
                        <li class="item"><a href="#">about</a></li>
                        <li class="item"><a href="#">game features</a></li>
                        <li class="item">
                           <a href="#">system requirements</a>
                        </li>
                        <li class="item"><a href="#">quotes</a></li>
                     </ul>
                  </nav>
                  <div class="header_rightside">
                     <div class="lang-switcher">
                        <a class="lang" href="#">ENG </a>
                        <div class="lang-sub">
                           <a href="#">RUS</a>
                           <a href="#">FRA</a>
                           <a href="#">DEU</a>
                        </div>
                     </div>
                     <div class="login-menu">
                        <a href="#" class="xbox">
                           <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M10.5514 3.15842C12.1356 3.77963 13.667 4.6001 15.1104 5.60225C15.2747 5.7136 15.4625 5.77221 15.6502 5.77221C15.838 5.77221 16.0257 5.7136 16.19 5.60225C17.6334 4.6001 19.1648 3.77377 20.7491 3.15256C21.107 3.0119 21.3476 2.66027 21.3417 2.27348C21.3417 1.88668 21.1011 1.54091 20.7373 1.40612C17.5689 0.204714 13.7315 0.204714 10.569 1.40612C10.211 1.54091 9.9646 1.89254 9.9646 2.27348C9.9646 2.65441 10.1876 3.01776 10.5514 3.15842Z" fill="#FFB548" />
                              <path d="M24.1587 3.16374C23.8594 2.95862 23.478 2.94104 23.1553 3.12271C21.4009 4.13072 19.7052 5.28524 18.1034 6.55698C17.8922 6.72693 17.7631 6.97893 17.7513 7.24852C17.7396 7.5181 17.8452 7.78183 18.0388 7.96936C21.3599 11.1282 25.96 20.8156 27.0162 25.2696C24.7278 21.4017 19.6231 12.3003 16.2845 9.18835C15.9265 8.8543 15.3633 8.8543 15.0053 9.18835C11.6608 12.3003 6.5737 21.4075 4.28536 25.2813C5.34152 20.8273 9.92992 11.1282 13.2509 7.96936C13.4504 7.78183 13.5561 7.5181 13.5443 7.24852C13.5326 6.97893 13.4035 6.72693 13.1923 6.55698C11.5904 5.28524 9.88885 4.13072 8.14033 3.12271C7.82935 2.94104 7.43622 2.95862 7.13698 3.16374C3.05905 5.97093 0.624023 10.5832 0.624023 15.506C0.624023 19.1043 1.92075 22.5738 4.28536 25.2813C7.11351 28.5984 11.2501 30.5089 15.6449 30.5089C20.0397 30.5089 24.1822 28.6042 27.0162 25.2755C29.369 22.5796 30.6658 19.1102 30.6658 15.506C30.6658 10.5832 28.2307 5.97093 24.1587 3.16374Z" fill="#FFB548" />
                           </svg>
                        </a>
                        <a href="#" class="steam">
                           <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7746 30.5089C24.0936 30.5089 30.8375 23.7932 30.8375 15.5089C30.8375 7.22461 24.0936 0.508881 15.7746 0.508881C7.45558 0.508881 0.71167 7.22461 0.71167 15.5089C0.71167 17.0369 0.941106 18.5116 1.36754 19.9005C1.47636 19.9201 1.6523 19.9646 1.90866 20.0395L1.50834 13.7669C1.50834 13.6519 1.7031 13.5966 1.88153 13.546C1.97946 13.5182 2.07247 13.4918 2.12567 13.4577C2.27094 13.3662 5.26258 14.454 5.42239 14.5262L9.248 16.2495C10.2359 15.6285 11.4175 15.3782 12.5797 15.5467L16.0566 11.3252C16.1002 7.95572 18.8604 5.24088 22.2551 5.23606C25.4269 5.26976 28.0564 7.67653 28.3567 10.8101C28.6763 14.1989 26.1775 17.2025 22.7684 17.525L16.9767 21.6406C16.6232 23.4457 15.3254 24.9235 13.5724 25.5107C10.8848 26.4157 7.96472 24.9812 7.05917 22.3049L5.04467 21.6406C4.89531 21.5934 2.15386 20.4576 1.41129 20.0406C3.34051 26.1099 9.04168 30.5089 15.7746 30.5089ZM25.3546 11.3973C25.3546 13.0987 23.967 14.478 22.2553 14.478C20.5436 14.478 19.156 13.0987 19.156 11.3973C19.156 9.69591 20.5436 8.31664 22.2553 8.31664C23.967 8.31664 25.3546 9.69591 25.3546 11.3973ZM24.3236 11.3973C24.3236 12.5325 23.3978 13.4527 22.2557 13.4527C21.1137 13.4527 20.1879 12.5325 20.1879 11.3973C20.1879 10.2622 21.1137 9.34195 22.2557 9.34195C23.3978 9.34195 24.3236 10.2622 24.3236 11.3973ZM10.5804 23.412C10.9969 23.6142 11.4569 23.7201 11.9218 23.7201C12.2753 23.7201 12.6191 23.6623 12.9581 23.5516C13.7377 23.282 14.3721 22.7189 14.7304 21.9824C15.4761 20.4469 14.8272 18.6081 13.2873 17.8668C13.0259 17.7417 12.7208 17.8476 12.5949 18.1027C12.469 18.3626 12.5755 18.6659 12.8322 18.791C12.8661 18.8055 12.9 18.8199 12.9338 18.8392C13.9508 19.359 14.343 20.5961 13.82 21.6069C13.297 22.6178 12.0477 23.0077 11.0356 22.4878C10.7741 22.3627 10.469 22.4686 10.3431 22.7237C10.2172 22.9836 10.3238 23.2869 10.5804 23.412Z" fill="#FFB548" />
                           </svg>
                        </a>
                     </div>
                  </div>
                  <!-- Кнопка Мобильного Меню -->
                  <button class="burger-menu" id="burger-menu">
                     <div class="box box_item1"></div>
                     <div class="box box_item2"></div>
                     <div class="box box_item3"></div>
                  </button>
                  <!-- Кнопка Мобильного Меню -->
                  <!-- Мобильного Меню -->
                  <div class="mobile-menu" id="mobile-menu">
                     <div class="block">
                        <ul>
                           <li class="item"><a href="#">main</a></li>
                           <li class="item"><a href="#">about</a></li>
                           <li class="item">
                              <a href="#">game features</a>
                           </li>
                           <li class="item">
                              <a href="#">system requirements</a>
                           </li>
                           <li class="item"><a href="#">quotes</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- Скрипт Мобильного Меню -->
                  <script>
                  var burgerCtr = document.querySelector("#burger-menu");
                  var menuCtr = document.querySelector("#mobile-menu");
                  burgerCtr.addEventListener("click", function() {
                     this.classList.toggle("active");
                     menuCtr.classList.toggle("show_mobile_menu");
                  });
                  </script>
               </div>
            </div>
         </header>
         <div class="body">
            <div class="container">
               <h1 class="title sec-start_title">SURVIVE AT ALL COSTS</h1>
               <h2 class="subtitle sec-start_subtitle"> Experience new social battle royale game </h2>
               <div class="btn-wrapper">
                  <a href="#" class="btn sec-start_btn"> Buy now on Steam<span>$14.99</span>
                  </a>
               </div>
            </div>
         </div>
         <div class="scroll-down">
            <p>the story</p>
            <a href="#">
               <svg width="23" height="12" viewBox="0 0 23 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M21.5786 1.83362H1.32422L11.338 10.0027L21.5786 1.83362Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
            </a>
         </div>
      </section>
      <section class="sec-whatis section">
         <div class="container">
            <div class="sec-whatis_wrapper">
               <div class="sec-whatis_leftside">
                  <h2 class="sec-whatis_subtitle subtitle">What is SOS?</h2>
                  <h1 class="title sec-whatis_title"> social battle royale game </h1>
                  <div class="text">
                     <p> Each round, <b>you</b> and <b>15</b> other contestants compete to escape a deadly island filled with monsters. The trick is: <b>three</b> people can survive. Will you run solo or form friendships with others to escape? </p>
                     <p> Making the right decisions could be the difference between <span class="text_border">life and death</span>. </p>
                  </div>
               </div>
               <div class="sec-whatis_rightside">
                  <div class="swiper-container">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <img src="assets/img/sec-whatis_screen-1.png" alt="screen-1" />
                        </div>
                        <div class="swiper-slide">
                           <img src="assets/img/sec-whatis_screen-2.png" alt="screen-2" />
                        </div>
                        <div class="swiper-slide">
                           <img src="assets/img/sec-whatis_screen-3.png" alt="screen-3" />
                        </div>
                     </div>
                     <div class="swiper-button-next"></div>
                     <div class="swiper-button-prev"></div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-features section">
         <div class="container">
            <div class="sec-features_wrapper">
               <div class="sec-features_rightside">
                  <h2 class="subtitle sec-features_subtitle"> What’s so special? </h2>
                  <h1 class="title sec-features_title">features</h1>
                  <div class="features-tabs">
                     <div class="tab1 tab">
                        <input class="inp1" type="checkbox" name="title" id="title1" />
                        <label class="label1" for="title1">SURVIVE AT ALL COSTS</label>
                        <div class="sub1"> You have 30 minutes to find a relic, signal for extraction, and grab one of three spots on the rescue chopper You have 30 minutes to find a relic, signal for extraction, and grab one of three spots on the rescue chopper </div>
                     </div>
                     <div class="tab2 tab">
                        <input class="inp2" type="checkbox" name="title" id="title2" />
                        <label class="label2" for="title2">CREATE ALLIES AND ENEMIES</label>
                        <div class="sub2"> You have 30 minutes to find a relic, signal for extraction, and grab one of three spots on the rescue chopper. </div>
                     </div>
                     <div class="tab3 tab">
                        <input class="inp3" type="checkbox" name="title" id="title3" />
                        <label class="label3" for="title3">IMPRESS THE AUDIENCE</label>
                        <div class="sub3"> You have 30 minutes to find a relic, signal for extraction, and grab one of three spots on the rescue chopper. </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-sysreq section">
         <div class="container">
            <div class="sec-sysreq_wrapper">
               <h2 class="subtitle sec-sysreq_subtitle"> Can My Computer Run this game? </h2>
               <h1 class="title sec-sysreq_title">system requirements</h1>
               <div class="sec-sysreq_body">
                  <div class="sysreq-grid">
                     <div class="cell cell-1">
                        <p class="cell-title">OS:</p>
                        <p class="cell-subtitle"> Windows 7 64-bit only (No OSX support at this time) </p>
                     </div>
                     <div class="cell cell-2">
                        <p class="cell-title">PROCESSOR:</p>
                        <p class="cell-subtitle"> Intel Core 2 Duo @ 2.4 GHZ or AMD Athlon X2 @ 2.8 GHZ </p>
                     </div>
                     <div class="cell cell-3">
                        <p class="cell-title">MEMORY:</p>
                        <p class="cell-subtitle">8 GB RAM</p>
                     </div>
                     <div class="cell cell-4">
                        <p class="cell-title">STORAGE:</p>
                        <p class="cell-subtitle">8 GB available space</p>
                     </div>
                     <div class="cell cell-5">
                        <p class="cell-title">GRAPHICS:</p>
                        <p class="cell-subtitle"> NVIDIA GeForce GTX 660 2GB or <br /> AMD Radeon HD 7850 2GB DirectX11 (Shader Model 5) </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-quotes section">
         <div class="container">
            <div class="sec-quotes_wrapper">
               <div class="sec-qutes_leftside">
                  <h2 class="subtitle sec-quotes_subtitle"> What people think? </h2>
                  <h1 class="title sec-quotes_title">Press quotes</h1>
                  <p class="sec-quotes_text"> Our goal is to create a product and service that you’re satisfied with and use it every day. This is why we’re constantly working on our services to make it better every day and really listen to what our users has to say. </p>
                  <div class="btn-wrapper">
                     <a href="#" class="btn sec-quotes_btn">Read more testimonials</a>
                  </div>
               </div>
               <div class="sec-quotes_rightside">
                  <div class="quotes">
                     <div class="quote">
                        <div class="quote_topside">
                           <div class="quote_person">
                              <img src="assets/img/quote_userpic-1.png" alt="userpic" class="quote_userpic" />
                              <div class="quote_title">
                                 <p class="quote_name">Evan Lahti</p>
                                 <p class="quote_role">PC Gamer</p>
                              </div>
                           </div>
                           <a href="#" class="quote_link"><img src="assets/img/quote_twitter.svg" alt="twitter" /></a>
                        </div>
                        <p class="quote_text"> “One of my gaming highlights of the year.” </p>
                        <p class="quote_date">October 18, 2018</p>
                     </div>
                     <div class="quote quote-left">
                        <div class="quote_topside">
                           <div class="quote_person">
                              <img src="assets/img/quote_userpic-2.png" alt="userpic" class="quote_userpic" />
                              <div class="quote_title">
                                 <p class="quote_name">Jada Griffin</p>
                                 <p class="quote_role">Nerdreactor</p>
                              </div>
                           </div>
                           <a href="#" class="quote_link"><img src="assets/img/quote_twitter.svg" alt="twitter" /></a>
                        </div>
                        <p class="quote_text"> “The next big thing in the world of streaming and survival games.” </p>
                        <p class="quote_date">December 21, 2018</p>
                     </div>
                     <div class="quote">
                        <div class="quote_topside">
                           <div class="quote_person">
                              <img src="assets/img/quote_userpic-3.png" alt="userpic" class="quote_userpic" />
                              <div class="quote_title">
                                 <p class="quote_name">Aaron Williams</p>
                                 <p class="quote_role">Uproxx</p>
                              </div>
                           </div>
                           <a href="#" class="quote_link"><img src="assets/img/quote_twitter.svg" alt="twitter" /></a>
                        </div>
                        <p class="quote_text"> “Snoop Dogg Playing The Wildly Entertaining ‘SOS’ Is Ridiculous.” </p>
                        <p class="quote_date">December 24, 2018</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="sec-subs section">
         <div class="container">
            <div class="sec-subs_wrapper">
               <div class="sec-subs_pic">
                  <img src="assets/img/sec-subs_skull.png" alt="skull" />
               </div>
               <div class="sec-subs_body">
                  <div class="sec-subs_text-wrapper">
                     <h2 class="subtitle sec-subs_subtitle"> Want to stay in touch? </h2>
                     <h1 class="title sec-subs_title">newsletter SUBSCRIBE</h1>
                     <p class="sec-subs_text"> In order to start receiving our news, all you have to do is enter your email address. Everything else will be taken care of by us. We will send you emails containing information about game. We don’t spam. </p>
                  </div>
                  <div class="sec-subs_subscribe">
                     <div class="sec-subs_input-wrapper">
                        <input type="text" class="sec-subs_inp" id="sec-subs_inp" />
                        <label class="inp-label" for="sec-subs_inp">Your email address </label>
                     </div>
                     <a href="#" class="btn sec-subs_btn">Subscribe now</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="footer">
         <div class="container">
            <div class="footer_wrapper">
               <div class="footer_top">
                  <a href="#" class="logo">
                     <img src="assets/img/footer-logo.png" alt="logo" />
                  </a>
                  <nav>
                     <ul class="menu">
                        <li class="item"><a href="#">main</a></li>
                        <li class="item"><a href="#">about</a></li>
                        <li class="item"><a href="#">game features</a></li>
                        <li class="item">
                           <a href="#">system requirements</a>
                        </li>
                        <li class="item"><a href="#">quotes</a></li>
                     </ul>
                  </nav>
                  <div class="footer_social-wrapper">
                     <a href="#" class="footer_social footer_facebook">
                        <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M6.65382 19.1726H2.56282V9.67859H0.517822V6.40559H2.56282V4.44159C2.56282 1.77259 3.71782 0.183594 6.99582 0.183594H9.72582V3.45659H8.02082C6.74282 3.45659 6.65882 3.91459 6.65882 4.76859L6.65382 6.40559H9.74582L9.38382 9.67859H6.65382V19.1726Z" fill="white" />
                        </svg>
                     </a>
                     <a href="#" class="footer_social footer_twitter">
                        <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M21.2138 2.42967C20.4408 2.75167 19.6098 2.96667 18.7388 3.06467C19.6288 2.56467 20.3118 1.77267 20.6338 0.830668C19.7998 1.29267 18.8778 1.62867 17.8958 1.81067C17.1108 1.02467 15.9898 0.534668 14.7508 0.534668C12.3708 0.534668 10.4398 2.34367 10.4398 4.57367C10.4398 4.89067 10.4778 5.19967 10.5518 5.49467C6.96981 5.32567 3.79381 3.71767 1.66781 1.27467C1.29681 1.87167 1.08481 2.56467 1.08481 3.30567C1.08481 4.70567 1.84581 5.94367 3.00181 6.66767C2.29581 6.64567 1.63181 6.46467 1.04981 6.16167C1.04981 6.17967 1.04981 6.19467 1.04981 6.21367C1.04981 8.17067 2.53481 9.80267 4.50681 10.1737C4.14581 10.2657 3.76381 10.3137 3.37181 10.3137C3.09381 10.3137 2.82381 10.2897 2.56081 10.2437C3.10881 11.8467 4.70081 13.0157 6.58681 13.0487C5.11181 14.1317 3.25381 14.7767 1.23381 14.7767C0.885811 14.7767 0.542811 14.7577 0.205811 14.7207C2.11281 15.8657 4.37881 16.5357 6.81281 16.5357C14.7408 16.5357 19.0758 10.3797 19.0758 5.04267C19.0758 4.86667 19.0708 4.69367 19.0628 4.51967C19.9048 3.94967 20.6358 3.23867 21.2138 2.42967Z" fill="white" />
                        </svg>
                     </a>
                     <a href="#" class="footer_social footer_youtube">
                        <svg width="26" height="19" viewBox="0 0 26 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M20.61 0.183594H5.98961C3.12627 0.183594 0.799805 2.55085 0.799805 5.4644V12.8973C0.799805 15.8163 3.12627 18.1781 5.98961 18.1781H20.6046C23.4733 18.1781 25.7944 15.8108 25.7944 12.8973V5.4644C25.7998 2.55085 23.4733 0.183594 20.61 0.183594ZM17.0959 9.54779L10.2575 12.8642C10.0731 12.9524 9.86705 12.82 9.86705 12.6103V5.7679C9.86705 5.55821 10.084 5.42578 10.2629 5.51958L17.1013 9.04564C17.3074 9.15048 17.302 9.44846 17.0959 9.54779Z" fill="white" />
                        </svg>
                     </a>
                     <a href="#" class="footer_social footer_twitch">
                        <svg width=" 20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9602 13.6252V9.5538V0.680176H2.93894L0.811279 2.97688V15.0868H6.13043V18.845H8.47085L11.024 16.1307H17.407L19.9602 13.6252ZM7.40694 13.4165H4.00268C3.76864 13.4165 3.57715 13.2286 3.57715 12.9989V2.76817C3.57715 2.5385 3.76864 2.35059 4.00268 2.35059H17.6197C17.8537 2.35059 18.0452 2.5385 18.0452 2.76817V10.7022C18.0452 10.8171 18.0027 10.9215 17.9229 10.9998L15.5825 13.2965C15.5027 13.3748 15.391 13.4165 15.2793 13.4165H11.3697L8.07183 15.6401C8.00268 15.6871 7.91757 15.7132 7.83247 15.7132C7.76332 15.7132 7.69949 15.6976 7.63566 15.6662C7.49204 15.5932 7.40694 15.4522 7.40694 15.2956V13.4165Z" fill="white" />
                           <path d="M13.79 9.76274V5.58691H12.0878V9.76274H13.79ZM9.53465 9.76274V5.58691H7.83252V9.76274H9.53465Z" fill="white" />
                        </svg>
                     </a>
                  </div>
               </div>
               <div class="footer_bottom">
                  <p class="footer_copy"> © 2018 Outpost Games, Inc. All Rights Reserved </p>
                  <div class="footer_links">
                     <a href="#">Privacy Policy</a>
                     <a href="#">Terms of Services</a>
                     <a href="#">Code of Conduct</a>
                  </div>
               </div>
            </div>
         </div>
      </footer>
   </div>
   <script src="./assets/js/jquery-1.11.1.min.js"></script>
   <script>
   $(".lang-switcher .lang").on("click", function() {
      $(".lang-sub").toggleClass("active");
   });
   $(".lang-sub a").on("click", function() {
      let newLang = $(this).html();
      let oldLang = $(".lang-switcher .lang").html();
      $(".lang-switcher .lang").html(newLang);
      $(this).html(oldLang);
      $(".lang-sub").toggleClass("active");
   });
   </script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script>
   var swiper = new Swiper(".swiper-container", {
      cssMode: true,
      navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
      },
      pagination: {
         el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
      loop: true,
   });
   </script>
</body>

</html>