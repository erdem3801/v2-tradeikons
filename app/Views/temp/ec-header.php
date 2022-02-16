<header class="ec-header">
    <!--Ec Header Top Start -->
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <!-- Header Top social Start -->
                <div class="col text-left header-top-left d-none d-lg-block">
                    <div class="header-top-social">
                        <span class="social-text text-upper">Follow us on:</span>
                        <ul class="mb-0">
                            <?php

                            if ($settings->facebook != null || $settings->facebook != "")
                                echo '<li class="list-inline-item"><a class="hdr-facebook" href="' . $settings->facebook . '" target="_blank"><i class="ecicon eci-facebook"></i></a></li>';
                            if ($settings->instagram != null || $settings->instagram != "")
                                echo '<li class="list-inline-item"><a class="hdr-instagram" href="' . $settings->instagram . '" target="_blank"><i class="ecicon eci-instagram"></i></a></li>';
                            if ($settings->linkedin != null || $settings->linkedin != "")
                                echo '<li class="list-inline-item"><a class="hdr-linkedin" href="' . $settings->linkedin . '" target="_blank"><i class="ecicon eci-linkedin"></i></a></li>';
                            if ($settings->twitter != null || $settings->twitter != "")
                                echo '<li class="list-inline-item"><a class="hdr-twitter" href="' . $settings->twitter . '" target="_blank"><i class="ecicon eci-twitter"></i></a></li>';
                            ?>

                        </ul>
                    </div>
                </div>
                <!-- Header Top social End -->
                <!-- Header Top Message Start -->
                <div class="col text-center header-top-center">
                    <div class="header-top-message text-upper">
                        <?= $settings->ust_aciklama  ?>
                    </div>
                </div>
                <!-- Header Top Message End -->
                <!-- Header Top Language Currency -->
                <div class="col header-top-right d-none d-lg-block">

                </div>
                <!-- Header Top Language Currency -->
                <!-- Header Top responsive Action -->
                <div class="col d-lg-none ">
                    <div class="ec-header-bottons">
                        <!-- Header User Start -->
                        <div class="ec-header-user dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="<?= base_url('public')  ?>/assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                                <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                            </ul>
                        </div>
                        <!-- Header User End -->
                        <!-- Header Cart Start -->
                        <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                            <div class="header-icon"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count">4</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header Cart Start -->
                        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                            <div class="header-icon"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
                            <span class="ec-header-count cart-count-lable">3</span>
                        </a>
                        <!-- Header Cart End -->
                        <!-- Header menu Start -->
                        <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                            <img src="<?= base_url('public')  ?>/assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
                        </a>
                        <!-- Header menu End -->
                    </div>
                </div>
                <!-- Header Top responsive Action -->
            </div>
        </div>
    </div>
    <!-- Ec Header Top  End -->
    <!-- Ec Header Bottom  Start -->
    <div class="ec-header-bottom d-none d-lg-block">
        <div class="container position-relative">
            <div class="row">
                <div class="ec-flex">
                    <!-- Ec Header Logo Start -->
                    <div class="align-self-center">
                        <div class="header-logo">
                            <a href="<?= base_url() ?>"><img src="<?= base_url('public')  ?>/assets/images/logo/logo.png" alt="Site Logo" /><img class="dark-logo" src="<?= base_url('public')  ?>/assets/images/logo/dark-logo.png" alt="Site Logo" style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->

                    <!-- Ec Header Search Start -->
                    <div class="align-self-center">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit"><img src="<?= base_url('public')  ?>/assets/images/icons/search.svg" class="svg_img header_svg" alt="" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                    <!-- Ec Header Button Start -->
                    <div class="align-self-center">
                        <div class="ec-header-bottons">

                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img src="<?= base_url('public')  ?>/assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php if (session()->get('user')) : ?>
                                        <li><a class="dropdown-item" href="<?= base_url('acount')  ?>">Hesabım</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('orders?filter=all')  ?>">Siparişlerim</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('logout')  ?>">Çıkış yap</a></li>
                                    <?php else : ?>
                                        <li><a class="dropdown-item" href="<?= base_url('kayit-ol')  ?>">Kayıt ol</a></li>
                                        <li><a class="dropdown-item" href="<?= base_url('uye-giris')  ?>">Giriş yap</a></li>
                                    <?php endif  ?>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header wishlist Start -->
                            <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="<?= base_url('public')  ?>/assets/images/icons/wishlist.svg" class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count wishlist-count-lable">0</span>
                            </a>
                            <!-- Header wishlist End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">0</span>
                            </a>
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Header Button End -->
    <!-- Header responsive Bottom  Start -->
    <div class="ec-header-bottom d-lg-none">
        <div class="container position-relative">
            <div class="row ">

                <!-- Ec Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="<?= base_url() ?>"><img src="<?= base_url('public')  ?>/assets/images/logo/logo.png" alt="Site Logo" /><img class="dark-logo" src="<?= base_url('public')  ?>/assets/images/logo/dark-logo.png" alt="Site Logo" style="display: none;" /></a>
                    </div>
                </div>
                <!-- Ec Header Logo End -->
                <!-- Ec Header Search Start -->
                <div class="col">
                    <div class="header-search">
                        <form class="ec-btn-group-form" action="#">
                            <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                            <button class="submit" type="submit"><img src="<?= base_url('public')  ?>/assets/images/icons/search.svg" class="svg_img header_svg" alt="icon" /></button>
                        </form>
                    </div>
                </div>
                <!-- Ec Header Search End -->
            </div>
        </div>
    </div>
    <!-- Header responsive Bottom  End -->
    <!-- EC Main Menu Start -->
    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <div class="ec-main-menu">
                        <ul>
                            <?php foreach ($categories as $main) :  ?>
                                <li class="dropdown position-static"><a href="javascript:void(0)"><?= $main["category_title"] ?></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <?php if (isset($main["node"])) : ?>
                                                <?php foreach ($main["node"] as $key => $submain) : ?>
                                                    <ul class="d-block">
                                                        <li class="menu_title"><a href="<?= base_url()  ?>/<?= $main["category_slug"] ?>/<?= $submain["category_slug"] ?>"><?= $submain["category_title"] ?></a></li>
                                                        <?php if (isset($submain["node"])) :  $say = 0; ?>
                                                            <?php foreach ($submain["node"] as $key1 => $categorie) : $say++;  ?>
                                                                <li><a href="<?= base_url()  ?>/<?= $main["category_slug"] ?>/<?= $submain["category_slug"] ?>/<?= $categorie["category_slug"] ?>"><?= $categorie["category_title"] ?></a></li>
                                                            <?php endforeach ?>
                                                        <?php endif ?>
                                                        <?php for ($i_1 = 0; $i_1 <= 6 - $say; $i_1++) : ?>
                                                            <li><a href="#"><span style="color:white;">Deneme</span></a></li>
                                                        <?php endfor ?>
                                                        <li><a class="p-0 " href="<?= base_url()  ?>/<?= $main["category_slug"] ?>/<?= $submain["category_slug"] ?>"><img class="img-responsive" src="<?= base_url('public')  ?>/assets/images/menu-banner/<?= $submain["category_image"] ?>" alt="<?= $submain["category_title"] ?>"></a></li>
                                                    </ul>
                                                <?php endforeach ?>
                                            <?php endif ?>
                                        </li>
                                    </ul>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec Main Menu End -->
    <!-- ekka Mobile Menu Start -->
    <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
        <div class="ec-menu-title">
            <span class="menu_title">My Menu</span>
            <button class="ec-close">×</button>
        </div>
        <div class="ec-menu-inner">
            <div class="ec-menu-content">
                <ul>
                    <?php foreach ($categories as  $main) : ?>
                        <li><a href="javascript:void(0)"><?= $main["category_title"] ?></a>
                            <ul class="sub-menu">
                                <?php if (isset($main["node"])) : ?>
                                    <?php foreach ($main['node'] as $submain) :  ?>
                                        <li>
                                            <a href="<?= base_url()  ?>/<?= $main["category_slug"] ?>/<?= $submain["category_slug"] ?>"><?= $submain['category_title']  ?></a>
                                            <ul class="sub-menu">
                                                <?php if (isset($submain["node"])) : ?>
                                                    <?php foreach ($submain['node'] as  $cat) :  ?>
                                                        <li><a href="<?= base_url()  ?>/<?= $main["category_slug"] ?>/<?= $submain["category_slug"] ?>/<?= $cat["category_slug"] ?>"><?= $cat['category_title']  ?></a></li>
                                                    <?php endforeach  ?>
                                                <?php endif  ?>
                                            </ul>
                                        </li> 
                                    <?php endforeach  ?>
                                <?php endif  ?>
                            </ul>
                        </li>
                    <?php endforeach  ?>
                </ul>
            </div>
            <div class="header-res-lan-curr">
               
                <!-- Social Start -->
                <div class="header-res-social">
                    <div class="header-top-social">
                        <ul class="mb-0">
                            <?php

                            if ($settings->facebook != null || $settings->facebook != "")
                                echo '<li class="list-inline-item"><a class="hdr-facebook" href="' . $settings->facebook . '" target="_blank"><i class="ecicon eci-facebook"></i></a></li>';
                            if ($settings->instagram != null || $settings->instagram != "")
                                echo '<li class="list-inline-item"><a class="hdr-instagram" href="' . $settings->instagram . '" target="_blank"><i class="ecicon eci-instagram"></i></a></li>';
                            if ($settings->linkedin != null || $settings->linkedin != "")
                                echo '<li class="list-inline-item"><a class="hdr-linkedin" href="' . $settings->linkedin . '" target="_blank"><i class="ecicon eci-linkedin"></i></a></li>';
                            if ($settings->twitter != null || $settings->twitter != "")
                                echo '<li class="list-inline-item"><a class="hdr-twitter" href="' . $settings->twitter . '" target="_blank"><i class="ecicon eci-twitter"></i></a></li>';
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- Social End -->
            </div>
        </div>
    </div>
    <!-- ekka mobile Menu End -->
</header>