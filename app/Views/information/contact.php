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
        <div class="row d-flex justify-content-around">
            <div class="col-md-4">
                <form action="#" method="post">
                    <div class="form-group">
                        <label class="mt-3" for="firstname">Adınız <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Adınızı giriniz" required>
                    </div>
                    <div class="form-group">
                        <label class="mt-3" for="lastname">Soyadınız <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Soyadınızı giriniz" required>
                    </div>
                    <div class="form-group">
                        <label class="mt-3" for="email">E-posta <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-posta adresinizi giriniz" required>
                    </div>
                    <div class="form-group">
                        <label class="mt-3" for="phonenumber">Telefon Numarası <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="phonenumber" id="phonenumber" placeholder="Teelfon numaranızı giriniz" required>
                    </div>
                    <div class="form-group">
                        <label class="mt-3" for="address">Yorumlar / Sorular <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="address" id="address" placeholder="Lütfen buraya yorumlarınızı bırakın.." required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary mt-3 w-50" id="sifresifirla" name="con_send" value="Gönder">
                    </div>
                </form>
            </div>
            <div class="col-md-7">
                <iframe class="w-100 h-75" src="<?= $settings->iletisim_harita ?>"></iframe>
                <ul class="mt-4">
                    <li class="ec-contact-item"><b><i class="ecicon eci-map-marker" aria-hidden="true"></i><span> Adres : </span></b> <?= $settings->iletisim_adres ?></li>
                    <li class="ec-contact-item"><b><i class="ecicon eci-phone" aria-hidden="true"></i><span> Telefon : </span></b> <a href="tel:<?= $settings->iletisim_telefon ?>"><?= $settings->iletisim_telefon ?></a></li>
                    <li class="ec-contact-item"><b><i class="ecicon eci-envelope" aria-hidden="true"></i><span> E-posta : </span></b><a href="mailto:<?= $settings->iletisim_mail ?>"><?= $settings->iletisim_mail ?></a></li>
                </ul>
            </div>
        </div>
        <div class="row d-flex justify-content-around">
        </div>
    </div>
</section>
<?= $this->endSection()  ?>

