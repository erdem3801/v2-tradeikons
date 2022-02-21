$(function () {
    let action = 'inactive';
    var order = '';
    var manufaturer = '';
    const updateCategory = function () {
        const contentHeigth = $(".shop-pro-content").height(),
            windowHeigth = $(window).height(),
            windowscrollTop = $(window).scrollTop();
        if (windowscrollTop + windowHeigth > contentHeigth + 150 && action == 'inactive') {
            const offset = $('.pro-gl-content').length - 1,
                container = $('.shop-pro-inner .row'),
                categoryID = $('.shop-pro-content').data('category'),
                limit = 15;
            $('.loader').show();

            action = 'active';

            $.get(`${baseUrl}/api/product?category=${categoryID}&offset=${offset}&limit=${limit}${order}`, function (res) {
                res.product.forEach(item => {
                    const content = $('.pro-gl-content.hidden').clone().get(0);
                    $(content).removeClass('hidden');
                    $(content).addClass('active');
                    $(content).attr('data-key', item.product_id);
                    $(content).find('.main-image').attr('src', item.image);
                    $(content).find('.hover-image').attr('src', item.image);
                    $(content).find('.quickview').attr('data-product', item.product_id);
                    $(content).find('.new-price').text(item.price);
                    $(content).find('.ec-pro-title a').text(item.name);
                    $(content).find('.ec-pro-title a').attr('href', `${baseUrl}/${item.slug}`);
                    $(content).find('.ec-pro-image a').attr('href', `${baseUrl}/${item.slug}`);
                    container.append(content)
                });
                if (res.product.length == limit)
                    action = 'inactive';
                else {
                    $('.loader').hide();
                }
            })
        }
    }
    $('input[type=checkbox].filter').on('change', function () {
        var filter = [];
        var checkboxes = $('input[type=checkbox].filter:checked');

        checkboxes.each((index ,element) => { 
            const val = $(element).val(),
                name = $(element).data('filter'); 
        })
        console.log('filter: ', filter);
        console.log('checkboxes: ', checkboxes);
    })
    $('#ec-select').on('change', async function () {
        const val = $(this).val();
        $('.pro-gl-content.active').remove();
        order = `&order=${val}`;
        action = 'inactive';
        updateCategory();
    });
    $(window).scroll(function () {
        updateCategory();
    }).scroll();
});