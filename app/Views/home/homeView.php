 <?= $this->extend('temp/tempHome')  ?>

 <?= $this->section('style')  ?>
 <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/demo1.css" />
 <style>
     .image {
         position: relative;
         width: 100%;
     }

     .uste {
         position: absolute;
         top: 30px;
         width: 100%;
         text-align: center;
         margin: auto;
         font-family: "Bebas";
         font-weight: bold;
     }
 </style>
 <?= $this->endSection()  ?>


 <?= $this->section('script')  ?>
 <script src="<?= base_url('public')  ?>/assets/js/vendor/index.js"></script>
 <?= $this->endSection()  ?>


 <?= $this->section('content')  ?>
 <section class=" ec-vendor-uploads  section-space-p">
     <div class="container">
         <?php foreach ($carousel as $key => $row) : ?>
             <div class="row">
                 <div class="col-lg-9 col-md-12">
                     <div class="mx-1 my-3 p-0 text-center">
                         <a href="<?= $row['href']  ?>">
                             <img src="<?= $row['src']  ?>" class="w-auto h-100 rounded m-0 p-0 shadow" alt="<?= $row['alt']  ?>">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                     <div id="<?= $row['id']  ?>" class="carousel slide text-center p-0" data-ride="carousel">
                         <div class="carousel-inner">
                             <?php foreach ($row['urunler'] as $key => $value) : ?>
                                 <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                     <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                     <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                                 </div>
                             <?php endforeach ?>
                         </div>
                         <a class="carousel-control-prev" href="<?= $row['previous']  ?>" role="button" data-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="<?= $row['next']  ?>" role="button" data-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="sr-only">Next</span>
                         </a>
                     </div>
                 </div>
             </div>
         <?php endforeach  ?>
         
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=5&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/kozmetik.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="cocuk"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="kozmetikbanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Dermaroller",
                                    "urun_url" => "index.php?detay=12647",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70650985/a390-1.jpg"
                                ],
                                [
                                    "urun_adi" => "Fırça",
                                    "urun_url" => "index.php?detay=12689",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/catalog-ilktoptan-tmp-frc-jpg-1.jpg"
                                ],
                                [
                                    "urun_adi" => "Bakım Aleti",
                                    "urun_url" => "index.php?detay=16389",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70652101/med-00548y-1.jpg"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#kozmetikbanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#kozmetikbanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=6&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/outdoor.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="outdoor"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="outdoorbanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Kar Botu",
                                    "urun_url" => "index.php?detay=1648",
                                    "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/dare-2b-kardrona-kadin-kar-botu-beyaz-11634.jpg"
                                ],
                                [
                                    "urun_adi" => "T-Shirt",
                                    "urun_url" => "index.php?detay=763",
                                    "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-elixir-erkek-t-shirt-mavi-10878.jpg"
                                ],
                                [
                                    "urun_adi" => "Şişme Yatak",
                                    "urun_url" => "index.php?detay=22",
                                    "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/bestway-67000n-tek-kisilik-sisme-yatak-1004.jpg"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#outdoorbanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#outdoorbanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=7&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/evyasam.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="evyasam"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="evyasambanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Gece Lambası",
                                    "urun_url" => "index.php?detay=15361",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/catalog-ilktoptan-tmp-lmb-jpg-1.jpg"
                                ],
                                [
                                    "urun_adi" => "Termos",
                                    "urun_url" => "index.php?detay=3899",
                                    "urun_gorsel_url" => "http://www.ewsyonetim.com/product-images-resized/2370_1.jpg"
                                ],
                                [
                                    "urun_adi" => "El Feneri",
                                    "urun_url" => "index.php?detay=12068",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/image/catalog/watton/wt-037/blackwatton-wt-037-sarjli-zoomlu-acil-durum-feneri-wt-037.jpg"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#evyasambanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#evyasambanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=8&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/petshop.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="petshop"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="petshopbanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Tasma",
                                    "urun_url" => "index.php?detay=17276",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/cm/image/content/images/product/makarali-otomatik-kopek-tasmasi-5-metre-4-renk.jpg"
                                ],
                                [
                                    "urun_adi" => "Tırnak Makası",
                                    "urun_url" => "index.php?detay=17268",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/cm/productimages/20.12/evcil-hayvan-tirnak-makasi-yeni-model.jpg"
                                ],
                                [
                                    "urun_adi" => "Tarak",
                                    "urun_url" => "index.php?detay=13882",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/pttrk-jpg-1.jpg"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#petshopbanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#petshopbanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=9&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/ayakkabi.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="ayakkabi"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="ayakkabibanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Kadın Bot",
                                    "urun_url" => "index.php?detay=2619",
                                    "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/rita-vizon-gunluk-kadin-bot-ayakkabi-a-3fbc.webp"
                                ],
                                [
                                    "urun_adi" => "Erkek Ayakkabı",
                                    "urun_url" => "index.php?detay=1265",
                                    "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/berg-potoroo-erkek-ayakkabi-turuncu-11336.jpg"
                                ],
                                [
                                    "urun_adi" => "Bakım Çantası",
                                    "urun_url" => "index.php?detay=1689",
                                    "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/freecamp-bebek-bakim-cantasi-lacivert-11961.jpg"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#ayakkabibanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#ayakkabibanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-lg-9 col-md-12">
                 <div class="  mx-1 my-3 p-0 text-center">
                     <a href="index.php?id1=10&id2=0&id3=1"><img src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/hobi.webp" class="w-auto h-100 rounded m-0 p-0 shadow" alt="hobi"></a>
                 </div>
             </div>
             <div class="col-lg-3 col-md-12 d-none d-sm-none d-md-none  d-lg-block m-0 p-0">
                 <div id="hobibanner" class="carousel slide text-center p-0" data-ride="carousel">
                     <div class="carousel-inner">
                         <?php
                            $urunler = [
                                [
                                    "urun_adi" => "Kolye",
                                    "urun_url" => "index.php?detay=13455",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/KLC/kolye3.jpg"
                                ],
                                [
                                    "urun_adi" => "Biblo",
                                    "urun_url" => "index.php?detay=12621",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70655288/tdnc-113-1.jpg"
                                ],
                                [
                                    "urun_adi" => "Doktor Biblo",
                                    "urun_url" => "index.php?detay=14612",
                                    "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70655467/tdnk-646-1.png"
                                ]
                            ];
                            foreach ($urunler as $key => $value) {
                            ?>
                             <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                 <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                 <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                             </div>
                         <?php
                            }
                            ?>
                     </div>
                     <a class="carousel-control-prev" href="#hobibanner" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#hobibanner" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <section class=" ec-vendor-uploads  section-space-p">
     <div class="container">
         <div class="row">
             <?php foreach ($a as $key => $value) : ?>
                 <div class="col-md-4 col-6 my-2">
                     <a class="p-0 " href="<?= $value['href']  ?>">
                         <img class="img-responsive " src="<?= $value['src']  ?>" alt="<?= $value['alt']  ?>">
                     </a>
                 </div>
             <?php endforeach ?>
         </div>
     </div>
 </section>
 <!--  services Section Start -->
 <section class="section ec-services-section section-space-p">
     <h2 class="d-none">Services</h2>
     <div class="container">
         <div class="row">
             <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                 <a href="gizlilik_ve_kvkk.php">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="<?= base_url('public') ?>/assets/images/icons/service_4.svg" class="svg_img" alt="Güvenli Alışveriş" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>Güvenli Alışveriş</h2>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                 <a href="kargo_ve_teslimat.php">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="<?= base_url('public') ?>/assets/images/icons/service_1.svg" class="svg_img" alt="Hızlı Kargo" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>Hızlı Kargo</h2>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                 <a href="iletisim.php">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="<?= base_url('public') ?>/assets/images/icons/service_2.svg" class="svg_img" alt="Müşteri Temsilcis" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>Müşteri Temsilcisi</h2>
                         </div>
                     </div>
                 </a>
             </div>
             <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-6 col-lg-3" data-animation="zoomIn">
                 <a href="iptal_ve_iade.php">
                     <div class="ec_ser_inner">
                         <div class="ec-service-image">
                             <img src="<?= base_url('public') ?>/assets/images/icons/service_3.svg" class="svg_img" alt="İade İmkanı" />
                         </div>
                         <div class="ec-service-desc">
                             <h2>İade İmkanı</h2>
                         </div>
                     </div>
                 </a>
             </div>
         </div>
     </div>
 </section>
 <!--services Section End -->
 <?= $this->endSection()  ?>