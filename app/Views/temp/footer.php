<footer class="ec-footer section-space-mt">
    <div class="footer-container">
        <div class="footer-top section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-3 ec-footer-contact">
                        <div class="ec-footer-widget">
                            <div class="ec-footer-logo">
                                <a href="#"><img src="<?= base_url('public')  ?>/assets/images/logo/footer-logo.png" alt="footer-logo"><img class="dark-footer-logo" src="<?= base_url('public')  ?>/assets/images/logo/dark-logo.png" alt="Site Logo" style="display: none;" /></a>
                            </div>
                            <h4 class="ec-footer-heading">İletişim</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><?= $settings->iletisim_adres ?></li>
                                    <li class="ec-footer-link"><span>Telefon :</span>
                                        <a href="tel:<?= $settings->iletisim_telefon ?>"><?= $settings->iletisim_telefon ?></a>
                                    </li>
                                    <li class="ec-footer-link"><span>E-posta :</span>
                                        <a href="mailto:<?= $settings->iletisim_mail ?>"><?= $settings->iletisim_mail ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-info">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Bilgi</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="hakkimizda">Hakkımızda</a></li>
                                    <li class="ec-footer-link"><a href="sss">SSS</a></li>
                                    <li class="ec-footer-link"><a href="iletisim">İletişim</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-account">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Müşteri Hizmetleri</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link"><a href="<?= base_url('gizlilik-ve-kvkk')  ?>">Gizlilik ve Kvkk Bilgileri</a></li>
                                    <li class="ec-footer-link"><a href="<?= base_url('kargo-ve-teslimat')  ?>">Kargo ve Teslimat Bilgileri</a></li>
                                    <li class="ec-footer-link"><a href="<?= base_url('iptal-ve-iade')  ?>">İptal ve İade Koşulları</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-2 ec-footer-service">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">Hızlı Erişim</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <?php if (isset($_SESSION["kullanici"])) : ?>
                                        <li class="ec-footer-link"><a href="index?hesabim=1">Hesabım</a></li>
                                        <li class="ec-footer-link"><a href="uye-cikis">Çıkış Yap</a></li>
                                    <?php else : ?>
                                        <li class="ec-footer-link"><a href="<?= base_url('uye-giris') ?>">Giriş Yap</a></li>
                                        <li class="ec-footer-link"><a href="<?= base_url('kayit-ol') ?>">Kayıt Ol</a></li>
                                    <?php endif ?>
                                    <li class="ec-footer-link"><a href="index?odeme=1">Sepetim</a></li>
                                    <li class="ec-footer-link"><a href="siparis-takip">Sipariş Takip</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-3 ec-footer-news">
                        <div class="ec-footer-widget">
                            <h4 class="ec-footer-heading">E-Bülten</h4>
                            <div class="ec-footer-links">
                                <ul class="align-items-center">
                                    <li class="ec-footer-link">Yeni ürünlerimiz ve özel promosyonlarımız hakkında anında güncellemeler alın!</li>
                                </ul>
                                <div class="ec-subscribe-form">
                                    <form id="ec-newsletter-form" name="ec-newsletter-form" method="post" action="#">
                                        <div id="ec_news_signup" class="ec-form">
                                            <input class="ec-email" type="email" required="" placeholder="E-posta adresinizi buraya girin..." name="ec-email" value="" />
                                            <button id="ec-news-btn" class="button btn-primary" type="submit" name="subscribe" value=""><i class="ecicon eci-paper-plane-o" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Footer social Start -->
                    <div class="col text-left footer-bottom-left">
                        <div class="footer-bottom-social">
                            <span class="social-text text-upper">Bizi takip edin: </span>
                            <ul class="mb-0">
                                <?php if ($settings->facebook != null || $settings->facebook != "") : ?>
                                    <li class="list-inline-item"><a class="hdr-facebook" href="<?= $settings->facebook  ?>"><i class="ecicon eci-facebook"></i></a></li>
                                <?php endif  ?>
                                <?php if ($settings->instagram != null || $settings->instagram != "") : ?>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="<?= $settings->instagram  ?>"><i class="ecicon eci-instagram"></i></a></li>
                                <?php endif  ?>
                                <?php if ($settings->linkedin != null || $settings->linkedin != "") : ?>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="<?= $settings->linkedin  ?>"><i class="ecicon eci-linkedin"></i></a></li>
                                <?php endif  ?>
                                <?php if ($settings->twitter != null || $settings->twitter != "") : ?>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="<?= $settings->twitter  ?>"><i class="ecicon eci-twitter"></i></a></li>
                                <?php endif  ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer social End -->
                    <!-- Footer Copyright Start -->
                    <div class="col text-center footer-copy">
                        <div class="footer-bottom-copy ">
                            <div class="ec-copy">
                                <?= $settings->copyright ?>
                                <a class="site-name text-upper" href="<?= $settings->site_url ?>">
                                    <?= $settings->site_baslik ?> <span>.</span>
                                </a>.
                            </div>
                        </div>
                    </div>
                    <!-- Footer Copyright End -->
                    <!-- Footer payment -->
                    <div class="col footer-bottom-right">
                        <div class="footer-bottom-payment d-flex justify-content-end">
                            <div class="payment-link">
                                <img src="<?= base_url('public')  ?>/assets/images/icons/payment.png" alt="payment">
                            
                            </div>
                        </div>
                    </div>
                    <!-- Footer payment -->
                </div>
            </div>
        </div>
    </div>
</footer>