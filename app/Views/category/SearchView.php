<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('script')  ?>
<script src="<?= base_url('public')  ?>/assets/js/search.js"></script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>

<!-- Ec Shop page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="ec-shop-rightside col-lg-12 col-md-12">
                <!-- Shop Top Start -->
                <div class="ec-pro-list-top d-flex">
                    <div class="col-md-6 ec-grid-list">
                        <div class="ec-gl-btn">
                            <button class="btn btn-grid-50 active"><img src="<?= base_url('public') ?>/assets/images/icons/grid.svg" class="svg_img gl_svg" alt="grid" /></button>
                            <button class="btn btn-list-50"><img src="<?= base_url('public') ?>/assets/images/icons/list.svg" class="svg_img gl_svg" alt="list" /></button>
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
                <div class="shop-pro-content" data-query="<?= $query  ?>">
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
                </div>
                <!--Shop content End -->
            </div>


        </div>
    </div>
</section>
<!-- End Shop page -->
<?= $this->endSection()  ?>