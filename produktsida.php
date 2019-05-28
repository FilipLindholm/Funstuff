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
        <li><img src="/img/cart-black.svg" alt="" /> <span>0kr</span></li>
        <li id="search-mobile">
          <img src="/img/search-logo-black.svg" alt="" />
        </li>
        <li>
          <div class="click"><span>Köp</span></div>
        </li>
        <li><img src="/img/compare-black-2.svg" alt="" /> <span>(0)</span></li>
        <li class="menu-mobile-icon">
          <img src="/img/menu-black.svg" alt="" /> <span>MENY</span>
        </li>
      </ul>
    </div>

    <?php include("content/search.php"); ?>

    <?php include("content/menu.php"); ?>

    <div class="main-wrap">
      <div class="main" id="product-page">
        <header class="nav-down">
          <div class="wrap-header">
            <a href=""><img src="img/logo.svg" alt=""/></a>
            <ul>
              <a href=""><li>Köpvillkor</li></a>
              <a href=""><li>Om oss</li></a>
              <a href=""><li>Kundtjänst</li></a>
            </ul>
          </div>
        </header>

        <div class="product-wrap" id="container">
          <div class="product-info-wrap">
            <div class="product-info">
              <div class="top-icons">
                <div class="new-icon">
                  <span>Nyhet</span>
                </div>
                <div class="offer-icon">
                  <span>-25%</span>
                </div>
                <div class="prisjakt-icon-desktop">
                  <img src="img/cheapest.png" alt="" />
                </div>
              </div>

              <div class="breadcrumbs">
                <span>start</span>
                <span>skytte</span>
                <span>luftvapen</span>
                <span>co2 pistol</span>
                <span>kaliber 4,5mm</span>
              </div>

              <div class="wrap-rating">
                <div class="rating">
                  <img src="img/rating.png" alt="" />
                  <p>betyg 5 av 5</p>
                </div>
                <div class="manufacturer">
                  <img src="img/sig-logo.svg" alt="" />
                </div>
              </div>
              <span class="productCode">Art.nr: 33-254585</span>
              <h1>Sig Sauer P226 ASP Black 4,5mm</h1>

              <ul class="short-spec">
                <li>350cc stor ger många skott per fyllning</li>
                <li>Inbyggd regulator för jämnare hastighet</li>
                <li>Magasin</li>
                <li>Shroudad pipa</li>
                <li>Side-lever omladdning</li>
              </ul>

              <div class="price-wrap">
                <div class="price">
                  <span>1 495 kr</span>
                  <span>1 995 kr</span>
                </div>
                <div>
                  <ul>
                    <li>* Prispressad produkt</li>
                    <li>* Fri frakt på denna produkt</li>
                  </ul>
                </div>
              </div>

              <div class="stock-info-payment-container">
                <div class="klarna-info">
                  <img src="img/klarna-logo.png" alt="" />
                  <p>Delbetala från 290 kr i månaden</p>
                  <p>Läs mer</p>
                </div>
                <div class="stock-info">
                  <ul>
                    <li>
                      <span>Lagerstatus:&nbsp </span>
                      <span
                        >
                        <img src="img/instock.svg" alt="" class="check-icon"
                      />Finns i lager</span>
                    </li>
                    <li>
                      <span>Leverantid: 1-3 dagar</span>
                    </li>
                  </ul>
                </div>
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
              </div>

              <div class="purchase">
                <div class="qty">
                  <span class="plus-button"> + </span>
                  <input type="text" name="qty" id="qty" placeholder="1" />
                  <span class="min-button"> &minus; </span>
                </div>
                <div class="button">
                  <span>köp</span>
                </div>
              </div>
            </div>
          </div>

          <div class="product-images">
            <div class="product-image-big">
              <div class="prisjakt-mobile">
                <img src="/img/cheapest-mobile.png" alt="" />
              </div>
              <div class="images">
                <a
                  class="MagicZoom"
                  id="zoom"
                  data-options=" zoomMode: off; zoomOn: click; rightClick: true; hint: off"
                  title="..."
                  href="img/big/Glock1.jpg"
                  ><img src="img/big/Glock1.jpg"
                /></a>
              </div>

              <div class="image-overlay"></div>
            </div>

            <div class="thumbnails">
              <div class="thumb">
                <a
                  data-zoom-id="zoom"
                  href="img/big/Glock1.jpg"
                  data-image="Glock1.jpg"
                  ><img src="img/thumb/glock1.jpg"
                /></a>
                <div class="image-overlay"></div>
              </div>
              <div class="thumb">
                <a
                  data-zoom-id="zoom"
                  href="img/big/Glock2.jpg"
                  data-image="Glock2.jpg"
                  ><img src="img/thumb/glock2.jpg"
                /></a>
                <div class="image-overlay"></div>
              </div>
              <div class="thumb">
                <a
                  data-zoom-id="zoom"
                  href="img/big/Glock3.jpg"
                  data-image="Glock3.jpg"
                  ><img src="img/thumb/glock3.jpg"
                /></a>
                <div class="image-overlay"></div>
              </div>
            </div>
          </div>

          <div class="product-description">
            <div class="tab-panels">
              <ul class="tabs">
                <li class="tab-left active">
                  <a href="#panel1">Produktbeskrivning</a>
                </li>
                <li class="tab-right"><a href="#panel2">Specifikationer</a></li>
              </ul>

              <div class="tab-content">
                <div id="panel1" class="panel active">
                  <p>
                    <strong
                      >Glock 17 med kolsyredrift, blowback och r&auml;fflad
                      pipa! En given succ&eacute; som &auml;ven kan laddas med
                      diaboler f&ouml;r b&auml;ttre precision!</strong
                    >
                  </p>
                  <p>&nbsp;</p>
                  <p>
                    Pistolen ser ut och k&auml;nns som en riktigt Glock med en
                    rekyl som f&ouml;rst&auml;rker realismen &auml;n mer.
                    Levereras i en Glock original vapenv&auml;ska.
                  </p>
                  <p>&nbsp;</p>
                  <p>
                    Luftpistol med kolsyredrivning Halvautomatisk omladdning med
                    blowback (rekyl) Räfflad pipa för diaboler. Pistolen kan
                    även laddas med stålrundkulor (4,5 mm Steel BBs) Mantel
                    tillverkad i metall Levereras i en Glock orginalväska med
                    mjuk stoppning och två rejäla lås Erbjuds i en version med
                    gängad pipa för ljuddämpare eller kompensator. (14 mm)
                  </p>

                  <p>&nbsp;</p>
                  <hr />
                  <p>&nbsp;</p>
                  <h4>GLOCK&nbsp; |&nbsp;&nbsp;PERFECTION</h4>
                  <p>&nbsp;</p>
                  <p>
                    35 &aring;r efter lanseringen av f&ouml;rsta generationens
                    Glock 17 &auml;r det fortfarande modellen som konkurrenterna
                    tvingas m&auml;ta sig med.
                  </p>
                  <p>
                    Ett vapen som k&auml;nnetecknas av h&ouml;g s&auml;kerhet,
                    enkelhet och en tillf&ouml;rlitlighet som f&aring; pistoler
                    kan m&auml;ta sig med. Egenskaper som gjort den till en av
                    de mest anv&auml;nda tj&auml;nstepistolerna i v&auml;rlden.
                  </p>
                  <p>
                    Den &ouml;sterrikiska vapentillverkaren revolutionerade
                    marknaden i b&ouml;rjan p&aring; &aring;ttitalet med en
                    pistol som till stor del bestod av polymer (plast).
                    F&ouml;rutom att den var ovanligt l&auml;tt, och saknade
                    hane (s.k hammarl&ouml;s), hade den ingen yttre
                    s&auml;kring. Pistolen hade ist&auml;llet ett flera inbyggda
                    s&auml;kerhetsfunktioner som succesivt avaktiverades
                    n&auml;r man tryckte p&aring; avtryckaren.
                  </p>
                  <p>
                    Gaston Glocks sjuttonde patent &ndash; Glock 17- kom att bli
                    en otrolig succ&eacute; och tillverkaren erbjuder idag ett
                    brett sortiment av pistoler med m&aring;nga olika
                    egenskaper. Plattformen finns i olika storlekar, kalibrar
                    samt nu &auml;ven i licensfria versioner med kolsyra eller
                    gas som drivmedel. Perfekt f&ouml;r &ouml;vningsskytte eller
                    scenariospel.
                  </p>
                </div>
                <div id="panel2" class="panel">
                  <table>
                    <tr>
                      <td>Drivning</td>
                      <td>Co2</td>
                    </tr>
                    <tr>
                      <td>Märke</td>
                      <td>Umarex</td>
                    </tr>
                    <tr>
                      <td>Utgångshastighet</td>
                      <td>120m/s</td>
                    </tr>
                    <tr>
                      <td>Magasinkapacitet</td>
                      <td>22 skott</td>
                    </tr>
                    <tr>
                      <td>Drivning</td>
                      <td>Co2</td>
                    </tr>
                    <tr>
                      <td>Märke</td>
                      <td>Umarex</td>
                    </tr>
                    <tr>
                      <td>Utgångshastighet</td>
                      <td>120m/s</td>
                    </tr>
                    <tr>
                      <td>Magasinkapacitet</td>
                      <td>22 skott</td>
                    </tr>
                  </table>

                  <div class="compare-spec">
                    <img src="img/compare.svg" alt="" />
                    <span>Jämför med annan vara</span>
                    <img src="img/compare.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="product-reviews">
            <div class="tab-panels">
              <ul class="tabs">
                <li class="tab-left active">
                  <a href="#panel3"> Omdömen (2)</a>
                </li>
                <li class="tab-right">
                  <a href="#panel4">Frågor & Svar (2)</a>
                </li>
              </ul>

              <div class="tab-content">
                <div id="panel3" class="panel active">
                  <h3>Denna produkt har ett genomsnittsbetyg på 5/5</h3>
                  <div class="review-list">
                    <div class="review-1">
                      <p>
                        <strong>Rickard</strong>
                        <small>2018-12-01</small>
                        <img src="img/rating.png" alt="" />
                      </p>

                      <p>
                        Köpte denna pistol som min första Co2 pistol och blev
                        väldigt positivt överraskad. Mycket autentisk precis som
                        den utmärker sig för att vara. Mycket autentisk precis
                        som den utmärker sig för att vara.Mycket autentisk
                        precis som den utmärker sig för att vara.Mycket
                        autentisk precis som den utmärker sig för att vara.
                      </p>
                    </div>
                    <div class="review-1">
                      <p>
                        <strong>Rickard</strong>
                        <small>2018-12-01</small>
                        <img src="img/rating.png" alt="" />
                      </p>
                      <p>
                        Köpte denna pistol som min första Co2 pistol och blev
                        väldigt positivt överraskad. Mycket autentisk precis som
                        den utmärker sig för att vara. Mycket autentisk precis
                        som den utmärker sig för att vara.Mycket autentisk
                        precis som den utmärker sig för att vara.Mycket
                        autentisk precis som den utmärker sig för att vara.
                      </p>
                    </div>
                    <div class="leave-review">
                      <span>Skriv en recension</span>
                    </div>
                   
                  </div>
                </div>
                <div id="panel4" class="panel">
                  <ul class="questions">
                    <li class="question">
                      <img src="img/iconmonstr-help-2.svg" alt="" />
                      <p>
                        Hej jag undrar om det är blowback på Colt Special Combat
                        Classic kolsyrepistol?
                      </p>
                    </li>
                    <li class="answer">
                      <span>Svar: </span>
                      <p>
                        Hej, Nej det är ingen blowback på Colt Special Combat
                        Classic.
                      </p>
                    </li>
                  </ul>
                  <ul class="questions">
                    <li class="question">
                      <img src="img/iconmonstr-help-2.svg" alt="" />
                      <p>
                        Hej jag undrar om det är blowback på Colt Special Combat
                        Classic kolsyrepistol?
                      </p>
                    </li>
                    <li class="answer">
                      <span>Svar: </span>
                      <p>
                        Hej, Nej det är ingen blowback på Colt Special Combat
                        Classic.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="banner-review">
                 
                  <img src="img/banner/presentkort-6.png" alt="">
                  <p>Skriv en recention och tävla om att vinna ett presentkort på 1 000 kr</p>
                </div>
            </div>
          </div>
          <div class="product-accessories">
            <h3>Tillbehör</h3>

            <div class="accessories-buttons">
              <div class="accessories-button" rel="accessories-1">
                <span>Kolsyrepatroner</span>
              </div>
              <div class="accessories-button" rel="accessories-2">
                <span>Ammunition</span>
              </div>
              <div class="accessories-button" rel="accessories-3">
                <span>Hölster</span>
              </div>
              <div class="accessories-button" rel="accessories-4">
                <span>Vapenvård</span>
              </div>
              <div class="accessories-button" rel="accessories-5">
                <span>Förvaring</span>
              </div>
              <div class="accessories-button" rel="accessories-6">
                <span>Övrigt</span>
              </div>
            </div>

            <div class="accessories-main">
              <div class="accessories-main-product">
                <a class="title" href="">Skyddsglasögon SG3 Combat Zone</a>
                <div class="accessories-image">
                  <img class="image-main" src="img/tillbehor-3.jpg" alt="" />
                  <div class="image-overlay"></div>
                </div>
                <div class="price">
                  <span class="price-deduct">69 kr</span>
                  <span class="price-main">99 kr</span>
                </div>
                <div class="button"><span>Köp</span></div>
              </div>
              <div class="accessories-main-product">
                <a class="title" href="">Skyddsglasögon SG3 Combat Zone</a>
                <div class="accessories-image">
                  <img class="image-main" src="img/tillbehor-4.jpg" alt="" />
                  <div class="image-overlay"></div>
                </div>
                <div class="price">
                  <span class="price-deduct">69 kr</span>
                  <span class="price-main">99 kr</span>
                </div>
                <div class="button"><span>Köp</span></div>
              </div>
              <div class="accessories-main-product">
                <a class="title" href="">Skyddsglasögon SG3 Combat Zone</a>
                <div class="accessories-image">
                  <img class="image-main" src="img/tillbehor-3.jpg" alt="" />
                  <div class="image-overlay"></div>
                </div>
                <div class="price">
                  <span class="price-deduct">69 kr</span>
                  <span class="price-main">99 kr</span>
                </div>
                <div class="button"><span>Köp</span></div>
              </div>
              <div class="accessories-main-product">
                <a class="title" href="">Skyddsglasögon SG3 Combat Zone</a>
                <div class="accessories-image">
                  <img class="image-main" src="img/tillbehor-3.jpg" alt="" />
                  <div class="image-overlay"></div>
                </div>
                <div class="price">
                  <span class="price-deduct">69 kr</span>
                  <span class="price-main">99 kr</span>
                </div>
                <div class="button"><span>Köp</span></div>
              </div>
            </div>
          </div>
        </div>

        <div class="alternative-products">
          <h3>Finns i fler utföranden</h3>
          <div class="box-tabs-wrap">
            <div class="box-tabs active" rel="alt-1">
              <span>Alternativ 1</span>
            </div>
            <div class="box-tabs" rel="alt-2"><span>Alternativ 2</span></div>
            <div class="box-tabs" rel="alt-3"><span>Alternativ 3</span></div>
            <div class="box-tabs" rel="alt-4"><span>Alternativ 4</span></div>
          </div>
        </div>

        <div class="related-products">
          <h4 class="alternetives-title active" rel="alt-1">Alternativ 1</h4>
          <div class="slider slider-alt" id="alt-1">
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
                  </div>
                </div>
                <div class="price">
                  <span>1 995 kr</span>
                  <span>2 995 kr</span>
                </div>
              </div>
              <div class="slide-product swiper-slide">
                <div class="icon-360">
                  <img src="img/360.png" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
                  </div>
                </div>
                <div class="price">
                  <span>1 995 kr</span>
                  <span>2 995 kr</span>
                </div>
              </div>
              <div class="slide-product swiper-slide">
                <div class="icon-360">
                  <img src="img/360.png" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
          <h4 class="alternetives-title" rel="alt-2">Alternativ 2</h4>
          <div class="slider slider-alt" id="alt-2">
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
                  </div>
                </div>
                <div class="price">
                  <span>1 995 kr</span>
                  <span>2 995 kr</span>
                </div>
              </div>
              <div class="slide-product swiper-slide">
                <div class="icon-360">
                  <img src="img/360.png" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
                  </div>
                </div>
                <div class="price">
                  <span>1 995 kr</span>
                  <span>2 995 kr</span>
                </div>
              </div>
              <div class="slide-product swiper-slide">
                <div class="icon-360">
                  <img src="img/360.png" alt="" />
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
                    <img src="/img/compare-black-2.svg" alt="" />
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
        </div>
   
        <div class="line"></div>
        <div class="related-products">
        <h3>Relaterade produkter</h3>
        <div class="slider slider-related">
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
      </div>
      
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
        <!-- cd-quick-view -->

        <div class="accessories-slide-in" id="accessories-slide-in">
          <div class="accessories-wrap">
            <div class="accessories" id="accessories-1">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/1/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/1/2.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
            <div class="accessories" id="accessories-2">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/2/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/2/2.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/2/3.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
            <div class="accessories" id="accessories-3">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/2.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/3.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/4.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/5.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/3/6.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
            <div class="accessories" id="accessories-4">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/4/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/4/2.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/4/3.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/4/4.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehör/4/5.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/4/6.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
            <div class="accessories" id="accessories-5">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/5/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/5/2.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/5/3.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
            <div class="accessories" id="accessories-6">
              <div class="product-accessories-outer">
                <div class="product-wrap-accessories">
                  <a href="">Browning Diabolo plattnos 4,5mm 500st</a>
                  <div class="accessories-image">
                    <img
                      class="image-main"
                      src="img/tillbehor/6/1.jpg"
                      alt=""
                    />
                    <div class="overlay"></div>
                  </div>
                  <div class="price">
                    <span>69 kr</span>
                    <span>99 kr</span>
                  </div>
                  <div class="add-to-cart"><span>Köp</span></div>
                </div>
              </div>
            </div>
          </div>

          <div class="toggle-accessories-categories">
            <a href="" class="arrow" id="showPrev"> </a>
            <h3>Ammunition</h3>

            <a href="" class="arrow" id="showNext"></a>
            <a href="#" class="close"></a>
          </div>
        </div>

        <div class="overlay-background"></div>
      </div>
    </div>
    
     
        <footer>
            <?php include("content/footer.php"); ?>
        </footer>
 
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

    <!--REVIEWS POPUP-->

      <div class="reviews-popup" >
        
        <div class="form">
            <div class="close"></div>
            <h4>LÄMNA OMDÖME</h4>
          <form action="">
        
              <div class="rating">
                  <span>BETYG</span>
                  <fieldset class="rate">
                      <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10" title="5 stars"></label>
                      <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9" title="4 1/2 stars"></label>
                      <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8" title="4 stars"></label>
                      <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7" title="3 1/2 stars"></label>
                      <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6" title="3 stars"></label>
                      <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5" title="2 1/2 stars"></label>
                      <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4" title="2 stars"></label>
                      <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3" title="1 1/2 stars"></label>
                      <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2" title="1 star"></label>
                      <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1" title="1/2 star"></label>
                      <input type="radio" id="rating0" name="rating" value="0" />
                  </fieldset>
                 
                 </div>
              <div class="form-group">
              <input type="text" placeholder="Namn">
            </div>
            <div class="form-group">
              <input type="email" placeholder="E-postadress">
            </div>
           
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="10" placeholder="Recension"></textarea>
            </div>
            
          </form> 
          
        </div>
        <button type="submit"> <span>Skicka recension</span> </button>
      </div>


    <script src="js/quickview.js"></script>
    <script src="js/quickview-long.js"></script>
    <script src="js/jquery-asRange.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/flipclock.min.js"></script>
  </body>
</html>
