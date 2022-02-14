<?= $this->extend('temp/tempHome')  ?>
<?= $this->section('script')  ?>
<script>
    $(document).ready(function() {
        $("#detay_getir").click(function() {
            document.getElementById('detay').style.display = '';
        });
    });
</script>
<?= $this->endSection()  ?>

<?= $this->section('content')  ?>
<div class="container">
    <div class="text-center">
        <div class="section-title">
            <h2 class="ec-bg-title">Sipariş Takip</h2>
            <h2 class="ec-title">Sipariş Takip</h2>
            <p class="sub-title mb-3">Satın aldığınız ürünlerin takibini kolaylıkla yapabilirsiniz</p>
            <form action="siparis_takip.php" method="GET" class="mt-5">
                <div class="form-group">
                    <input type="text" class="form-control w-50 m-auto" style="letter-spacing: 5px;" minlength="7" maxlength="10" name="q" required value="<?= isset($_GET["q"]) == 1 ? get("q") : null ?>" placeholder="Sipariş Takip Numarsını">
                    <input type="submit" class="btn btn-primary w-25 m-3" name="" id="sorgula" value="Sorgula">
                </div>
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET["q"])) {

        $like = get("q");
        $s_takip = array_filter($siparis_json_bilgileri, function ($deger) use ($like) {
            if ($deger['siparis_id'] == $like) {
                return true;
            }
            return false;
        });
        if (count($s_takip)) {
            $s_takip = reset($s_takip);
            if ($kayitli_kullanici_sorgu->kullanici_eposta == $s_takip["musteri_bilgileri"]["musteri_mail"]) {
    ?>
                <hr class="border">
                <!-- Ec Track Order section -->
                <section class="ec-page-content section-space-p">
                    <div class="container">
                        <!-- Track Order Content Start -->
                        <div class="ec-trackorder-content col-md-12">
                            <div class="ec-trackorder-inner">
                                <div class="ec-trackorder-top">
                                    <h2 class="ec-order-id">Sipariş #<?= $s_takip["siparis_id"] ?></h2>
                                    <div class="ec-order-detail">
                                        <div>Sipariş Tarihi <?= $s_takip["siparis_tarih"] ?></div>
                                        <div>Sipariş Durumu <span><?= $siparis_durum_sorgu[$s_takip["siparis_durum"]] ?></span></div>
                                    </div>
                                </div>
                                <div class="ec-trackorder-bottom">
                                    <div class="ec-progress-track">
                                        <ul id="ec-progressbar">
                                            <li class="step0 
                                            <?php
                                            if (
                                                $s_takip["siparis_durum"] == 0 ||
                                                $s_takip["siparis_durum"] == 1 ||
                                                $s_takip["siparis_durum"] == 2 ||
                                                $s_takip["siparis_durum"] == 3 ||
                                                $s_takip["siparis_durum"] == 4 ||
                                                $s_takip["siparis_durum"] == 5 ||
                                                $s_takip["siparis_durum"] == 6 ||
                                                $s_takip["siparis_durum"] == 7 ||
                                                $s_takip["siparis_durum"] == 8 ||
                                                $s_takip["siparis_durum"] == 9 ||
                                                $s_takip["siparis_durum"] == 10 ||
                                                $s_takip["siparis_durum"] == 11 ||
                                                $s_takip["siparis_durum"] == 12 ||
                                                $s_takip["siparis_durum"] == 13 ||
                                                $s_takip["siparis_durum"] == 14
                                            ) {
                                                echo "active";
                                            }
                                            ?>">
                                                <span class="ec-track-icon"> <img src="assets/images/icons/track_1.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Talep<br>Alındı</span>
                                            </li>
                                            <?php
                                            if ($s_takip["siparis_durum"] == 6) {
                                            ?>
                                                <li class="step0 active">
                                                    <span class="ec-track-icon"> <img src="assets/images/icons/track_2.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Sipariş İptal<br>Edildi</span>
                                                </li>
                                            <?php
                                            } else if (
                                                $s_takip["siparis_durum"] == 7 ||
                                                $s_takip["siparis_durum"] == 8 ||
                                                $s_takip["siparis_durum"] == 9
                                            ) {
                                            ?>
                                                <li class="step0 active">
                                                    <span class="ec-track-icon"> <img src="assets/images/icons/track_2.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">İade İşlemi<br>Yapılıyor</span>
                                                </li>
                                            <?php
                                            } else if (
                                                $s_takip["siparis_durum"] == 10 ||
                                                $s_takip["siparis_durum"] == 11 ||
                                                $s_takip["siparis_durum"] == 12 ||
                                                $s_takip["siparis_durum"] == 13
                                            ) {
                                            ?>
                                                <li class="step0 active">
                                                    <span class=" ec-track-icon"> <img src="assets/images/icons/track_2.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Değişim İşlemi<br>Yapılıyor</span>
                                                </li>
                                            <?php
                                            } else {
                                            ?>
                                                <li class="step0 
                                                <?php
                                                if (
                                                    $s_takip["siparis_durum"] == 2 ||
                                                    $s_takip["siparis_durum"] == 3 ||
                                                    $s_takip["siparis_durum"] == 4 ||
                                                    $s_takip["siparis_durum"] == 5 ||
                                                    $s_takip["siparis_durum"] == 14
                                                ) {
                                                    echo "active";
                                                }
                                                ?>">
                                                    <span class="ec-track-icon"> <img src="assets/images/icons/track_2.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Sipariş<br>Hazırlanıyor</span>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                            <li class="step0 
                                            <?php
                                            if (
                                                $s_takip["siparis_durum"] == 4 ||
                                                $s_takip["siparis_durum"] == 5 ||
                                                $s_takip["siparis_durum"] == 14
                                            ) {
                                                echo "active";
                                            }
                                            ?>">
                                                <span class="ec-track-icon"> <img src="assets/images/icons/track_3.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Sipariş<br>Yolda</span>
                                            </li>
                                            <li class="step0 
                                            <?php
                                            if (
                                                $s_takip["siparis_durum"] == 5 ||
                                                $s_takip["siparis_durum"] == 14
                                            ) {
                                                echo "active";
                                            }
                                            ?>">
                                                <span class="ec-track-icon"> <img src="assets/images/icons/track_4.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Sipariş<br>Teslim Edildi</span>
                                            </li>
                                            <li class="step0
                                            <?php
                                            if (
                                                $s_takip["siparis_durum"] == 14
                                            ) {
                                                echo "active";
                                            }
                                            ?>">
                                                <span class="ec-track-icon"> <img src="assets/images/icons/track_5.png" alt="track_order"></span><span class="ec-progressbar-track"></span><span class="ec-track-title">Sipariş<br>Tamamlandı</span>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a href="#detay" class="btn btn-primary" id="detay_getir">Detay getir</a>
                        </div>
                    </div>
                </section>
                <div class="container px-0" id="detay" style="display  : none;">
                    <div class="row mt-4">
                        <hr class="row brc-default-l1 mx-n1 mb-4" />
                        <h4 class="my-3">Sipariş Hareketleri</h4>
                        <div class="text-95 text-secondary-d3">
                            <div class="ec-vendor-card-table">
                                <table class="table ec-table text-center table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tarih</th>
                                            <th scope="col">Durum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($s_takip["siparis_hareketleri"] as $key => $value) {
                                            $hareket = explode("---", $value);
                                        ?>
                                            <tr>
                                                <th><span><?= $hareket[2] ?></span></th>
                                                <td><span><?= $hareket[1] ?></span></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            } else {
                hata("Sadece kendi siparişlerinizi sorgulayabilirsiniz");
            }
        } else {
            hata("Sipariş Bulunamadi");
        }
    }
    ?>
</div>

<?= $this->endSection()  ?>