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
                categoryID = $('.shop-pro-content').data('category'),
                limit = 15;
            $('.loader').show();

            action = 'active';

            $.ajax({
                url: `${baseUrl}/api/product?category=${categoryID}&offset=${offset}&limit=${limit}${order}${filter}`,
                type: 'GET',
                success: function (res) {
                    $('.error-message-category').hide();

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
    $('input[type=checkbox].filter').on('change', function () {
        var filterArr = {};
        var checkboxes = $('input[type=checkbox].filter:checked');

        checkboxes.each((index, element) => {
            const val = $(element).val(),
                name = $(element).data('filter');
            filterArr[name] = filterArr[name] ? filterArr[name] : []
            filterArr[name].push(val);
        });

        filter = '';
        Object.entries(filterArr).map((element) => {

            let url = (element[0] == 'Marka') ? `&${element[0]}=` : '&option=';
            if (element.length) {
                let joined =  element[1].join('|');
                url += joined.replace('&','--');
            }

            filter += url;
        })
        $('.pro-gl-content.active').remove();
        action = 'inactive';
        updateCategory();


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