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
        <li><img src="img/cart-black.svg" alt="" /> <span>0kr</span></li>
        <li id="search-mobile">
          <img src="img/search-logo-black.svg" alt="" />
        </li>
        <li>
          <div class="click"><span>Filtrera</span></div>
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
            <div class="current-view">
              <img src="img/sort-gallery.svg" alt="" />
            </div>

            <a href=""><img src="img/logo.svg" alt=""/></a>
            <div class="current-sort">
              <img src="img/sort-icon.svg" alt="" />
            </div>
            <ul>
              <a href=""><li>Köpvillkor</li></a>
              <a href=""><li>Om oss</li></a>
              <a href=""><li>Kundtjänst</li></a>
            </ul>
          </div>
          <div class="view-wrap-mobile" id="view-mobile">
            <img src="img/sort-line.svg" alt="" id="list-item" />
            <img
              src="img/sort-gallery.svg"
              alt=""
              id="box-item"
              class="active"
            />
            <img src="img/sort-gallery-2.svg" alt="" id="box-big-item" />
          </div>
        </header>

        <!--NAV BAR-->
        <div class="nav-bar">
          <div class="filter-icon-wrap">
            <img src="img/filter-icon.svg" alt="" />
            <span>filtrera</span>
          </div>
          <div class="view-wrap" id="view">
            <img src="img/sort-line.svg" alt="" id="list-item" />
            <img
              src="img/sort-gallery.svg"
              alt=""
              id="box-item"
              class="active"
            />
            <img src="img/sort-gallery-2.svg" alt="" id="box-big-item" />
          </div>
          <div class="sort-wrap">
            <span>sortera efter</span>
            <img src="img/sort-icon.svg" alt="" />
          </div>

          <div class="filter">
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
              <div class="filter-cat">
                <span class="filter-box"
                  ><span class="shadow"></span
                  ><span class="overlay"></span>Egenskaper</span
                >
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
        <!--NAV BAR END-->

        <div class="sub-categories-container">
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
          <div class="sub-categorie">
            <span>Underkategori</span><span class="total_products">32 st</span>
          </div>
        </div>

        <div class="breadcrumbs-category">
          <span>start</span>
          <span>skytte</span>
          <span>luftvapen</span>
          <span>co2 pistol</span>
          <span>kaliber 4,5mm</span>
        </div>

        <!--CATEGORY TEXT-->

        <!-- <div class="banner"></div>-->
        <div class="category-text">
          <h1>Produktkategori Titel</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corrupti ipsam deserunt repellendus, voluptate
            asperiores distinctio assumenda omnis dolorem architecto quod harum
            molestias possimus praesentium vitae! Necessitatibus, perspiciatis
            iusto.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corrupti ipsam deserunt repellendus, voluptate
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corrupti ipsam deserunt repellendus, voluptate
            asperiores distinctio assu molestias possimus praesentium vitae!
            Necessitatibus, perspiciatis iusto.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corru dolorem architecto quod harum molestias
            possimus praesentium vitae! Necessitatibus, perspiciatis iusto.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corru dolorem architecto quod harum molestias
            possimus praesentium vitae! Necessitatibus, perspiciatis iusto.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Voluptatibus labore corru dolorem architecto quod harum molestias
            possimus praesentium vitae! Necessitatibus, perspiciatis iusto.
          </p>
        </div>
        <div class="readmore-btn"><span>Läs mer</span></div>

        <!--CATEGORY TEXT END-->

        <div id="product-content"></div>

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


 
      

    <script src="js/quickview.js"></script>
    <script src="js/quickview-long.js"></script>
    <script src="js/jquery-asRange.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/flipclock.min.js"></script>

  </body>
</html>
