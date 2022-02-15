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
    let action = 'inactive';
     
    $(window).scroll(function () {
        const contentHeigth = $(".shop-pro-content").height(),
            windowHeigth = $(window).height(),
            windowscrollTop = $(window).scrollTop();

        if (windowscrollTop + windowHeigth > contentHeigth + 150 && action == 'inactive') {
            const offset = $('.pro-gl-content').length  -1 ,
                container = $('.shop-pro-inner .row'),
                categoryID = $('.shop-pro-content').data('category'),
                limit = 12;
            action = 'active';
            console.log('offset: ', offset);
            $.get(`${baseUrl}/api/product?category=${categoryID}&offset=${offset}&limit=${limit}`, function (res) {
                res.product.forEach(item => {
                    const content = $('.pro-gl-content.hidden').clone().get(0);
                    $(content).removeClass('hidden');
                    $(content).attr('data-key', item.product_id);
                    $(content).find('.main-image').attr('src', item.image);
                    $(content).find('.hover-image').attr('src', item.image);
                    $(content).find('.quickview').attr('data-product', item.product_id);
                    $(content).find('.ec-pro-title a').text(item.name);
                    container.append(content)
                });
                if(res.product.length == limit)
                action = 'inactive';
            })
        }
    }).scroll();
})