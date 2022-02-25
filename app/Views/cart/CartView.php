<?= $this->extend('temp/tempHome')  ?>
<?= $this->section('script')  ?>
<script src="<?= base_url('public')  ?>/assets/js/cart.js"></script>
<script src="<?= base_url('public')  ?>/assets/js/il_ilce.js"></script>

<?php if (isset($paytr_token)) : ?>
    <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
    <script>
        iFrameResize({}, '#paytriframe');
    </script>
<?php endif  ?>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>

<!-- Ec cart page -->
<section class="ec-page-content section-space-p">
    <div class="container">
        <form method="post">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

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
                                            <?php foreach ($cartData as $key => $cart) :   ?>
                                                <tr class="cart-item" data-parent data-key="<?= $cart['product_id']  ?>">
                                                    <td data-label="Product" class="ec-cart-pro-name">
                                                        <a href="<?= base_url($cart['slug'])  ?>">
                                                            <img class="ec-cart-pro-img mr-4" src="<?= $cart['image']  ?>" alt="img-<?= $cart['product_id'] ?>" /><?= $cart['name']  ?></a>
                                                    </td>
                                                    <td data-label="Price" class="ec-cart-pro-price"><span class="amount"><?= number_format($cart['price'], 2)  ?></span></td>
                                                    <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;">
                                                        <div class="cart-qty-plus-minus">
                                                            <input class="cart-plus-minus" type="text" name="cartqtybutton" value="<?= $cart['cart_quantity']  ?>" readonly />
                                                            <?php if (!isset($paytr_token)) :  ?>
                                                                <div class="ec_cart_qtybtn">
                                                                    <div class="inc ec_qtybtn" data-plus>+</div>
                                                                    <div class="dec ec_qtybtn" data-minus>-</div>
                                                                </div>
                                                            <?php endif  ?>
                                                        </div>
                                                    </td>
                                                    <td data-label="Total" class="ec-cart-pro-subtotal"><span><?= number_format(($cart['price'] * $cart['cart_quantity']), 2) ?></span> ₺</td>
                                                    <td data-label="Remove" class="ec-cart-pro-remove">
                                                        <a href="#"><i class="ecicon eci-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach  ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ec-cart-update-bottom">
                                            <a href="<?= base_url()  ?>">Alışverişe Devam Et</a>
                                            <?php if (!isset($paytr_token)) : ?>
                                                <button type="submit" class="btn btn-primary checkout-button" <?= !count($cartData) ? 'disabled ': ''  ?>>Ödeme Ekranına Git</button>
                                            <?php endif  ?>
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
                                                    <input type="text" name="firstname" placeholder="Adınızı giriniz" value="<?= set_value('firstname')  ?>" required="" <?= isset($paytr_token) ? 'readonly' : ''  ?>>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Soyad <span class="text-danger">*</span></label>
                                                    <input type="text" name="lastname" placeholder="Soyadınızı giriniz" value="<?= set_value('lastname')  ?>" required="" <?= isset($paytr_token) ? 'readonly' : ''  ?>>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="ec-register-wrap">
                                                    <label>Adres <span class="text-danger">*</span></label>
                                                    <input type="text" name="address" placeholder="Adresinizi giriniz" value="<?= set_value('address')  ?>" required="" <?= isset($paytr_token) ? 'readonly' : ''  ?>>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap ec-register-half">
                                                    <label>İl: <span class="text-danger">*</span></label><br>
                                                    <span class="ec-rg-select-inner">
                                                        <select name="ec_select_city" id="Iller" class="ec-register-select border form-control" required="" <?= isset($paytr_token) ? 'disabled' : ''  ?>>
                                                            <option value="">Lütfen Bir İl Seçiniz</option>
                                                            <option <?= set_select('ec_select_city', '1') ?> value="1">Adana</option>
                                                            <option <?= set_select('ec_select_city', '2')  ?> value="2">Adıyaman</option>
                                                            <option <?= set_select('ec_select_city', '3')  ?> value="3">Afyonkarahisar</option>
                                                            <option <?= set_select('ec_select_city', '4')  ?> value="4">Ağrı</option>
                                                            <option <?= set_select('ec_select_city', '5')  ?> value="5">Amasya</option>
                                                            <option <?= set_select('ec_select_city', '6')  ?> value="6">Ankara</option>
                                                            <option <?= set_select('ec_select_city', '7')  ?> value="7">Antalya</option>
                                                            <option <?= set_select('ec_select_city', '8')  ?> value="8">Artvin</option>
                                                            <option <?= set_select('ec_select_city', '9')  ?> value="9">Aydın</option>
                                                            <option <?= set_select('ec_select_city', '10')  ?> value="10">Balıkesir</option>
                                                            <option <?= set_select('ec_select_city', '11')  ?> value="11">Bilecik</option>
                                                            <option <?= set_select('ec_select_city', '12')  ?> value="12">Bingöl</option>
                                                            <option <?= set_select('ec_select_city', '13')  ?> value="13">Bitlis</option>
                                                            <option <?= set_select('ec_select_city', '14')  ?> value="14">Bolu</option>
                                                            <option <?= set_select('ec_select_city', '15')  ?> value="15">Burdur</option>
                                                            <option <?= set_select('ec_select_city', '16')  ?> value="16">Bursa</option>
                                                            <option <?= set_select('ec_select_city', '17')  ?> value="17">Çanakkale</option>
                                                            <option <?= set_select('ec_select_city', '18')  ?> value="18">Çankırı</option>
                                                            <option <?= set_select('ec_select_city', '19')  ?> value="19">Çorum</option>
                                                            <option <?= set_select('ec_select_city', '20')  ?> value="20">Denizli</option>
                                                            <option <?= set_select('ec_select_city', '21')  ?> value="21">Diyarbakır</option>
                                                            <option <?= set_select('ec_select_city', '22')  ?> value="22">Edirne</option>
                                                            <option <?= set_select('ec_select_city', '23')  ?> value="23">Elazığ</option>
                                                            <option <?= set_select('ec_select_city', '24')  ?> value="24">Erzincan</option>
                                                            <option <?= set_select('ec_select_city', '25')  ?> value="25">Erzurum</option>
                                                            <option <?= set_select('ec_select_city', '26')  ?> value="26">Eskişehir</option>
                                                            <option <?= set_select('ec_select_city', '27')  ?> value="27">Gaziantep</option>
                                                            <option <?= set_select('ec_select_city', '28')  ?> value="28">Giresun</option>
                                                            <option <?= set_select('ec_select_city', '29')  ?> value="29">Gümüşhane</option>
                                                            <option <?= set_select('ec_select_city', '30')  ?> value="30">Hakkari</option>
                                                            <option <?= set_select('ec_select_city', '31')  ?> value="31">Hatay</option>
                                                            <option <?= set_select('ec_select_city', '32')  ?> value="32">Isparta</option>
                                                            <option <?= set_select('ec_select_city', '33')  ?> value="33">Mersin</option>
                                                            <option <?= set_select('ec_select_city', '34')  ?> value="34">İstanbul</option>
                                                            <option <?= set_select('ec_select_city', '35')  ?> value="35">İzmir</option>
                                                            <option <?= set_select('ec_select_city', '36')  ?> value="36">Kars</option>
                                                            <option <?= set_select('ec_select_city', '37')  ?> value="37">Kastamonu</option>
                                                            <option <?= set_select('ec_select_city', '38')  ?> value="38">Kayseri</option>
                                                            <option <?= set_select('ec_select_city', '39')  ?> value="39">Kırklareli</option>
                                                            <option <?= set_select('ec_select_city', '40')  ?> value="40">Kırşehir</option>
                                                            <option <?= set_select('ec_select_city', '41')  ?> value="41">Kocaeli</option>
                                                            <option <?= set_select('ec_select_city', '42')  ?> value="42">Konya</option>
                                                            <option <?= set_select('ec_select_city', '43')  ?> value="43">Kütahya</option>
                                                            <option <?= set_select('ec_select_city', '44')  ?> value="44">Malatya</option>
                                                            <option <?= set_select('ec_select_city', '45')  ?> value="45">Manisa</option>
                                                            <option <?= set_select('ec_select_city', '46')  ?> value="46">Kahramanmaraş</option>
                                                            <option <?= set_select('ec_select_city', '47')  ?> value="47">Mardin</option>
                                                            <option <?= set_select('ec_select_city', '48')  ?> value="48">Muğla</option>
                                                            <option <?= set_select('ec_select_city', '49')  ?> value="49">Muş</option>
                                                            <option <?= set_select('ec_select_city', '50')  ?> value="50">Nevşehir</option>
                                                            <option <?= set_select('ec_select_city', '51')  ?> value="51">Niğde</option>
                                                            <option <?= set_select('ec_select_city', '52')  ?> value="52">Ordu</option>
                                                            <option <?= set_select('ec_select_city', '53')  ?> value="53">Rize</option>
                                                            <option <?= set_select('ec_select_city', '54')  ?> value="54">Sakarya</option>
                                                            <option <?= set_select('ec_select_city', '55')  ?> value="55">Samsun</option>
                                                            <option <?= set_select('ec_select_city', '56') ?> value="56">Siirt</option>
                                                            <option <?= set_select('ec_select_city', '57') ?> value="57">Sinop</option>
                                                            <option <?= set_select('ec_select_city', '58') ?> value="58">Sivas</option>
                                                            <option <?= set_select('ec_select_city', '59') ?> value="59">Tekirdağ</option>
                                                            <option <?= set_select('ec_select_city', '60') ?> value="60">Tokat</option>
                                                            <option <?= set_select('ec_select_city', '61') ?> value="61">Trabzon</option>
                                                            <option <?= set_select('ec_select_city', '62') ?> value="62">Tunceli</option>
                                                            <option <?= set_select('ec_select_city', '63') ?> value="63">Şanlıurfa</option>
                                                            <option <?= set_select('ec_select_city', '64') ?> value="64">Uşak</option>
                                                            <option <?= set_select('ec_select_city', '65') ?> value="65">Van</option>
                                                            <option <?= set_select('ec_select_city', '66') ?> value="66">Yozgat</option>
                                                            <option <?= set_select('ec_select_city', '67') ?> value="67">Zonguldak</option>
                                                            <option <?= set_select('ec_select_city', '68') ?> value="68">Aksaray</option>
                                                            <option <?= set_select('ec_select_city', '69') ?> value="69">Bayburt</option>
                                                            <option <?= set_select('ec_select_city', '70') ?> value="70">Karaman</option>
                                                            <option <?= set_select('ec_select_city', '71') ?> value="71">Kırıkkale</option>
                                                            <option <?= set_select('ec_select_city', '72') ?> value="72">Batman</option>
                                                            <option <?= set_select('ec_select_city', '73') ?> value="73">Şırnak</option>
                                                            <option <?= set_select('ec_select_city', '74') ?> value="74">Bartın</option>
                                                            <option <?= set_select('ec_select_city', '75') ?> value="75">Ardahan</option>
                                                            <option <?= set_select('ec_select_city', '76') ?> value="76">Iğdır</option>
                                                            <option <?= set_select('ec_select_city', '77') ?> value="77">Yalova</option>
                                                            <option <?= set_select('ec_select_city', '78') ?> value="78">Karabük</option>
                                                            <option <?= set_select('ec_select_city', '79') ?> value="79">Kilis</option>
                                                            <option <?= set_select('ec_select_city', '80') ?> value="80">Osmaniye</option>
                                                            <option <?= set_select('ec_select_city', '81') ?> value="81">Düzce</option>
                                                        </select>
                                                    </span>
                                                </span>
                                            </div>

                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>İlçe: <span class="text-danger">*</span></label><br>
                                                    <span class="ec-register-wrap ec-register-half">
                                                        <span class="ec-rg-select-inner">
                                                            <select name="ec_select_country" id="Ilceler" disabled="disabled" class="ec-register-select border form-control" required="" <?= isset($paytr_token) ? 'disabled' : ''  ?>>
                                                                <option value="">Lütfen Önce Bir İl Seçiniz</option>
                                                                <?php if (isset($ec_select_country)) : ?>
                                                                    <option value="<?= $ec_select_country  ?>" selected><?= $ec_select_country  ?></option>
                                                                <?php endif  ?>
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
                                                    <input type="text" name="email" placeholder="Mail Adresi" value="<?= set_value('email')  ?>" required="" <?= isset($paytr_token) ? 'readonly' : ''  ?>>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="ec-register-wrap">
                                                    <label>Telefon No: <span class="text-danger">*</span></label>
                                                    <input type="phone" name="phonenumber" placeholder="Telefon No" value="<?= set_value('phonenumber')  ?>" required="" <?= isset($paytr_token) ? 'readonly' : ''  ?>>
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
                                            <span class="text-right sub-total"><span> <?= $totalPrice  ?> </span> ₺</span>
                                        </div>
                                        <div>
                                            <span class="text-left">Korgo Ücreti</span>
                                            <span class="text-right delivery-charges"><span> <?= $deliveryPrice   ?> </span> ₺</span>
                                        </div>

                                        <!-- <div class="ec-cart-coupan-content">
                                            <form class="ec-cart-coupan-form" name="ec-cart-coupan-form" method="post" action="#">
                                                <input class="ec-coupan" type="text" required="" placeholder="Enter Your Coupan Code" name="ec-coupan" value="">
                                                <button class="ec-coupan-btn button btn-primary" type="submit" name="subscribe" value="">Apply</button>
                                            </form>
                                        </div> -->
                                        <div class="ec-cart-summary-total">
                                            <span class="text-left">Toplam Tutar</span>
                                            <span class="text-right total-amount"><span> <?= $deliveryPrice + $totalPrice    ?> </span> ₺</span>
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

<?php if (isset($paytr_token)) :  ?>
    <iframe src="https://www.paytr.com/odeme/guvenli/<?php echo $paytr_token; ?>" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>

<?php endif  ?>

<!-- New Product end -->
<?= $this->endSection()  ?>