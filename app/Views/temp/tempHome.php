<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka - Ecommerce HTML Template.</title>
    <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="<?= base_url('public')  ?>/assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="<?= base_url('public')  ?>/assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="<?= base_url('public')  ?>/assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="<?= base_url('public')  ?>/assets/css/responsive.css" />
    <?= $this->renderSection('style')  ?>
    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="<?= base_url('public')  ?>/assets/css/backgrounds/bg-4.css">
</head>

<body>
    <!-- TODO <div id="ec-overlay"><span class="loader_img"></span></div> -->

    <!-- Header start  -->
    <?= $this->include('temp/ec-header')  ?>
    <!-- Header End  -->

    <!-- ekka Cart Start -->
    <?= $this->include('temp/cart')  ?>
    <!-- ekka Cart End -->
    <?php if (isset($baslik)) : ?>
        <?= $this->include('temp/breadcrumb')  ?>
    <?php endif  ?>
    <?= $this->renderSection('content')  ?>

    <!-- Ec Instagram Start -->
    <?= $this->include('temp/instagram')  ?>
    <!-- Ec Instagram End -->

    <!-- Footer Start -->
    <?= $this->include('temp/footer')  ?>
    <!-- Footer Area End -->

    <!-- Modal -->
    <?= $this->include('temp/modal')  ?>
    <!-- Modal end -->

    <!-- Newsletter Modal Start -->
    <?= '' // TODO $this->include('temp/newster')  
    ?>
    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <?= $this->include('temp/footerNav')  ?>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <?= $this->include('temp/recentPurchase')  ?>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <?= $this->include('temp/cartFloating')  ?>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <?= $this->include('temp/whatsapp')  ?>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <?= $this->include('temp/featureTools')  ?>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="<?= base_url('public')  ?>/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="<?= base_url('public')  ?>/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/countdownTimer.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/scrollup.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/slick.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/infiniteslidev2.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('public')  ?>/assets/js/plugins/jquery.sticky-sidebar.js"></script>
 

    <!-- Main Js -->
    <script src="<?= base_url('public')  ?>/assets/js/main.js"></script>

    <?= $this->renderSection('script')  ?>
</body>

</html>