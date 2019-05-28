

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
    <script type="text/javascript" src="js/main.js"></script>

    <script src="js/modernizr.js"></script>
  

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
        <header id="header">
          <div class="wrap-header">
            

            <a href=""><img src="img/logo.svg" alt=""/></a>
          
            <ul>
              <a href=""><li>Köpvillkor</li></a>
              <a href=""><li>Om oss</li></a>
              <a href=""><li>Kundtjänst</li></a>
            </ul>
            
      
        </header>
        <div class="pageTitle" id="kontakt">
            <h1>Kundtjänst</h1>
        </div>
        

        <div class="breadcrumbs-category">
          <span>start</span>
          <span>Kundtjänst</span>
        </div>
        


        <div class="pageWrapper">
          
          
            <div class="text">
              <h2>Kontaktuppgifter</h2>
              <p>Välkommen att kontakta oss via nedanstående uppgifter. <br> 
                  Det går även bra att kontakta oss via kontaktformuläret.</p>
                  <br><br><br>
                  <strong>  <p>E-POSTADRESS<br></strong> 
                    kundkontakt@funstuff.se<br><br><br><br>
                     
                    <strong>  FÖRETAGSUPPGIFTER<br></strong> <br>
                      Funstuff in Sweden AB<br>
                      Org.nr: 556834-5259<br>
                      Bergsunds strand 39<br>
                      117 38 Stockholm<br>
                      Sverige </p>
              </div>
              <div class="form">
                  <h2>Kontakta oss</h2>
                  <p>Du kan kontakta oss på e-post dygnet runt. <br> Svar sker normalt inom 24 timmar, men oftast mycket snabbare.</p>
                  <form action=""></form>
                    <div class="form-group">
                      <input type="text" placeholder="Namn">
                    </div>
                    <div class="form-group">
                      <input type="email" placeholder="E-postadress">
                    </div>
                    <div class="form-group">
                      <input type="text" placeholder="Ämne">
                    </div>
                    <div class="form-group">
                     <input type="file" placeholder="Eventuell bilaga">
                    </div>
                    <div class="form-group">
                     <textarea name="" id="" cols="30" rows="10" placeholder="Meddelande"></textarea>
                    </div>
                    <button type="submit"> <span>Skicka meddelande</span> </button>
                </div>
        
        </div>
        </div>
        
   
        <footer>
            <?php include("content/footer.php"); ?>
        </footer>
      
      


      
   
  
   

    <script src="js/quickview.js"></script>
    <script src="js/quickview-long.js"></script>
    <script src="js/jquery-asRange.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/flipclock.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
  </body>
</html>
