<?= $this->extend('temp/tempHome')  ?>
<?= $this->section('content')  ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="text-center">
            <div class="section-title">
                <h2 class="ec-bg-title">İletişim</h2>
                <h2 class="ec-title">İletişim</h2>
                <p class="sub-title mb-3">Tradeikons İletişim Bilgileri</p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="ec-common-wrapper">
                <div class="ec-contact-leftside">
                    <div class="ec-contact-container">
                        <div class="ec-contact-form">
                            <form action="#" method="post">
                                <span class="ec-contact-wrap">
                                    <label>Adınız*</label>
                                    <input type="text" name="firstname" placeholder="Adınızı giriniz" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Soyadınız*</label>
                                    <input type="text" name="lastname" placeholder="Soyadınızı giriniz" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>E-posta*</label>
                                    <input type="email" name="email" placeholder="E-posta adresinizi giriniz" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Telefon Numarası*</label>
                                    <input type="text" name="phonenumber" placeholder="Teelfon numaranızı giriniz" required />
                                </span>
                                <span class="ec-contact-wrap">
                                    <label>Yorumlar / Sorular *</label>
                                    <textarea name="address" placeholder="Lütfen buraya yorumlarınızı bırakın.." required></textarea>
                                </span>
                                <span class="ec-contact-wrap ec-contact-btn">
                                    <button class="btn btn-primary" type="submit" id="sifresifirla" name="con_send" value="1">Gönder</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="ec-contact-rightside">
                    <div class="ec_contact_map">
                        <div class="ec_map_canvas">
                            <iframe id="ec_map_canvas" src="<?= $settings->iletisim_harita ?>"></iframe>
                        </div>
                    </div>
                    <div class="ec_contact_info">
                        <h1 class="ec_contact_info_head">İletişim</h1>
                        <ul class="align-items-center">
                            <li class="ec-contact-item"><i class="ecicon eci-map-marker" aria-hidden="true"></i><span>Adres :</span><?= $settings->iletisim_adres ?></li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-phone" aria-hidden="true"></i><span>Telefon :</span><a href="tel:<?= $settings->iletisim_telefon ?>"><?= $settings->iletisim_telefon ?></a></li>
                            <li class="ec-contact-item align-items-center"><i class="ecicon eci-envelope" aria-hidden="true"></i><span>E-posta :</span><a href="mailto:<?= $settings->iletisim_mail ?>"><?= $settings->iletisim_mail ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection()  ?>