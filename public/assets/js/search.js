$(function () {
    let action = 'inactive';
    var order = '';
    var filter = '';
    const updateCategory = function () {
        const contentHeigth = $(".shop-pro-content").height(),
            windowHeigth = $(window).height(),
            windowscrollTop = $(window).scrollTop();
        if (windowscrollTop + windowHeigth > contentHeigth + 150 && action == 'inactive') {
            const offset = $('.pro-gl-content').length - 1,
                container = $('.shop-pro-inner .row'),
                query = $('.shop-pro-content').data('query'),
                limit = 15;
            $('.loader').show();

            action = 'active';

            $.ajax({
                url: `${baseUrl}/api/search?q=${query}&offset=${offset}&limit=${limit}${order}`,
                type: 'GET',
                success: function (res) {
                    $('.error-message-category').hide();

                    console.log(' res.data: ', res.data);
                    res.data.forEach(item => {
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
                    if (res.data.length == limit)
                        action = 'inactive';
                    else {
                        $('.loader').hide();
                    }
                },
                error: function (xhr) {
                    console.log('xhr: ', xhr.status);
                    if (xhr.status == 404) {
                        $('.loader').hide();
                        $('.error-message-category').fadeIn(500);


                    }

                }
            })
        }
    }

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