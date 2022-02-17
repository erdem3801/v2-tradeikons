$(function () {
    const updateCartTable = function () {
        cartData = JSON.parse(localStorage.getItem('cart'));
        console.log('cartData: ', cartData);
        console.log('cartData.length: ', cartData.length);
        if (cartData.length)
            $('.checkout-button').removeAttr('disabled');
        else
            $('.checkout-button').attr('disabled', 'disabled');
        tableBody = cartData.map(item => {
            const { productID, slug, image, name, quantity, price } = item
            return `
                <tr class="cart-item" data-parent data-key="${productID}">
                    <td data-label="Product" class="ec-cart-pro-name">
                        <a href="${slug}">
                            <img class="ec-cart-pro-img mr-4" src="${image}" alt="img-${productID}" />${name}</a></td>
                    <td data-label="Price" class="ec-cart-pro-price"><span class="amount">${price}</span></td>
                    <td data-label="Quantity" class="ec-cart-pro-qty" style="text-align: center;">
                        <div class="cart-qty-plus-minus">
                            <input class="cart-plus-minus" type="text" name="cartqtybutton" value="${quantity}"  readonly/>
                            <div class="ec_cart_qtybtn">
                                <div class="inc ec_qtybtn">+</div>
                                <div class="dec ec_qtybtn">-</div>
                            </div>
                        </div>
                    </td>
                    <td data-label="Total" class="ec-cart-pro-subtotal"><span>${quantity * price}</span> ₺</td>
                    <td data-label="Remove" class="ec-cart-pro-remove">
                        <a href="#"><i class="ecicon eci-trash-o"></i></a>
                    </td>
                </tr>
                `;
        });
        $('.cart-table-content tbody').html(tableBody);
    }


    updateCartTable();
})