<?= $this->extend('temp/tempHome')  ?>
<?= $this->section('script')  ?>
<script src="<?= base_url('public')  ?>/assets/js/cart.js"></script>
<script src="<?= base_url('public')  ?>/assets/js/il_ilce.js"></script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>

<!-- Ec cart page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="ec-cart-leftside col-lg-8 col-md-12 ">
                    <!-- cart content Start -->
                    <div class="ec-cart-content">
                        <div class="ec-cart-inner">
                            <div class="row">
                                <div class="table-content cart-table-content">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Ürün</th>
                                                <th>Fiyat</th>
                                                <th style="text-align: center;">Adet</th>
                                                <th>Tutar</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ec-cart-update-bottom">
                                            <a href="<?= base_url()  ?>">Alışverişe Devam Et</a>
                                            <button type="submit" class="btn btn-primary checkout-button" >Ödeme Ekranına Git</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--cart content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-cart-rightside col-lg-4 col-md-12">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Summary Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <!-- <h3 class="ec-sidebar-title">Teslimat Bilgileri</h3> -->
                            </div>
                            <div class="ec-sb-block-content">
                                <h4 class="ec-ship-title">Teslimat Bilgileri</h4>
                                <div class="ec-cart-form">


                                    <div class="ec-cart-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Ad <span class="text-danger">*</span></label>
                                                    <input type="text" name="ad" placeholder="Adınızı giriniz" value="" required="">
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Soyad <span class="text-danger">*</span></label>
                                                    <input type="text" name="soyad" placeholder="Soyadınızı giriniz" value="" required="">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="ec-register-wrap">
                                                    <label>Adres <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" placeholder="Adresinizi giriniz" value="" required="">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>İl: <span class="text-danger">*</span></label><br>
                                                    <span class="ec-rg-select-inner">
                                                        <select name="ec_select_city" id="Iller" class="ec-register-select border form-control" required="">
                                                            <option value="">Lütfen Bir İl Seçiniz</option>
                                                            <option value="1">Adana</option>
                                                            <option value="2">Adıyaman</option>
                                                            <option value="3">Afyonkarahisar</option>
                                                            <option value="4">Ağrı</option>
                                                            <option value="5">Amasya</option>
                                                            <option value="6">Ankara</option>
                                                            <option value="7">Antalya</option>
                                                            <option value="8">Artvin</option>
                                                            <option value="9">Aydın</option>
                                                            <option value="10">Balıkesir</option>
                                                            <option value="11">Bilecik</option>
                                                            <option value="12">Bingöl</option>
                                                            <option value="13">Bitlis</option>
                                                            <option value="14">Bolu</option>
                                                            <option value="15">Burdur</option>
                                                            <option value="16">Bursa</option>
                                                            <option value="17">Çanakkale</option>
                                                            <option value="18">Çankırı</option>
                                                            <option value="19">Çorum</option>
                                                            <option value="20">Denizli</option>
                                                            <option value="21">Diyarbakır</option>
                                                            <option value="22">Edirne</option>
                                                            <option value="23">Elazığ</option>
                                                            <option value="24">Erzincan</option>
                                                            <option value="25">Erzurum</option>
                                                            <option value="26">Eskişehir</option>
                                                            <option value="27">Gaziantep</option>
                                                            <option value="28">Giresun</option>
                                                            <option value="29">Gümüşhane</option>
                                                            <option value="30">Hakkari</option>
                                                            <option value="31">Hatay</option>
                                                            <option value="32">Isparta</option>
                                                            <option value="33">Mersin</option>
                                                            <option value="34">İstanbul</option>
                                                            <option value="35">İzmir</option>
                                                            <option value="36">Kars</option>
                                                            <option value="37">Kastamonu</option>
                                                            <option value="38">Kayseri</option>
                                                            <option value="39">Kırklareli</option>
                                                            <option value="40">Kırşehir</option>
                                                            <option value="41">Kocaeli</option>
                                                            <option value="42">Konya</option>
                                                            <option value="43">Kütahya</option>
                                                            <option value="44">Malatya</option>
                                                            <option value="45">Manisa</option>
                                                            <option value="46">Kahramanmaraş</option>
                                                            <option value="47">Mardin</option>
                                                            <option value="48">Muğla</option>
                                                            <option value="49">Muş</option>
                                                            <option value="50">Nevşehir</option>
                                                            <option value="51">Niğde</option>
                                                            <option value="52">Ordu</option>
                                                            <option value="53">Rize</option>
                                                            <option value="54">Sakarya</option>
                                                            <option value="55">Samsun</option>
                                                            <option value="56">Siirt</option>
                                                            <option value="57">Sinop</option>
                                                            <option value="58">Sivas</option>
                                                            <option value="59">Tekirdağ</option>
                                                            <option value="60">Tokat</option>
                                                            <option value="61">Trabzon</option>
                                                            <option value="62">Tunceli</option>
                                                            <option value="63">Şanlıurfa</option>
                                                            <option value="64">Uşak</option>
                                                            <option value="65">Van</option>
                                                            <option value="66">Yozgat</option>
                                                            <option value="67">Zonguldak</option>
                                                            <option value="68">Aksaray</option>
                                                            <option value="69">Bayburt</option>
                                                            <option value="70">Karaman</option>
                                                            <option value="71">Kırıkkale</option>
                                                            <option value="72">Batman</option>
                                                            <option value="73">Şırnak</option>
                                                            <option value="74">Bartın</option>
                                                            <option value="75">Ardahan</option>
                                                            <option value="76">Iğdır</option>
                                                            <option value="77">Yalova</option>
                                                            <option value="78">Karabük</option>
                                                            <option value="79">Kilis</option>
                                                            <option value="80">Osmaniye</option>
                                                            <option value="81">Düzce</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>

                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>İlçe: <span class="text-danger">*</span></label><br>
                                                    <span class="ec-register-wrap ec-register-half">
                                                        <span class="ec-rg-select-inner">
                                                            <select name="ec_select_country" id="Ilceler" disabled="disabled" class="ec-register-select border form-control" required="">
                                                                <option value="">Lütfen Önce Bir İl Seçiniz</option>
                                                            </select>
                                                        </span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Mail Adresi: <span class="text-danger">*</span></label>
                                                    <input type="text" name="mailadres" placeholder="Mail Adresi" value="" required="">
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Telefon No: <span class="text-danger">*</span></label>
                                                    <input type="phone" name="telefon" placeholder="Telefon No" value="" required="">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ec-sb-block-content">
                                <div class="ec-cart-summary-bottom">
                                    <div class="ec-cart-summary">
                                        <div>
                                            <span class="text-left">Sepet Tutarı</span>
                                            <span class="text-right sub-total"><span> 0 </span> ₺</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Korgo Ücreti</span>
                                            <span class="text-right delivery-charges"><span> 0 </span> ₺</span>
                                        </div>

                                        <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post" action="#">
                                                <input class="ec-coupan" type="text" required="" placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit" name="subscribe" value="">Apply</button>
                                            </form>
                                        </div>
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Toplam Tutar</span>
                                            <span class="text-right total-amount"><span> 0 </span> ₺</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Summary Block -->
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>
<!-- New Product Start -->
<section class="section ec-new-product section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">New Arrivals</h2>
                    <h2 class="ec-title">New Arrivals</h2>
                    <p class="sub-title">Browse The Collection of Top Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- New Product Content -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-6 pro-gl-content">
                <div class="ec-product-inner">
                    <div class="ec-pro-image-outer">
                        <div class="ec-pro-image">
                            <a href="product-left-sidebar.html" class="image">
                                <img class="main-image" src="<?= base_url('public') ?>/assets/images/product-image/6_1.jpg" alt="Product" />
                                <img class="hover-image" src="<?= base_url('public') ?>/assets/images/product-image/6_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public') ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public') ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public') ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                            <span class="old-price">$27.00</span>
                            <span class="new-price">$22.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/6_1.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/6_1.jpg" data-tooltip="Gray"><span style="background-color:#e8c2ff;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/6_2.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/6_2.jpg" data-tooltip="Orange"><span style="background-color:#9cfdd5;"></span></a></li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$25.00" data-new="$20.00" data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$27.00" data-new="$22.00" data-tooltip="Medium">M</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$35.00" data-new="$30.00" data-tooltip="Extra Large">XL</a></li>
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
                                <img class="main-image" src="<?= base_url('public') ?>/assets/images/product-image/7_1.jpg" alt="Product" />
                                <img class="hover-image" src="<?= base_url('public') ?>/assets/images/product-image/7_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public') ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public') ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public') ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/7_1.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/7_1.jpg" data-tooltip="Gray"><span style="background-color:#01f1f1;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/7_2.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/7_2.jpg" data-tooltip="Orange"><span style="background-color:#b89df8;"></span></a></li>
                                </ul>
                            </div>
                            <div class="ec-pro-size">
                                <span class="ec-pro-opt-label">Size</span>
                                <ul class="ec-opt-size">
                                    <li class="active"><a href="#" class="ec-opt-sz" data-old="$12.00" data-new="$10.00" data-tooltip="Small">S</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$15.00" data-new="$12.00" data-tooltip="Medium">M</a></li>
                                    <li><a href="#" class="ec-opt-sz" data-old="$20.00" data-new="$17.00" data-tooltip="Extra Large">XL</a></li>
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
                                <img class="main-image" src="<?= base_url('public') ?>/assets/images/product-image/1_1.jpg" alt="Product" />
                                <img class="hover-image" src="<?= base_url('public') ?>/assets/images/product-image/1_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="sale">Sale</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public') ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public') ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public') ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                            <span class="old-price">$40.00</span>
                            <span class="new-price">$30.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/1_1.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/1_1.jpg" data-tooltip="Gray"><span style="background-color:#90cdf7;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/1_2.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/1_2.jpg" data-tooltip="Orange"><span style="background-color:#ff3b66;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/1_3.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/1_3.jpg" data-tooltip="Green"><span style="background-color:#ffc476;"></span></a></li>
                                    <li><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/1_4.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/1_4.jpg" data-tooltip="Sky Blue"><span style="background-color:#1af0ba;"></span></a></li>
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
                                <img class="main-image" src="<?= base_url('public') ?>/assets/images/product-image/2_1.jpg" alt="Product" />
                                <img class="hover-image" src="<?= base_url('public') ?>/assets/images/product-image/2_2.jpg" alt="Product" />
                            </a>
                            <span class="percentage">20%</span>
                            <span class="flags">
                                <span class="new">New</span>
                            </span>
                            <a href="#" class="quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img src="<?= base_url('public') ?>/assets/images/icons/quickview.svg" class="svg_img pro_svg" alt="" /></a>
                            <div class="ec-pro-actions">
                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img src="<?= base_url('public') ?>/assets/images/icons/compare.svg" class="svg_img pro_svg" alt="" /></a>
                                <button title="Add To Cart" class=" add-to-cart"><img src="<?= base_url('public') ?>/assets/images/icons/cart.svg" class="svg_img pro_svg" alt="" /> Add To Cart</button>
                                <a class="ec-btn-group wishlist" title="Wishlist"><img src="<?= base_url('public') ?>/assets/images/icons/wishlist.svg" class="svg_img pro_svg" alt="" /></a>
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
                            <span class="old-price">$50.00</span>
                            <span class="new-price">$40.00</span>
                        </span>
                        <div class="ec-pro-option">
                            <div class="ec-pro-color">
                                <span class="ec-pro-opt-label">Color</span>
                                <ul class="ec-opt-swatch ec-change-img">
                                    <li class="active"><a href="#" class="ec-opt-clr-img" data-src="<?= base_url('public') ?>/assets/images/product-image/2_1.jpg" data-src-hover="<?= base_url('public') ?>/assets/images/product-image/2_2.jpg" data-tooltip="Gray"><span style="background-color:#fdbf04;"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 shop-all-btn"><a href="#">Shop All Collection</a></div>
        </div>
    </div>
</section>
<!-- New Product end -->
<?= $this->endSection()  ?>