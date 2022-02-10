<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('style')  ?>
<link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/style.css" />
<?= $this->endSection()  ?>

<?= $this->section('script')  ?>
<script src="<?= base_url('public')  ?>/assets/js/plugins/nouislider.js"></script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>

<!-- Page detail section -->
<section class="ec-bnr-detail margin-bottom-30 section-space-pt">
    <div class="ec-page-detail">
        <div class="container">
            <div class="ec-main-heading d-none">
                <h2>Shop <span>Detail</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="ec-cat-bnr">
                        <a href="product-left-sidebar.html"><span></span></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="ec-page-description">
                        <h6>The Best deal on top brands</h6>
                        <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since the 1500s. It has survived not only five centuries, but also the
                            leap into electronic typesetting, remaining essentially unchanged.
                        <p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End detail section -->

<!-- Ec Shop page -->
<section class="ec-page-content-bnr section-space-pb">
    <div class="container">
        <div class="row">
            <div class="ec-shop-rightside col-lg-9 col-md-12 order-lg-last order-md-first margin-b-30">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn btn-grid active"><img src="<?= base_url('public')  ?>/assets/images/icons/grid.svg" class="svg_img gl_svg" alt="" /></button>
                            <button class="btn btn-list"><img src="<?= base_url('public')  ?>/assets/images/icons/list.svg" class="svg_img gl_svg" alt="" /></button>
                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sort by</span>
                        <div class="ec-select-inner">
                            <select name="ec-select" id="ec-select">
                                <option selected disabled>Position</option>
                                <option value="1">Relevance</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->

                <!-- Shop content Start -->
                <div class="shop-pro-content">
                    <div class="shop-pro-inner">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/6_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/6_2.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Round Neck T-Shirt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="new-price">$22.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/6_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/6_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/7_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/7_2.jpg" alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="sale">Sale</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Full Sleeve Shirt</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$12.00</span>
                                            <span class="new-price">$10.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/7_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/7_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/1_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/1_2.jpg" alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="sale">Sale</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Cute Baby Toy's</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="new-price">$30.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/1_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/1_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$40.00" data-new="$30.00" data-tooltip="Small">S</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$50.00" data-new="$40.00" data-tooltip="Medium">M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/2_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/2_2.jpg" alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="new">New</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Jumbo Carry Bag</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="new-price">$40.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/2_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/3_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/3_2.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Designer Leather Purses</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$40.00</span>
                                            <span class="new-price">$30.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/3_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/3_1.jpg" data-tooltip="Gray"><span style="background-color:#75e3ff;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/3_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/3_2.jpg" data-tooltip="Orange"><span style="background-color:#11f7d8;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/3_3.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/3_3.jpg" data-tooltip="Green"><span style="background-color:#acff7c;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/4_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/4_2.jpg" alt="Product" />
                                            </a>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Canvas Cowboy Hat</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$12.00</span>
                                            <span class="new-price">$10.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/4_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/4_1.jpg" data-tooltip="Gray"><span style="background-color:#ebbf60;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/4_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/4_2.jpg" data-tooltip="Orange"><span style="background-color:#b4fc57;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/4_3.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/4_3.jpg" data-tooltip="Green"><span style="background-color:#2ea1cd;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/5_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/5_2.jpg" alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="new">New</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Leather Belt for Men</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$15.00</span>
                                            <span class="new-price">$10.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/5_1.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/5_1.jpg" data-tooltip="Gray"><span style="background-color:#9e9e9e;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/5_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/5_2.jpg" data-tooltip="Orange"><span style="background-color:#eb8e76;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-size">
                                                <span class="ec-pro-opt-label">Size</span>
                                                <ul class="ec-opt-size">
                                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$10.00" data-tooltip="Small">32</a></li>
                                                    <li><a href="#" class="ec-opt-sz" data-old="$17.00" data-new="$12.00" data-tooltip="Medium">34</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="<?= base_url('public')  ?>/assets/images/product-image/8_1.jpg" alt="Product" />
                                                <img class="hover-image" src="<?= base_url('public')  ?>/assets/images/product-image/8_2.jpg" alt="Product" />
                                            </a>
                                            <span class="percentage">20%</span>
                                            <span class="flags">
                                                <span class="new">New</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Digital Smart Watches</a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text ever since the 1500s, when an unknown printer took a galley.</div>
                                        <span class="ec-price">
                                            <span class="old-price">$100.00</span>
                                            <span class="new-price">$80.00</span>
                                        </span>
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-color">
                                                <span class="ec-pro-opt-label">Color</span>
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/8_2.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/8_2.jpg" data-tooltip="Gray"><span style="background-color:#e9dddd;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/8_3.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/8_3.jpg" data-tooltip="Orange"><span style="background-color:#ffd5cb;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public')  ?>/assets/images/product-image/8_4.jpg" data-src-hover="<?= base_url('public')  ?>/assets/images/product-image/8_4.jpg" data-tooltip="Green"><span style="background-color:#92e4fd;"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Pagination Start -->
                    <div class="ec-pro-pagination">
                        <span>Showing 1-12 of 21 item(s)</span>
                        <ul class="ec-pro-pagination-inner">
                            <li><a class="active" href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Ec Pagination End -->
                </div>
                <!--Shop content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside col-lg-3 col-md-12 order-lg-first order-md-last">
                <div id="shop_sidebar">
                    <div class="ec-sidebar-heading">
                        <h1>Filter Products By</h1>
                    </div>
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Category</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" checked /> <a href="#">clothes</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">Bags</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">Shoes</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">cosmetics</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">electrics</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" /> <a href="#">phone</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li id="ec-more-toggle-content" style="padding: 0; display: none;">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" /> <a href="#">Watch</a><span class="checked"></span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" /> <a href="#">Cap</a><span class="checked"></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item ec-more-toggle">
                                            <span class="checked"></span><span id="ec-more-toggle">More
                                                Categories</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Size Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Size</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" value="" checked /><a href="#">S</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" value="" /><a href="#">M</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" value="" /> <a href="#">L</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" value="" /><a href="#">XL</a><span class="checked"></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item">
                                            <input type="checkbox" value="" /><a href="#">XXL</a><span class="checked"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Color item -->
                        <div class="ec-sidebar-block ec-sidebar-block-clr">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Color</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#c4d6f9;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#ff748b;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#000000;"></span></div>
                                    </li>
                                    <li class="active">
                                        <div class="ec-sidebar-block-item"><span style="background-color:#2bff4a;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#ff7c5e;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#f155ff;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#ffef00;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#c89fff;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#7bfffa;"></span></div>
                                    </li>
                                    <li>
                                        <div class="ec-sidebar-block-item"><span style="background-color:#56ffc1;"></span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Price Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Price</h3>
                            </div>
                            <div class="ec-sb-block-content es-price-slider">
                                <div class="ec-price-filter">
                                    <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="250" data-step="10"></div>
                                    <div class="ec-price-input">
                                        <label class="filter__label"><input type="text" class="filter__input"></label>
                                        <span class="ec-price-divider"></span>
                                        <label class="filter__label"><input type="text" class="filter__input"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop page -->



<?= $this->endSection()  ?>