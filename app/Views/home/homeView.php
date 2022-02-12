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
                     <div id="<?= $row['id']  ?>" class="carousel slide" data-bs-ride="carousel">
                         <div class="carousel-indicators">
                             <button type="button" data-bs-target="#<?= $row['id']  ?>" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                             <button type="button" data-bs-target="#<?= $row['id']  ?>" data-bs-slide-to="1" aria-label="Slide 2"></button>
                             <button type="button" data-bs-target="#<?= $row['id']  ?>" data-bs-slide-to="2" aria-label="Slide 3"></button>
                         </div>
                         <div class="carousel-inner">
                             <?php foreach ($row['urunler'] as $key => $value) : ?>
                                 <div class="carousel-item pngbanner <?= $key == 0 ? "active" : null ?>" style="background-image: url('<?= $value["urun_gorsel_url"] ?>');">
                                     <a href="<?= $value["urun_url"] ?>" class="image"><img class=" rounded mx-1 my-3 p-0  " src="<?= base_url('public') ?>/assets/images/menu-banner/anasayfa/sagbannerr.png" alt="slide"></a>
                                     <h4 class="uste"><?= $value["urun_adi"] ?></h4>
                                 </div>
                             <?php endforeach ?>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#<?= $row['id']  ?>" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#<?= $row['id']  ?>" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>
                     </div>
                 </div>
             </div>
         <?php endforeach  ?>
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