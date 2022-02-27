<div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn <?= (!isset($paytr_token)) ? 'ec-side-toggle' : ''?>">
            <div class="header-icon"><img src="<?= base_url('public')  ?>/assets/images/icons/cart.svg" class="svg_img header_svg" alt="cart" />
            </div>
            <span class="ec-cart-count cart-count-lable"><?= $basketCount ?? 0  ?></span>
        </a>
    </div>