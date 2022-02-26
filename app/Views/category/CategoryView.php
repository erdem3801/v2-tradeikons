<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('style')  ?>
<link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/style.css" />
<link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/nouislider.css" />
<?= $this->endSection()  ?>

<?= $this->section('script')  ?>
<script src="<?= base_url('public')  ?>/assets/js/category.js"></script>
<script src="<?= base_url('public')  ?>/assets/js/plugins/nouislider.js"></script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>
<!-- Page detail section -->
<section class="ec-bnr-detail mb-5 section-space-pt d-none d-sm-none d-md-none  d-lg-block">
    <div class="ec-page-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-around">
                    <div class="ec-cat-bnr">
                        <a href="<?= base_url()  ?>"> <img src="<?= base_url("public/$mainbannerImg") ?>" alt="mainbannerImg" class="img-fluid"></a>
                    </div>
                    <div class="ec-cat-bnr">
                        <a href="<?= base_url()  ?>"> <img src="<?= base_url("public/assets/images/menu-banner/$bannerImg") ?>" alt="banner" class="img-fluid"></a>
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
                            <button class="btn btn-grid active"><img src="<?= base_url('public')  ?>/assets/images/icons/grid.svg" class="svg_img gl_svg" alt="grid" /></button>
                            <button class="btn btn-list"><img src="<?= base_url('public')  ?>/assets/images/icons/list.svg" class="svg_img gl_svg" alt="list" /></button>
                        </div>
                    </div>
                    <div class="col-md-6 ec-sort-select">
                        <span class="sort-by">Sıralama</span>
                        <div class="ec-select-inner">
                            <select name="ec-select" id="ec-select">
                                <option selected disabled>Sıralama</option>
                                <option value="enyeni"> En yeni</option>
                                <option value="urunpuani"> Ürün Puanı</option>
                                <option value="adanz" data-order="asc"> A dan Z ye</option>
                                <option value="zdena" data-order="desc"> Z den A ya</option>
                                <option value="azlanfiyat"> Fiyat, azalan</option>
                                <option value="artanfiyat"> Fiyat, artan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Shop Top End -->
                <!-- Shop content Start -->
                <div class="shop-pro-content" data-category="<?= $categoryID ?>">
                    <div class="shop-pro-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content hidden" data-parent data-key="0">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="" class="image">
                                                <img class="main-image" src=" " alt="Product" style="width: 100%; height: 250px; object-fit: scale-down;" />
                                                <img class="hover-image" src=" " alt="Product" style="width: 100%; height: 250px; object-fit: scale-down;" />
                                            </a>
                                            <span class="flags">
                                                <span class="new">Yeni</span>
                                            </span>
                                            <a href="#" class="quickview" data-link-action="quickview" data-product="">
                                                <img src="<?= base_url('public')  ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="quickview" />
                                            </a>
                                            <div class="ec-pro-actions">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public')  ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="compare" /></a>
                                                <button title="Sepete Ekle" class="add-to-cart"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="cart" /> Sepete Ekle</button>
                                                <a class="ec-btn-group wishlist" href="#" title="Wishlist"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="istek listesi" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html"> </a></h5>
                                        <div class="ec-pro-rating">
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star fill"></i>
                                            <i class="ecicon eci-star"></i>
                                        </div>
                                        <div class="ec-pro-list-desc"> </div>
                                        <span class="ec-price">
                                            <span class="new-price"> </span>
                                            <span class="new-price-currentcy"> ₺ </span>
                                        </span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Ec Pagination Start -->
                    <!-- Ec Pagination End -->
                    <div class="loader loader--style5" title="4">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <rect x="0" y="0" width="4" height="10" fill="#333">
                                <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0" dur="0.6s" repeatCount="indefinite" />
                            </rect>
                            <rect x="10" y="0" width="4" height="10" fill="#333">
                                <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0.2s" dur="0.6s" repeatCount="indefinite" />
                            </rect>
                            <rect x="20" y="0" width="4" height="10" fill="#333">
                                <animateTransform attributeType="xml" attributeName="transform" type="translate" values="0 0; 0 20; 0 0" begin="0.4s" dur="0.6s" repeatCount="indefinite" />
                            </rect>
                        </svg>
                    </div>
                    <div class="error-message-category" style="display: none;">
                        <div class="alert alert-primary" role="alert">
                            Ürün Bulunamadı...
                        </div>
                    </div>

                </div>
                <!--Shop content End -->
            </div>
            <!-- Sidebar Area Start -->
            <div class="ec-shop-leftside col-lg-3 col-md-12 order-lg-first order-md-last">
                <div id="shop_sidebar">
                    <div class="ec-sidebar-heading">
                        <h1>Filtre</h1>
                    </div>
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->

                        <?php foreach ($filters as $index => $filter) :  ?>
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <?php if (count($filter)) : ?>
                                        <h3 class="ec-sidebar-title"><?= $index  ?></h3>
                                    <?php endif  ?>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <?php $drop = false; ?>

                                        <?php foreach ($filter as $key => $values) : ?>
                                            <?php if ($key == 5) : $drop = true; ?>
                                                <li id="ec-more-toggle-content" class="ec-more-toggle-content" style="padding: 0; display: none;">
                                                    <ul>
                                                    <?php endif  ?>
                                                    <li>
                                                        <div class="ec-sidebar-block-item">
                                                            <input type="checkbox" class="filter" value="<?= $values['value']  ?>" data-filter="<?= $index  ?>" /> <a href="#"> <?= $values['value']  ?> <?= '' // TODO $values['count'] 
                                                                                                                                                                                                            ?> </a><span class="checked"></span>
                                                        </div>
                                                    </li>
                                                    <?php if ($key == count($filter) - 1 && $drop) :  ?>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="ec-sidebar-block-item ec-more-toggle">
                                                        <span class="checked"></span><span id="ec-more-toggle" class="ec-more-toggle-span">Daha Fazla...</span>
                                                    </div>
                                                </li>
                                            <?php endif  ?>
                                        <?php endforeach  ?>

                                    </ul>
                                </div>
                            </div>
                        <?php endforeach  ?>

                        <!-- Sidebar Price Block -->
                        <!-- <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Fiyat</h3>
                            </div>
                            <div class="ec-sb-block-content es-price-slider">
                                <div class="ec-price-filter">
                                    <div id="ec-sliderPrice" class="filter__slider-price" data-min="0" data-max="5000" data-step="10"></div>
                                    <div class="ec-price-input">
                                        <label class="filter__label"><input type="text" class="filter__input"></label>
                                        <span class="ec-price-divider"></span>
                                        <label class="filter__label"><input type="text" class="filter__input"></label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Shop page -->

<?= $this->endSection()  ?>