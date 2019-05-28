
<?php include ('revslider-standalone/embed.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Funstuff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="./css/main.css"
    />
  
    <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/jquery.ScrollMagic.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.velocity.min.js"
    ></script>
    <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.pinBox.min.js"></script>
    <script type="text/javascript" src="js/magiczoomplus.js"></script>
    <script src="js/bodyScrollLock.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <script src="js/modernizr.js"></script>
    <?php RevSliderEmbedder::cssIncludes(); ?>
  

    <!-- Modernizr -->
  </head>
  <body>
    <div class="menu">
      <div class="upper-menu">
        <div class="search-icon">
          <a href="">
            <img class="search-open" src="img/search.svg" alt="search-icon" />
            <img
              class="search-close"
              src="img/menu/search-close.svg"
              alt="search-icon"
            />
          </a>
        </div>
        <div class="menu-icon">
          <a href="">
            <div class="hamburger">
              <div class="one"></div>
              <div class="two"></div>
              <div class="three"></div>
            </div>
            <!-- <img src="img/menu.svg" alt="menu-icon">--><span>MENY</span>
          </a>
        </div>
      </div>
      <div class="lower-menu">
        <div class="compare-icon">
          <a href="">
            <img src="img/compare.svg" alt="compare-icon" /><span>(0)</span>
          </a>
        </div>
        <div class="cart-icon">
          <a href="">
            <img src="img/cart.svg" alt="cart-icon" /><span>0 kr</span>
          </a>
        </div>
      </div>
    </div>

    <div class="menu-mobile">
      <ul class="nav-mobile">
        <li><img src="img/cart-black.svg" alt="" /> <span>0kr</span></li>
        <li id="search-mobile">
          <img src="img/search-logo-black.svg" alt="" />
        </li>
        <li>
          <div class="click"><span>Meny</span></div>
        </li>
        <li><img src="img/compare-black-2.svg" alt="" /> <span>(0)</span></li>
        <li class="menu-mobile-icon">
          <img src="img/menu-black.svg" alt="" /> <span>MENY</span>
        </li>
      </ul>
    </div>

 
    <?php include("content/search.php"); ?>
    <?php include("content/menu.php"); ?>

    <div class="main-wrap">
      <div class="main">
        <header class="nav-down">
          <div class="wrap-header">
            

            <a href=""><img src="img/logo.svg" alt=""/></a>
          
            <ul>
              <a href=""><li>Köpvillkor</li></a>
              <a href=""><li>Om oss</li></a>
              <a href=""><li>Kundtjänst</li></a>
            </ul>
       
      
        </header>
         <!-- REV SLIDER -->
        <div class="revslider-wrap">
        <?php RevSliderEmbedder::putRevSlider('test1'); ?>
        </div>

         <!-- MINI BANNERS -->
        
         <div class="mini-banners-wrap">
           
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Luftvapen@2x.jpg);">
            </a>
              <div class="text">
                <h3>Luftvapen</h3>
                <span>Stort sortiment från välkända varumärken</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Airsoft@2x.jpg);">
            </a>
              <div class="text">
                <h3>Airsoft</h3>
                <span>Stort sortiment från välkända varumärken</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Guldvaskning@2x.jpg);">
            </a>
              <div class="text">
                <h3>Guldvaskning</h3>
                <span>Allt för Guldgrävaren</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Pilbage@2x.jpg);">
            </a>
              <div class="text">
                <h3>Pilbågar</h3>
                <span>Allt från Nybörjare till Proffs</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Fritid@2x.jpg);">
            </a>
              <div class="text">
                <h3>Friluftsliv</h3>
                <span>Utrustning och verktyg för Vidmarken</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          <div class="mini-banner-wrap">
            <a href="" class="mini-banner" style="background-image: url(img/mini-banners/Optik@2x.jpg);">
            </a>
              <div class="text">
                <h3>Optik & Sikten</h3>
                <span>Allt från Nybörjare till Proffs</span>
              </div>
              <div class="button"><span>shoppa här</span></div>
          
          </div>
          
         </div>

         <!--NYHETER-->
         <div class="slider-title">
         <h4>NYHETER</h4>
         <a href="">Se fler nyheter här</a>
        </div>

        <div class="slider slider-startpage">
          <div class="slider-wrap swiper-wrapper "> 
            <div class="slide-product swiper-slide" >
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product swiper-slide" >
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product-long swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/big/product-long.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger-long">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product-long swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/big/product-long.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger-long">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
         <div class="slider-title">
         <h4>TOPPLISTAN</h4>
         <a href="">Hetaste Prylarna</a>
        </div>
        <div class="slider slider-startpage">
          <div class="slider-wrap swiper-wrapper "> 
            <div class="slide-product swiper-slide" >
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product swiper-slide" >
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product-long swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/big/product-long.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger-long">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/related-product-2.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
            <div class="slide-product-long swiper-slide">
              <div class="new-icon-s">
                <span>Nyhet</span>
              </div>
              <div class="image-wrap cd-item ">
                <div class="product-image cd-item">
                  <img src="img/big/product-long.jpg" alt="" />
                </div>
                <a href="#0" class="cd-trigger-long">Snabbköp</a>
                <div class="product-image-overlay"></div>
              </div>
              <div class="title">
                <a href="">Glock 19 Blowback 4,5mm</a>
                <div class="compare-product">
                  <div class="hover">
                    <span>Jämför</span>
                  </div>
                  <img src="img/compare-black-2.svg" alt="" />
                </div>
              </div>
              <div class="price">
                <span>1 995 kr</span>
                <span>2 995 kr</span>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
        <div class="revslider-wrap">
        <?php RevSliderEmbedder::putRevSlider('syma'); ?>
          </div>
          <div class="slider-title">
            <h4>FYNDVAROR</h4>
            <a href="">Här hittar du de bästa fynden</a>
           </div>
           <div class="slider slider-startpage">
             <div class="slider-wrap swiper-wrapper "> 
               <div class="slide-product swiper-slide" >
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
               <div class="slide-product swiper-slide" >
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
             
               <div class="slide-product swiper-slide">
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
               <div class="slide-product swiper-slide">
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
               <div class="slide-product swiper-slide">
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
               <div class="slide-product swiper-slide">
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
               <div class="slide-product swiper-slide">
                <div class="offer-icon-s">
                  <span>-25%</span>
                </div>
                 <div class="image-wrap cd-item ">
                   <div class="product-image cd-item">
                     <img src="img/related-product-2.jpg" alt="" />
                   </div>
                   <a href="#0" class="cd-trigger">Snabbköp</a>
                   <div class="product-image-overlay"></div>
                 </div>
                 <div class="title">
                   <a href="">Glock 19 Blowback 4,5mm</a>
                   <div class="compare-product">
                     <div class="hover">
                       <span>Jämför</span>
                     </div>
                     <img src="img/compare-black-2.svg" alt="" />
                   </div>
                 </div>
                 <div class="price">
                   <span>1 995 kr</span>
                   <span>2 995 kr</span>
                 </div>
               </div>
             
             </div>
             <div class="swiper-button-next"></div>
             <div class="swiper-button-prev"></div>
           </div>
        
       
        <!-- cd-quick-view -->

        <div class="cd-quick-view">
          <div class="cd-slider-wrapper">
            <ul class="cd-slider">
              <li class="selected">
                <img src="img/related-product-2.jpg" alt="Product 1" />
              </li>
              <li><img src="img/glockproduct-2.jpg" alt="Product 2" /></li>
              <li><img src="img/glockproduct-3.jpg" alt="Product 3" /></li>
              <div class="overlay"></div>
            </ul>
            <!-- cd-slider -->

            <ul class="cd-slider-navigation">
              <li><a class="cd-next" href="#0">Prev</a></li>
              <li><a class="cd-prev" href="#0">Next</a></li>
            </ul>
            <!-- cd-slider-navigation -->
          </div>
          <!-- cd-slider-wrapper -->

          <div class="cd-item-info">
            <h2>Produt Title</h2>
            <span>1 995 kr</span><span>2 995 kr</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia,
              omnis illo iste ratione. Numquam eveniet quo, ullam itaque
              expedita impedit. Eveniet, asperiores amet iste repellendus
              similique reiciendis, maxime laborum praesentium.
            </p>
            <div class="egenskaper">
              <ul>
                <li><img src="img/egenskaper/Blowback.png" alt="" /></li>
                <li><img src="img/egenskaper/Co2.png" alt="" /></li>
                <li>
                  <img src="img/egenskaper/Diabolokula-4,5mm.png" alt="" />
                </li>
                <li><img src="img/egenskaper/Blowback.png" alt="" /></li>
                <li><img src="img/egenskaper/Co2.png" alt="" /></li>
              </ul>
            </div>
            <ul class="cd-item-action">
              <li><button class="add-to-cart">Lägg i varukorg</button></li>
              <li><a href="#0">Till produkten</a></li>
            </ul>
            <!-- cd-item-action -->
          </div>
          <!-- cd-item-info -->
          <a href="#0" class="cd-close">Close</a>
        </div>
        <div class="cd-quick-view-long">
          <div class="cd-slider-wrapper-long">
            <ul class="cd-slider-long">
              <li class="selected-long">
                <img src="img/big/product-long.jpg" alt="Product 1" />
              </li>
              <li><img src="img/big/product-long-2.jpg" alt="Product 2" /></li>

              <div class="overlay"></div>
            </ul>
            <!-- cd-slider -->

            <ul class="cd-slider-navigation-long">
              <li><a class="cd-next" href="#0">Prev</a></li>
              <li><a class="cd-prev" href="#0">Next</a></li>
            </ul>
            <!-- cd-slider-navigation -->
          </div>
          <!-- cd-slider-wrapper -->

          <div class="cd-item-info-long ">
            <h2>Produt Title</h2>
            <span>1 995 kr</span><span>2 995 kr</span>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia,
              omnis illo iste ratione. Numquam eveniet quo, ullam itaque
              expedita impedit. Eveniet, asperiores amet iste repellendus
              similique reiciendis, maxime laborum praesentium.
            </p>
            <div class="egenskaper">
              <ul>
                <li><img src="img/egenskaper/Blowback.png" alt="" /></li>
                <li><img src="img/egenskaper/Co2.png" alt="" /></li>
                <li>
                  <img src="img/egenskaper/Diabolokula-4,5mm.png" alt="" />
                </li>
                <li><img src="img/egenskaper/Blowback.png" alt="" /></li>
                <li><img src="img/egenskaper/Co2.png" alt="" /></li>
              </ul>
            </div>
            <ul class="cd-item-action">
              <li><button class="add-to-cart">Lägg i varukorg</button></li>
              <li><a href="#0">Till produkten</a></li>
            </ul>
            <!-- cd-item-action -->
          </div>
          <!-- cd-item-info -->
          <a href="#0" class="cd-close-long">Close</a>
        </div>

        <div class="overlay-background"></div>
      </div>
    </div>
   
    <!--PURCHASE MOBILE POPUP-->
    <div class="purchase-mobile">
      <div class="qty-mobile">
        <span class="plus-button-mobile"> + </span>
        <input type="text" name="qty-mobile" id="qty" placeholder="1" />
        <span class="min-button-mobile"> &minus; </span>
      </div>
      <div class="purchase-button-mobile">
        <span>lägg i varukorg</span>
      </div>
    </div>
    <!--END PURCHASE MOBILE POPUP-->

    <div class="filter-mobile">
      <div class="filter-wrap">
        <div class="reset-filter">
          <div class="button">
            <span>Rensa filtrering</span>
          </div>
        </div>
        <div class="filter-range">
          <input
            class="price-range"
            type="text"
            min="0"
            max="10000"
            value="1 , 10000"
            step="1"
          />
          <span>Pris</span>
        </div>
        <div class="filter-cat">
          <span class="filter-box"
            ><span class="shadow"></span
            ><span class="overlay"></span>Varumärke</span
          >
          <div class="filter-box-item-wrap">
            <div class="filter-box-item">
              <ul class="list">
                <li>
                  <ul class="optgroup">
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="filter-cat">
          <span class="filter-box"
            ><span class="shadow"></span
            ><span class="overlay"></span>Egenskaper</span
          >
          <div class="filter-box-item-wrap">
            <div class="filter-box-item">
              <ul class="list">
                <li>
                  <ul class="optgroup">
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                    <li>
                      <label
                        ><input type="checkbox" name="check" /><span
                          class="label-text"
                          >Märke</span
                        ></label
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--FOOTER-->

        <footer>
            <?php include("content/footer.php"); ?>
        </footer>


    <script src="js/quickview.js"></script>
    <script src="js/quickview-long.js"></script>
    <script src="js/jquery-asRange.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/flipclock.min.js"></script>
    <?php RevSliderEmbedder::jsIncludes(); ?>
  </body>
</html>
