<div class="ec-cart-inner">
    <div class="ec-cart-top">
        <div class="ec-cart-title">
            <span class="cart_title">Sepet</span>
            <button class="ec-close">×</button>
        </div>
        <ul class="eccart-pro-items">
            <?php foreach ($cartData as $key => $cart) :  ?>
                <li class="cart-item" data-parent data-key="<?= $cart['product_id']  ?>">
                    <a href="${cartItem.slug}" class="sidekka_pro_img"><img src="<?= $cart['image']  ?>" alt="product"></a>
                    <div class="ec-pro-content">
                        <a href="${cartItem.slug}" class="cart_pro_title"><?= $cart['name']  ?></a>
                        <span class="cart-price"><span><?= $cart['price']  ?></span> x <span class="quantity"> <?= $cart['cart_quantity']  ?> </span></span>
                        <div class="qty-plus-minus">
                            <div class="dec ec_qtybtn"> - </div>
                            <input class="qty-input" type="text" name="ec_qtybtn" value="<?= $cart['cart_quantity']  ?> " readonly>
                            <div class="inc ec_qtybtn">+</div>
                        </div>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            <?php endforeach  ?>
        </ul>
    </div>
    <div class="ec-cart-bottom">
        <div class="cart-sub-total">
            <table class="table cart-table">
                <tbody>
                    <tr>
                        <td class="text-left">Ürün Fiyatı :</td>
                        <td class="text-right"><span class="product-total-price"><?= isset($totalPrice) ? number_format($totalPrice ,2) : 0  ?></span> ₺</td>
                    </tr>
                    <!-- <tr>
                                <td class="text-left">KDV :</td>
                                <td class="text-right"><span class="vat-price"></span> ₺</td>
                            </tr> -->
                    <!-- <tr>
                                <td class="text-left">Toplam Fiyat :</td>
                                <td class="text-right primary-color"><span class="total-price"> ₺</span> </td>
                            </tr> -->
                </tbody>
            </table>
        </div>
        <a href="<?= base_url('sepet')  ?>" class="btn btn-primary btn-block">Alışverişi Tamamla</a>

    </div>
</div>