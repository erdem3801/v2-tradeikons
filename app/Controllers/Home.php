<?php

namespace App\Controllers;

use App\Models\CategoriesModel;
use App\Models\SettingsModel;

class Home extends BaseController
{
 
    private $viewData;

    public function __construct()
    {
       $this->viewData = $this->getDefaults();
    }
    public function index()
    {
        $this->viewData['a'] =   [

            [
                "href" => "index.php?id1=7&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/otomobil.webp",
                "alt" => "Otomobil & Motosiklet"
            ],
            [
                "href" => "index.php?id1=6&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/spor_malzemeleri.webp",
                "alt" => "Spor Malzemeleri"
            ],
            [
                "href" => "index.php?id1=2&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_bakim.webp",
                "alt" => "Kişisel Bakım"
            ],
            [
                "href" => "index.php?id1=4&id2=7&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/bilgisayar.webp",
                "alt" => "Bilgisayar"
            ],
            [
                "href" => "index.php?id1=7&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/dekor.webp",
                "alt" => "Ev Dekorasyon"
            ],
            [
                "href" => "index.php?id1=9&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_urun.webp",
                "alt" => "Erkek Ayakkabı"
            ],
            [
                "href" => "index.php?id1=5&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/genel_bakim.webp",
                "alt" => "Genel Bakım"
            ],
            [
                "href" => "index.php?id1=6&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/fitness_kondisyon.webp",
                "alt" => "Fitness Kondisyon"
            ],
            [
                "href" => "index.php?id1=2&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_spor.webp",
                "alt" => "Spor&Outdoor"
            ],
            [
                "href" => "index.php?id1=1&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/spor.webp",
                "alt" => "Spor&Outdoor"
            ],
            [
                "href" => "index.php?id1=3&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_cocuk.webp",
                "alt" => "Erkek Çocuk"
            ],
            [
                "href" => "index.php?id1=10&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/parti_malzemeleri.webp",
                "alt" => "Parti Ürünleri"
            ],
            [
                "href" => "index.php?id1=5&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/makyaj_malzemeleri.webp",
                "alt" => "Makyaj Malzemeleri"
            ],
            [
                "href" => "index.php?id1=9&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/cocuk_ayakkabi.webp",
                "alt" => "Çocuk Ayakkabı"
            ],
            [
                "href" => "index.php?id1=4&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/fotograf_makinesi.webp",
                "alt" => "Foto&Kamera"
            ],
            [
                "href" => "index.php?id1=2&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_giyim.webp",
                "alt" => "Giyim"
            ],
            [
                "href" => "index.php?id1=4&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/tv_ses.webp",
                "alt" => "TV&Görüntü&Ses"
            ],
            [
                "href" => "index.php?id1=9&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/cocuk_canta.webp",
                "alt" => "Çocuk Çanta"
            ],
            [
                "href" => "index.php?id1=9&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kadin_canta.webp",
                "alt" => "Kadın Çanta"
            ],
            [
                "href" => "index.php?id1=4&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/bakim_aleti.webp",
                "alt" => "Kişisel Bakım Aletleri"
            ],
            [
                "href" => "index.php?id1=8&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kedi.webp",
                "alt" => "Kedi"
            ],
            [
                "href" => "index.php?id1=1&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/giyim.webp",
                "alt" => "Giyim"
            ],
            [
                "href" => "index.php?id1=10&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/oyun_gruplari.webp",
                "alt" => "Oyun grupları"
            ],
            [
                "href" => "index.php?id1=1&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/canta.webp",
                "alt" => "Çanta"
            ],
            [
                "href" => "index.php?id1=5&id2=7&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/medikal_ürünleri.webp",
                "alt" => "Medikal"
            ],
            [
                "href" => "index.php?id1=10&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/hediyelik_urunler.webp",
                "alt" => "Hediyelik Ürünler"
            ],
            [
                "href" => "index.php?id1=7&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/ev_gerecleri.webp",
                "alt" => "Ev Gereçleri"
            ],
            [
                "href" => "index.php?id1=3&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/oyuncak.webp",
                "alt" => "Oyuncak"
            ],
            [
                "href" => "index.php?id1=6&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/avcilik.webp",
                "alt" => "Avcılık&Balıkçılık"
            ],
            [
                "href" => "index.php?id1=6&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kamp.webp",
                "alt" => "Kamp&Kampçılık"
            ],
            [
                "href" => "index.php?id1=1&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/ic_giyim.webp",
                "alt" => "İç Giyim"
            ],
            [
                "href" => "index.php?id1=4&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/giyilebilir.webp",
                "alt" => "Giyilebilir Teknoloji"
            ],
            [
                "href" => "index.php?id1=7&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/yapi_market.webp",
                "alt" => "Bahçe & Yapı Market"
            ],
            [
                "href" => "index.php?id1=6&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/spor_ayakkabi.webp",
                "alt" => "Spor Ayakkabı"
            ],
            [
                "href" => "index.php?id1=2&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_ayakkabi.webp",
                "alt" => "Ayakkabı"
            ],
            [
                "href" => "index.php?id1=9&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kadin_ayakkabi.webp",
                "alt" => "Kadın Ayakkabı"
            ],
            [
                "href" => "index.php?id1=1&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/ayakkabi.webp",
                "alt" => "Ayakkabı"
            ],
            [
                "href" => "index.php?id1=3&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/bebek.webp",
                "alt" => "Bebek"
            ],
            [
                "href" => "index.php?id1=6&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/spor_giyim.webp",
                "alt" => "Spor Giyim"
            ],
            [
                "href" => "index.php?id1=2&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_ic_giyim.webp",
                "alt" => "İç Giyim"
            ],
            [
                "href" => "index.php?id1=3&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kiz_cocuk.webp",
                "alt" => "Kız Çocuk"
            ],
            [
                "href" => "index.php?id1=10&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/takilar.webp",
                "alt" => "Takı"
            ],
            [
                "href" => "index.php?id1=5&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/epilasyon.webp",
                "alt" => "Epilasyon&Tıraş"
            ],
            [
                "href" => "index.php?id1=5&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/sac_bakim.webp",
                "alt" => "Saç Bakım"
            ],
            [
                "href" => "index.php?id1=1&id2=5&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kisisel_bakim.webp",
                "alt" => "Kişisel Bakım&Kozmetik"
            ],
            [
                "href" => "index.php?id1=7&id2=2&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/sofra_mutfak.webp",
                "alt" => "Sofra&Mutfak"
            ],
            [
                "href" => "index.php?id1=4&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/telefon_aksesuarları.webp",
                "alt" => "Telefon Aksesuarları"
            ],
            [
                "href" => "index.php?id1=10&id2=3&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/hobi_malzemeleri.webp",
                "alt" => "Hobi Malzemeleri"
            ],
            [
                "href" => "index.php?id1=8&id2=1&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kopek.webp",
                "alt" => "Köpek"
            ],
            [
                "href" => "index.php?id1=2&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_cuzdan.webp",
                "alt" => "Aksesuar"
            ],
            [
                "href" => "index.php?id1=10&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/tutun_aksesuarlari.webp",
                "alt" => "Tütün&Tütün aksesuarları"
            ],
            [
                "href" => "index.php?id1=7&id2=6&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/kirtasiye.webp",
                "alt" => "Kırtasiye Ürünleri"
            ],
            [
                "href" => "index.php?id1=5&id2=4&id3=0",
                "src" => base_url('public') . "/assets/images/menu-banner/cilt_bakimm.webp",
                "alt" => "Cilt Bakım"
            ]
        ];

        $this->viewData['carousel'] = array(
            [
                'href' => 'index.php?id1=1&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/kadin.webp",
                'alt' => 'kadin',
                'id' => 'kadinbanner',
                'previous' => '#kadinbanner',
                'next' => '#kadinbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => "index.php?detay=1380",
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/berg-kluane-kadin-yarim-fermuar-polar-lacivert-11436.jpg"
                    ],
                    [
                        "urun_adi" => "Topuklu Ayakkabı",
                        "urun_url" => "index.php?detay=2419",
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/foz-bej-kadin-12-cm-dolgu-topuklu-ayak-879d-4.webp"
                    ],
                    [
                        "urun_adi" => "Deri Cüzdan",
                        "urun_url" => "index.php?detay=3540",
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/delacour-0516-siyah-hakiki-deri-erkek---9b48-.webp"
                    ]
                ]
            ],
            [
                'href' => 'index.php?id1=2&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/erkek.webp",
                'alt' => 'erkek',
                'id' => 'erkekbanner',
                'previous' => '#erkekbanner',
                'next' => '#erkekbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => "index.php?detay=790",
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-breaktrail-erkek-polar-kirmizi-10947.jpg"
                    ],
                    [
                        "urun_adi" => "Yağmurluk",
                        "urun_url" => "index.php?detay=2480",
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/freecamp-uzun-yagmurluk-seffaf-11924.jpg"
                    ],
                    [
                        "urun_adi" => "Ayakkabı",
                        "urun_url" => "index.php?detay=3531",
                        "urun_gorsel_url" => "https://www.ozpa.com/Uploads/UrunResimleri/buyuk/foz-0968-siyah-soguk-ve-suya-dayanikli-4f58-a.jpg"
                    ]
                ]
            ],
            [
                'href' => 'index.php?id1=3&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/cocuk.webp",
                'alt' => 'cocuk',
                'id' => 'cocukbanner',
                'previous' => '#cocukbanner',
                'next' => '#cocukbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => "index.php?detay=739",
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-fluffy-puddle-cocuk-tulumu-lila-10802.jpg"
                    ],
                    [
                        "urun_adi" => "Kar Botu",
                        "urun_url" => "index.php?detay=1640",
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/7728629-dare-2b-kardrona-kadin-kar-botu-bej-11632.webp"
                    ],
                    [
                        "urun_adi" => "Spor Ayakkabı",
                        "urun_url" => "index.php?detay=2657",
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/foz-055-siyah-gunluk-erkek-spor-ayakka--8cca5.webp"
                    ]
                ]
            ],
            [
                'href' => 'index.php?id1=4&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/elektronik.webp",
                'alt' => 'elektronik',
                'id' => 'elektronikbanner',
                'previous' => '#elektronikbanner',
                'next' => '#elektronikbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Akıllı Saat",
                        "urun_url" => "index.php?detay=15862",
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70656667/king-st1s-1.jpg"
                    ],
                    [
                        "urun_adi" => "Gramafon",
                        "urun_url" => "index.php?detay=12833",
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/his/image/catalog/radyolar/705/001.jpg"
                    ],
                    [
                        "urun_adi" => "Fön Makinesi",
                        "urun_url" => "index.php?detay=12566",
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/his/image/catalog/sac-kurutma/5600/3.jpg"
                    ]
                ]
            ],
            [
                'href' => 'index.php?id1=5&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/kozmetik.webp",
                'alt' => 'kozmetik',
                'id' => 'kozmetikbanner',
                'previous' => '#kozmetikbanner',
                'next' => '#kozmetikbanner',
                'urunler' => [
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
                ]
            ],
            [
                'href' => 'index.php?id1=7&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/evyasam.webp",
                'alt' => 'evyasam',
                'id' => 'evyasambanner',
                'previous' => '#evyasambanner',
                'next' => '#evyasambanner',
                'urunler' => [
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
                ]
            ],
            [
                'href' => 'index.php?id1=6&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/outdoor.webp",
                'alt' => 'outdoor',
                'id' => 'outdoorbanner',
                'previous' => '#outdoorbanner',
                'next' => '#outdoorbanner',
                'urunler' => [
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
                ]
            ],
            [
                'href' => 'index.php?id1=6&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/petshop.webp",
                'alt' => 'petshop',
                'id' => 'petshopbanner',
                'previous' => '#petshopbanner',
                'next' => '#petshopbanner',
                'urunler' => [
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
                ]
            ],
            [
                'href' => 'index.php?id1=6&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/ayakkabi.webp",
                'alt' => 'ayakkabi',
                'id' => 'ayakkabibanner',
                'previous' => '#ayakkabibanner',
                'next' => '#ayakkabibanner',
                'urunler' => [
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
                ]
            ],
            [
                'href' => 'index.php?id1=6&id2=0&id3=1',
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/hobi.webp",
                'alt' => 'hobi',
                'id' => 'hobibanner',
                'previous' => '#hobibanner',
                'next' => '#hobibanner',
                'urunler' => [
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
                ]
            ],
        );

        return view('home/homeView', $this->viewData);
    }
}
