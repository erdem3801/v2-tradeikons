<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('script')  ?>

<script src="<?= base_url('public')  ?>/assets/js/product.js"></script>
<?= $this->endSection()  ?>
<?= $this->section('content')  ?>
<!-- Sart Single product -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-pro-rightside ec-common-rightside col-lg-12 col-md-12">

                <!-- Single product content Start -->
                <div class="single-pro-block">
                    <div class="single-pro-inner">
                        <div class="row">
                            <div class="single-pro-img single-pro-img-no-sidebar">
                                <div class="single-product-scroll">
                                    <div class="single-product-cover">
                                        <?php

                                        use Faker\Provider\Base;

                                        foreach ($images as $image) : ?>
                                            <div class="single-slide zoom-image-hover">
                                                <img class="img-responsive" src="<?= $image['image']  ?>" alt="img-<?= $image['product_image_id']  ?>">
                                            </div>
                                        <?php endforeach  ?>

                                    </div>
                                    <div class="single-nav-thumb">
                                        <?php foreach ($images as $image) :  ?>
                                            <div class="single-slide">
                                                <img class="img-responsive" src="<?= $image['image']  ?>" alt="img-<?= $image['product_image_id']  ?>">
                                            </div>
                                        <?php endforeach  ?>

                                    </div>
                                </div>
                            </div>
                            <div class="single-pro-desc single-pro-desc-no-sidebar">
                                <div class="single-pro-content">
                                    <h5 class="ec-single-title"><?= $product['name']  ?></h5>
                                    <div class="ec-single-rating-wrap">
                                        <div class="ec-single-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star-o"></i>
                                        </div>
                                        <span class="ec-read-review"><a href="#ec-spt-nav-tabs">Ürün Açıklamalarını Gör</a></span>
                                    </div>

                                    <div class="ec-single-price-stoke">
                                        <div class="ec-single-price">
                                            <span class="ec-single-ps-title">En Uygun Fiyat</span>
                                            <span class="new-price"><?= $product['price']  ?> ₺</span>
                                        </div>
                                        <div class="ec-single-stoke">
                                            <span class="ec-single-ps-title">Stok Kodu</span>
                                            <span class="ec-single-sku"><?= $product['seller_code']  ?></span>
                                        </div>
                                    </div>
                                    <!-- <div class="ec-pro-variation">
                                        <div class="ec-pro-variation-inner ec-pro-variation-size">
                                            <span>SIZE</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <li class="active"><span>7</span></li>
                                                    <li><span>8</span></li>
                                                    <li><span>9</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ec-pro-variation-inner ec-pro-variation-color">
                                            <span>Color</span>
                                            <div class="ec-pro-variation-content">
                                                <ul>
                                                    <li class="active"><span style="background-color:#23839c;"></span></li>
                                                    <li><span style="background-color:#000;"></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="ec-single-qty">
                                        <div class="qty-plus-minus">
                                            <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                        </div>
                                    </div>

                                    <div class="ec-single-qty">

                                        <div class="ec-single-cart mb-2">
                                            <button class="btn btn-primary">Sepete Ekle</button>
                                        </div>
                                        <div class="ec-single-cart mb-2">
                                            <button class="btn btn-success">Hemen Al</button>
                                        </div>
                                        <div class="ec-single-wishlist">
                                            <a class="ec-btn-group wishlist" href="#" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                        </div>

                                        <div class="ec-single-social mt-1">
                                            <ul class="mb-0">
                                                <li class="list-inline-item whatsapp"><a href="#"><i class="ecicon eci-whatsapp"></i></a></li>
                                            </ul>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Single product content End -->
                <!-- Single product tab start -->
                <div class="ec-single-pro-tab" id="ec-spt-nav-tabs">
                    <div class="ec-single-pro-tab-wrapper">
                        <div class="ec-single-pro-tab-nav">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details" role="tablist">Ürün Açıklaması</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-info" role="tablist">Ürün Özellikleri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-review" role="tablist">Ürün Yorumları</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content  ec-single-pro-tab-content">
                            <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                <div class="ec-single-pro-tab-desc">
                                    <?= $product['description']  ?>
                                </div>
                            </div>
                            <div id="ec-spt-nav-info" class="tab-pane fade">
                                <!-- <div class="ec-single-pro-tab-moreinfo">
                                    <ul>
                                        <li><span>Weight</span> 1000 g</li>
                                        <li><span>Dimensions</span> 35 × 30 × 7 cm</li>
                                        <li><span>Color</span> Black, Pink, Red, White</li>
                                    </ul>
                                </div> -->
                            </div>

                            <div id="ec-spt-nav-review" class="tab-pane fade">
                                <div class="row">
                                    <!-- <div class="ec-t-review-wrapper">
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="<?= base_url('public') ?>/assets/images/review-image/1.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Jeny Doe</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-t-review-item">
                                            <div class="ec-t-review-avtar">
                                                <img src="<?= base_url('public') ?>/assets/images/review-image/2.jpg" alt="" />
                                            </div>
                                            <div class="ec-t-review-content">
                                                <div class="ec-t-review-top">
                                                    <div class="ec-t-review-name">Linda Morgus</div>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-t-review-bottom">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting industry. Lorem Ipsum has been the industry's
                                                        standard dummy text ever since the 1500s, when an unknown
                                                        printer took a galley of type and scrambled it to make a
                                                        type specimen.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ec-ratting-content">
                                        <h3>Add a Review</h3>
                                        <div class="ec-ratting-form">
                                            <form action="#">
                                                <div class="ec-ratting-star">
                                                    <span>Your rating:</span>
                                                    <div class="ec-t-review-rating">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                        <i class="ecicon eci-star-o"></i>
                                                    </div>
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-name" placeholder="Name" type="text" />
                                                </div>
                                                <div class="ec-ratting-input">
                                                    <input name="your-email" placeholder="Email*" type="email" required />
                                                </div>
                                                <div class="ec-ratting-input form-submit">
                                                    <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                                    <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details description area end -->
            </div>

        </div>
    </div>
</section>
<!-- End Single product -->

<!-- Related Product Start -->
<section class="section ec-releted-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Benzer Ürünler</h2>
                    <h2 class="ec-title">Benzer Ürünler</h2>
                </div>
            </div>
        </div>
        <div class="row margin-minus-b-30">
            <!-- Related Product Content -->
            <?php foreach ($similarProduct as $product) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                    <div class="ec-product-inner">
                        <div class="ec-pro-image-outer">
                            <div class="ec-pro-image">
                                <a href="<?= base_url($product['slug'])  ?>" class="image">
                                    <img class="main-image" src="<?= $product['image'] ?>" alt="Product" style="width: 100%; height: 250px; object-fit: scale-down;" />
                                    <img class="hover-image" src="<?= $product['image'] ?>" alt="Product" style="width: 100%; height: 250px; object-fit: scale-down;" />
                                </a>
                                <span class="percentage">20%</span>
                                <span class="flags">
                                    <span class="new">New</span>
                                </span>
                                <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public') ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                                <div class="ec-pro-actions">
                                    <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public') ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                    <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public') ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                    <a class="ec-btn-group wishlist" href="#" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="ec-pro-content">
                            <h5 class="ec-pro-title"><a href="<?= base_url($product['slug'])  ?>"><?= $product['name']  ?></a></h5>
                            <div class="ec-pro-rating">
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star fill"></i>
                                <i class="ecicon eci-star"></i>
                            </div>
                            <div class="ec-pro-list-desc"><?= $product['description']  ?></div>
                            <span class="ec-price">
                                <span class="new-price"><?= $product['price']  ?> ₺</span>
                            </span>
                            <!-- <div class="ec-pro-option">
                                <div class="ec-pro-color">
                                    <span class="ec-pro-opt-label">Color</span>
                                    <ul class="ec-opt-swatch ec-change-img">
                                        <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/2_1.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            <?php endforeach  ?>
        </div>
    </div>
</section>
<!-- Related Product end -->
<?= $this->endSection()  ?>