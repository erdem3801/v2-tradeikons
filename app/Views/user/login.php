<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('script')  ?>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>

<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-bg-title">Giriş Yap</h2>
                    <h2 class="ec-title">Giriş Yap</h2>
                    <?php if (isset($errors['password'])) :  ?>
                        <div class="w-50 mt-5 text-center m-auto alert alert-danger"> <?= $errors['password']  ?></div>
                    <?php endif  ?>
                </div>
            </div>

            <div class="ec-login-wrapper">
                <div class="ec-login-container">
                    <div class="ec-login-form">
                        <form method="post">
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                            <span class="ec-login-wrap">
                                <label>E-posta adresi <span class="text-danger">*</span></label>
                                <input type="email" name="email" placeholder="E-posta adresini giriniz" value="<?= set_value('email')  ?>" required />
                            </span>
                            <span class="ec-login-wrap">
                                <label>Şifre <span class="text-danger">*</span></label>
                                <input type="password" name="password" value="<?= set_value('password')  ?>" placeholder="Şifrenizi giriniz" />
                            </span>
                            <span class="ec-login-wrap ec-login-fp">
                                <label><a href="uye_giris.php?i=sifremiunttum">Şifremi unuttum</a></label>
                            </span>
                            <span class="ec-login-wrap ec-login-btn">
                                <button class="btn btn-primary" type="submit" name="login" value="1" id="login">Giriş Yap</button>
                                <a href="<?= base_url('kayit-ol')  ?>" class="btn btn-secondary" id="register">Kayit Ol</a>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection()  ?>