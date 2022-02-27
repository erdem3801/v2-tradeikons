<?php

namespace App\Controllers;
 

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
                "href" => base_url('evyasam/otomobil-motosiklet/oto-aksesuar'),
                "src" => base_url('public') . "/assets/images/menu-banner/otomobil.webp",
                "alt" => "Otomobil & Motosiklet"
            ],
            [
                "href" => base_url('sporoutdoor-2/spor-malzemeleri/kayak-malzemeleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/spor_malzemeleri.webp",
                "alt" => "Spor Malzemeleri"
            ],
            [
                "href" => base_url('erkek/kisisel-bakim/cilt-bakim-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_bakim.webp",
                "alt" => "Kişisel Bakım"
            ],
            [
                "href" => base_url('elektronik/bilgisayar/tablet-dijital-cerceve'),
                "src" => base_url('public') . "/assets/images/menu-banner/bilgisayar.webp",
                "alt" => "Bilgisayar"
            ],
            [
                "href" => base_url('evyasam/ev-dekorasyon'),
                "src" => base_url('public') . "/assets/images/menu-banner/dekor.webp",
                "alt" => "Ev Dekorasyon"
            ],
            [
                "href" => base_url('erkek/ayakkabi-1/guenluek-ayakkabi-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_urun.webp",
                "alt" => "Erkek Ayakkabı"
            ],
            [
                "href" => base_url('kozmetik/genel-bakim'),
                "src" => base_url('public') . "/assets/images/menu-banner/genel_bakim.webp",
                "alt" => "Genel Bakım"
            ],
            [
                "href" => base_url('sporoutdoor-2/fitness-kondisyon/barfiks'),
                "src" => base_url('public') . "/assets/images/menu-banner/fitness_kondisyon.webp",
                "alt" => "Fitness Kondisyon"
            ],
            [
                "href" => base_url('sporoutdoor-2/fitness-kondisyon/fitness-aletleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_spor.webp",
                "alt" => "Spor&Outdoor"
            ],
            [
                "href" =>base_url('sporoutdoor-2/fitness-kondisyon/yoga-malzemeleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/spor.webp",
                "alt" => "Spor&Outdoor"
            ],
            [
                "href" => base_url('cocuk/erkek-cocuk/ayakkabi-3'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_cocuk.webp",
                "alt" => "Erkek Çocuk"
            ],
            [
                "href" => base_url('hobi-hediyelik/parti-ueruenleri/parti-malzemeleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/parti_malzemeleri.webp",
                "alt" => "Parti Ürünleri"
            ],
            [
                "href" => base_url('kozmetik/makyaj-malzemeleri/ten-makyaji'),
                "src" => base_url('public') . "/assets/images/menu-banner/makyaj_malzemeleri.webp",
                "alt" => "Makyaj Malzemeleri"
            ],
            [
                "href" => base_url('cocuk/erkek-cocuk/ayakkabi-3'),
                "src" => base_url('public') . "/assets/images/menu-banner/cocuk_ayakkabi.webp",
                "alt" => "Çocuk Ayakkabı"
            ],
            [
                "href" => base_url('elektronik/fotokamera'),
                "src" => base_url('public') . "/assets/images/menu-banner/fotograf_makinesi.webp",
                "alt" => "Foto&Kamera"
            ],
            [
                "href" => base_url('erkek/giyim-1/t-shirtsweat'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_giyim.webp",
                "alt" => "Giyim"
            ],
            [
                "href" => base_url('elektronik/tvgoeruentueses/hoparloerkulaklik'),
                "src" => base_url('public') . "/assets/images/menu-banner/tv_ses.webp",
                "alt" => "TV&Görüntü&Ses"
            ],
            [
                "href" => base_url('ayakkabicanta-1/cocuk-canta'),
                "src" => base_url('public') . "/assets/images/menu-banner/cocuk_canta.webp",
                "alt" => "Çocuk Çanta"
            ],
            [
                "href" => base_url('ayakkabicanta-1/kadin-canta'),
                "src" => base_url('public') . "/assets/images/menu-banner/kadin_canta.webp",
                "alt" => "Kadın Çanta"
            ],
            [
                "href" => base_url('elektronik/kisisel-bakim-aletleri/epilasyon-aleti'),
                "src" => base_url('public') . "/assets/images/menu-banner/bakim_aleti.webp",
                "alt" => "Kişisel Bakım Aletleri"
            ],
            [
                "href" =>base_url('petshop/kedi/kedi-mama-kaplari'),
                "src" => base_url('public') . "/assets/images/menu-banner/kedi.webp",
                "alt" => "Kedi"
            ],
            [
                "href" => base_url('kadin/giyim/t-shirt-bluz-sweat'),
                "src" => base_url('public') . "/assets/images/menu-banner/giyim.webp",
                "alt" => "Giyim"
            ],
            [
                "href" => base_url('hobi-hediyelik/oyun-gruplari/diger-oyuncaklar'),
                "src" => base_url('public') . "/assets/images/menu-banner/oyun_gruplari.webp",
                "alt" => "Oyun grupları"
            ],
            [
                "href" => base_url('kadin/canta'),
                "src" => base_url('public') . "/assets/images/menu-banner/canta.webp",
                "alt" => "Çanta"
            ],
            [
                "href" => base_url('kozmetik/medikal/medikal-ueruenleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/medikal_ürünleri.webp",
                "alt" => "Medikal"
            ],
            [
                "href" => base_url('hobi-hediyelik/hediyelik-ueruenler/kar-kueresimuezik-kutusu'),
                "src" => base_url('public') . "/assets/images/menu-banner/hediyelik_urunler.webp",
                "alt" => "Hediyelik Ürünler"
            ],
            [
                "href" => base_url('evyasam/ev-gerecleri/ev-mutfak-gerecleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/ev_gerecleri.webp",
                "alt" => "Ev Gereçleri"
            ],
            [
                "href" => base_url('cocuk/oyuncak/oyuncaklar'),
                "src" => base_url('public') . "/assets/images/menu-banner/oyuncak.webp",
                "alt" => "Oyuncak"
            ],
            [
                "href" => base_url('sporoutdoor-2/avcilikbalikcilik/olta-makineleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/avcilik.webp",
                "alt" => "Avcılık&Balıkçılık"
            ],
            [
                "href" => base_url('sporoutdoor-2/kampkampcilik/kamp-malzemeleri'),
                "src" => base_url('public') . "/assets/images/menu-banner/kamp.webp",
                "alt" => "Kamp&Kampçılık"
            ],
            [
                "href" => base_url('kadin/ic-giyim-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/ic_giyim.webp",
                "alt" => "İç Giyim"
            ],
            [
                "href" => base_url('elektronik/giyilebilir-teknoloji'),
                "src" => base_url('public') . "/assets/images/menu-banner/giyilebilir.webp",
                "alt" => "Giyilebilir Teknoloji"
            ],
            [
                "href" => base_url('evyasam/bahce-yapi-market/elektrikli-el-aleti'),
                "src" => base_url('public') . "/assets/images/menu-banner/yapi_market.webp",
                "alt" => "Bahçe & Yapı Market"
            ],
            [
                "href" => base_url('erkek/ayakkabi-1/spor-ayakkabi-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/spor_ayakkabi.webp",
                "alt" => "Spor Ayakkabı"
            ],
            [
                "href" => base_url('erkek/ayakkabi-1/guenluek-ayakkabi-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_ayakkabi.webp",
                "alt" => "Ayakkabı"
            ],
            [
                "href" => base_url('kadin/ayakkabi/guenluek-ayakkabi'),
                "src" => base_url('public') . "/assets/images/menu-banner/kadin_ayakkabi.webp",
                "alt" => "Kadın Ayakkabı"
            ],
            [
                "href" => base_url('kadin/ayakkabi/spor-ayakkabi'),
                "src" => base_url('public') . "/assets/images/menu-banner/ayakkabi.webp",
                "alt" => "Ayakkabı"
            ],
            [
                "href" => base_url('cocuk/bebek'),
                "src" => base_url('public') . "/assets/images/menu-banner/bebek.webp",
                "alt" => "Bebek"
            ],
            [
                "href" => base_url('erkek/ayakkabi-1/spor-ayakkabi-1'),
                "src" => base_url('public') . "/assets/images/menu-banner/spor_giyim.webp",
                "alt" => "Spor Giyim"
            ],
            [
                "href" => base_url('kadin/ic-giyim-1/suetyen'),
                "src" => base_url('public') . "/assets/images/menu-banner/erkek_ic_giyim.webp",
                "alt" => "İç Giyim"
            ],
            [
                "href" => base_url('cocuk/kiz-cocuk/ic-giyimpijama'),
                "src" => base_url('public') . "/assets/images/menu-banner/kiz_cocuk.webp",
                "alt" => "Kız Çocuk"
            ],
            [
                "href" => base_url('hobi-hediyelik/taki/kolye'),
                "src" => base_url('public') . "/assets/images/menu-banner/takilar.webp",
                "alt" => "Takı"
            ],
            [
                "href" => base_url('kozmetik/epilasyontiras/epilatoer'),
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
                'href' => base_url("kadin/giyim"),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/kadin.webp",
                'alt' => 'kadin',
                'id' => 'kadinbanner',
                'previous' => '#kadinbanner',
                'next' => '#kadinbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => base_url('berg-kluane-kadin-yarim-fermuar-polar-lacivert-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/berg-kluane-kadin-yarim-fermuar-polar-lacivert-11436.jpg"
                    ],
                    [
                        "urun_adi" => "Topuklu Ayakkabı",
                        "urun_url" => base_url('foez-bej-kadin-12-cm-dolgu-topuklu-ayakkabi-d99-1'),
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/foz-bej-kadin-12-cm-dolgu-topuklu-ayak-879d-4.webp"
                    ],
                    [
                        "urun_adi" => "Deri Cüzdan",
                        "urun_url" => base_url('delacour-0516-siyah-hakiki-deri-erkek-kartlik-cuezdan'),
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/delacour-0516-siyah-hakiki-deri-erkek---9b48-.webp"
                    ]
                ]
            ],
            [
                'href' => base_url('erkek/ayakkabi-1/spor-ayakkabi-1'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/erkek.webp",
                'alt' => 'erkek',
                'id' => 'erkekbanner',
                'previous' => '#erkekbanner',
                'next' => '#erkekbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => base_url('regatta-breaktrail-erkek-polar-kirmizi-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-breaktrail-erkek-polar-kirmizi-10947.jpg"
                    ],
                    [
                        "urun_adi" => "Yağmurluk",
                        "urun_url" => base_url('foez-siyah-sueet-fiyonklu-platform-topuklu-ayakkabi-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/freecamp-uzun-yagmurluk-seffaf-11924.jpg"
                    ],
                    [
                        "urun_adi" => "Ayakkabı",
                        "urun_url" => base_url('rova-blue-0438-siyah-unisex-hakiki-deri-fermuarli-uzun-cuezdan'),
                        "urun_gorsel_url" => "https://www.ozpa.com/Uploads/UrunResimleri/buyuk/foz-0968-siyah-soguk-ve-suya-dayanikli-4f58-a.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('cocuk/bebek/bebek-aksesuarlari'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/cocuk.webp",
                'alt' => 'cocuk',
                'id' => 'cocukbanner',
                'previous' => '#cocukbanner',
                'next' => '#cocukbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Polar",
                        "urun_url" => base_url('regatta-fluffy-puddle-cocuk-tulumu-lila-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-fluffy-puddle-cocuk-tulumu-lila-10802.jpg"
                    ],
                    [
                        "urun_adi" => "Kar Botu",
                        "urun_url" => base_url('dare-2b-kardrona-kadin-kar-botu-bej-1'),
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/7728629-dare-2b-kardrona-kadin-kar-botu-bej-11632.webp"
                    ],
                    [
                        "urun_adi" => "Spor Ayakkabı",
                        "urun_url" => base_url('foez-055-siyah-guenluek-erkek-spor-ayakkabi-1'),
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/foz-055-siyah-gunluk-erkek-spor-ayakka--8cca5.webp"
                    ]
                ]
            ],
            [
                'href' => base_url('elektronik/giyilebilir-teknoloji'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/elektronik.webp",
                'alt' => 'elektronik',
                'id' => 'elektronikbanner',
                'previous' => '#elektronikbanner',
                'next' => '#elektronikbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Akıllı Saat",
                        "urun_url" => base_url('smart-watch-st1-dokunmatik-ip68-su-gecirmez-mavi'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70656667/king-st1s-1.jpg"
                    ],
                    [
                        "urun_adi" => "Gramafon",
                        "urun_url" => base_url('everton-rt-705bt-usbsdfmbluetooth-destekli-nostaljik-gramafon-model-radyo'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/his/image/catalog/radyolar/705/001.jpg"
                    ],
                    [
                        "urun_adi" => "Fön Makinesi",
                        "urun_url" => base_url('dearling-5600-profesyonel-ac-motor-sac-kurutma-foen-makinesi'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/his/image/catalog/sac-kurutma/5600/3.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('kozmetik/makyaj-malzemeleri/goez-makyaji'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/kozmetik.webp",
                'alt' => 'kozmetik',
                'id' => 'kozmetikbanner',
                'previous' => '#kozmetikbanner',
                'next' => '#kozmetikbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Dermaroller",
                        "urun_url" => base_url('dermaroller-gold-540-titanyum-igneli-1mm'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70650985/a390-1.jpg"
                    ],
                    [
                        "urun_adi" => "Fırça",
                        "urun_url" => base_url('dogal-at-kili-firca'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/catalog-ilktoptan-tmp-frc-jpg-1.jpg"
                    ],
                    [
                        "urun_adi" => "Bakım Aleti",
                        "urun_url" => base_url('yeni-nesil-yuez-masaj-ve-bakim-aleti-kablosuz-sarj-oezelligi'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70652101/med-00548y-1.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('evyasam/ev-dekorasyon'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/evyasam.webp",
                'alt' => 'evyasam',
                'id' => 'evyasambanner',
                'previous' => '#evyasambanner',
                'next' => '#evyasambanner',
                'urunler' => [
                    [
                        "urun_adi" => "Gece Lambası",
                        "urun_url" => base_url('renk-degistiren-usb-sarjli-3d-satuern-gece-lambasi'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/catalog-ilktoptan-tmp-lmb-jpg-1.jpg"
                    ],
                    [
                        "urun_adi" => "Termos",
                        "urun_url" => base_url('1-lt-beyaz-ici-cam-termos'),
                        "urun_gorsel_url" => "http://www.ewsyonetim.com/product-images-resized/2370_1.jpg"
                    ],
                    [
                        "urun_adi" => "El Feneri",
                        "urun_url" => base_url('blackwatton-wt-037-sarjli-zoomlu-acil-durum-feneri'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/image/catalog/watton/wt-037/blackwatton-wt-037-sarjli-zoomlu-acil-durum-feneri-wt-037.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('sporoutdoor-2/spor-giyim'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/outdoor.webp",
                'alt' => 'outdoor',
                'id' => 'outdoorbanner',
                'previous' => '#outdoorbanner',
                'next' => '#outdoorbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Kar Botu",
                        "urun_url" => base_url('dare-2b-kardrona-kadin-kar-botu-beyaz-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/dare-2b-kardrona-kadin-kar-botu-beyaz-11634.jpg"
                    ],
                    [
                        "urun_adi" => "T-Shirt",
                        "urun_url" => base_url('regatta-elixir-erkek-t-shirt-mavi-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/regatta-elixir-erkek-t-shirt-mavi-10878.jpg"
                    ],
                    [
                        "urun_adi" => "Şişme Yatak",
                        "urun_url" => base_url('bestway-67000n-tek-kisilik-sisme-yatak-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/bestway-67000n-tek-kisilik-sisme-yatak-1004.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('petshop/kedi/kedi-mama-kaplari'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/petshop.webp",
                'alt' => 'petshop',
                'id' => 'petshopbanner',
                'previous' => '#petshopbanner',
                'next' => '#petshopbanner',
                'urunler' => [
                    [
                        "urun_adi" => "Tasma",
                        "urun_url" => base_url('makarali-otomatik-koepek-tasmasi-5-metre-4-renk-1'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/cm/image/content/images/product/makarali-otomatik-kopek-tasmasi-5-metre-4-renk.jpg"
                    ],
                    [
                        "urun_adi" => "Tırnak Makası",
                        "urun_url" => base_url('evcil-hayvan-tirnak-makasi-yeni-model-1'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/cm/productimages/20.12/evcil-hayvan-tirnak-makasi-yeni-model.jpg"
                    ],
                    [
                        "urun_adi" => "Tarak",
                        "urun_url" => base_url('kedi-amp-koepek-i̇cin-tuey-alici-temizlik-taragi-basmali-10-cm'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/akt/pttrk-jpg-1.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('ayakkabicanta-1/kadin-ayakkabi'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/ayakkabi.webp",
                'alt' => 'ayakkabi',
                'id' => 'ayakkabibanner',
                'previous' => '#ayakkabibanner',
                'next' => '#ayakkabibanner',
                'urunler' => [
                    [
                        "urun_adi" => "Kadın Bot",
                        "urun_url" => base_url('rita-vizon-guenluek-kadin-bot-ayakkabi-1'),
                        "urun_gorsel_url" => "https://www.pazarfin.com/pazarfin/urunler/resimler/rita-vizon-gunluk-kadin-bot-ayakkabi-a-3fbc.webp"
                    ],
                    [
                        "urun_adi" => "Erkek Ayakkabı",
                        "urun_url" => base_url('berg-potoroo-erkek-ayakkabi-turuncu-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/berg-potoroo-erkek-ayakkabi-turuncu-11336.jpg"
                    ],
                    [
                        "urun_adi" => "Bakım Çantası",
                        "urun_url" => base_url('freecamp-bebek-bakim-cantasi-lacivert-1'),
                        "urun_gorsel_url" => "http://cdn1.xmlbankasi.com/p1/anddtm3/image/data/resimler/freecamp-bebek-bakim-cantasi-lacivert-11961.jpg"
                    ]
                ]
            ],
            [
                'href' => base_url('hobi-hediyelik/parti-ueruenleri/dogum-guenue'),
                'src' => base_url('public') . "/assets/images/menu-banner/anasayfa/hobi.webp",
                'alt' => 'hobi',
                'id' => 'hobibanner',
                'previous' => '#hobibanner',
                'next' => '#hobibanner',
                'urunler' => [
                    [
                        "urun_adi" => "Kolye",
                        "urun_url" => base_url('harry-kolye'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/KLC/kolye3.jpg"
                    ],
                    [
                        "urun_adi" => "Biblo",
                        "urun_url" => base_url('dekoratif-cift-biblosu'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70655288/tdnc-113-1.jpg"
                    ],
                    [
                        "urun_adi" => "Doktor Biblo",
                        "urun_url" => base_url('meslek-doktor-biblo'),
                        "urun_gorsel_url" => "https://www.toptangidiyor.com/image/catalog/toptang/70655467/tdnk-646-1.png"
                    ]
                ]
            ],
        );

        return view('home/homeView', $this->viewData);
    }
}
