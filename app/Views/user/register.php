<?= $this->extend('temp/tempHome')  ?>

<?= $this->section('script')  ?>
<script src="<?= base_url('public/assets/js/il_ilce.js')  ?>"></script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>
<section class="ec-page-content section-space-p">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="section-title">
                    <h2 class="ec-title">Kayıt Ol</h2>
                </div>
            </div>
            <div class="ec-register-wrapper">
                <div class="ec-register-container">
                    <div class="ec-register-form">
                        <form method="POST">
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                            <span class="ec-register-wrap ec-register-half">
                                <label>Ad <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['firstname']) ? $errors['firstname'] : null;  ?></small>
                                <input type="text" name="firstname" placeholder="Adınızı giriniz" value="<?= set_value('firstname')   ?>" required />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Soyad <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['lastname']) ? $errors['lastname'] : null;  ?></small>
                                <input type="text" name="lastname" placeholder="soyadınızı giriniz" value="<?= set_value('lastname')  ?>" required />
                           
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>E-posta Adresi <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['email']) ? $errors['email'] : null;  ?></small>
                                <input type="email" name="email" placeholder="e-posta adresinizi giriniz" value="<?= set_value('email')  ?>" required />
                           
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Telefon <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['phonenumber']) ? $errors['phonenumber'] : null;  ?></small>
                                <input type="text" name="phonenumber" placeholder="telefon numaranızı giriniz" value="<?= set_value('phonenumber')  ?>" required />

                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Şifre <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['password']) ? $errors['password'] : null;  ?></small>
                                <input type="password" name="password" placeholder="şifre giriniz" value="<?= set_value('password')  ?>" required />
                         
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Şifre Tekrar <span class="text-danger">*</span></label>
                                <small class="text-danger"><?= isset($errors['password-confirm']) ? $errors['password-confirm'] : null;  ?></small>
                                <input type="password" name="password-confirm" placeholder="şifrenizi tekrar giriniz" value="<?= set_value('password-confirm')  ?>" required />
            
                            </span>
                            <span class="ec-register-wrap">
                                <label>Adres</label>
                                <input type="text" name="address" placeholder="Adresinizi giriniz" value="<?= set_value('address')  ?>" />
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>İl </label>
                                <span class="ec-rg-select-inner">
                                    <select name="ec_select_city" id="Iller" class="ec-register-select" value="<?= set_value('ec_select_city')  ?>">
                                        <option value="0">Lütfen Bir İl Seçiniz</option>
                                    </select>
                                </span>
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>İlçe</label>
                                <span class="ec-rg-select-inner">
                                    <select name="ec_select_country" id="Ilceler" disabled="disabled" class="ec-register-select" value="<?= set_value('ec_select_country')  ?>">
                                        <option value="0">Lütfen Önce bir İl seçiniz</option>
                                    </select>
                 
                                </span>
                            </span>
                            <span class="ec-register-wrap ec-register-half">
                                <label>Posta Kodu</label>
                                <input type="text" name="postalcode" placeholder="Post Code" value="<?= set_value('postalcode')  ?>" />
                            </span>
                            <span class="ec-register-wrap ec-register-btn">
                                <button class="btn btn-primary " type="submit" id="register">Kayıt Ol</button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection()  ?>