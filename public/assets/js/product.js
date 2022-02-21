$(function () {
    $('.shop-pro-content').on('click', '.quickview', function (e) {
        e.preventDefault();
        $('#ec_quickview_modal').modal('show');
        const product = $(this).data('product');
        $.get(`${baseUrl}/api/product/${product}`, function (res) {
            const { description, price, name, image, slug } = res.product
            $('.ec-quickview-desc').text(description);
            $('.ec-quickview-price .new-price').text(price + ' ₺');
            $('.ec-quick-title a').text(name);
            $('.ec-quick-title a').attr('href', `${baseUrl}/${slug}`);
            imageItems = `
                <div class="qty-slide">
                    <img class="img-responsive" src="${image}" alt="">
                </div>
                `;
            $('.qty-product-cover').html(imageItems);
        });

    })
  
})