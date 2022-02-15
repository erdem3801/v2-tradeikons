$(function () {
    $('*[data-link-action="quickview"]').on('click', function (e) {

        e.preventDefault();
        $('#ec_quickview_modal').modal('show');
        const product = $(this).data('product');
        $.get(`${baseUrl}/api/product/${product}`, function (res) {
            console.log('res: ', res);
            $('.ec-quickview-desc').html(res.product.description);
            $('.ec-quickview-price .new-price').text(res.product.price_sell + ' ₺');
            $('.ec-quick-title a').text(res.product.name);
            imageItems = res.images.map(item => {
                return `
                <div class="qty-slide">
                    <img class="img-responsive" src="${item.image}" alt="">
                </div>
                `
            })
            $('.qty-product-cover').html(imageItems); 
        });

    })

})