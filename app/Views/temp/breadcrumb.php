<div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row ec_breadcrumb_inner">
                    <div class="col-md-6 col-sm-12">
                        <h2 class="ec-breadcrumb-title"><?= $baslik[count($baslik) - 1]['title'] ?></h2>

                    </div>
                    <div class="col-md-6 col-sm-12">
                        <!-- ec-breadcrumb-list start -->
                        <ul class="ec-breadcrumb-list">
                            <li class="ec-breadcrumb-item"><a href="<?php base_url()  ?>">Ana Sayfa</a></li>
                            
                            <?php foreach ($baslik as $key => $value) : ?>
                                <li class="ec-breadcrumb-item <?= (count($baslik)-1) == $key ? 'active' : '' ?>"><a href="<?= base_url($value['url'])  ?>"><?= $value['title']  ?></a></li>
                            <?php endforeach  ?>
                        </ul>
                        <!-- ec-breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>