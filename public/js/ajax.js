$(document).ready(function () {
    /* xóa sản phẩm */
    $('.btn__product__clear').click(function () {
        const productId = $(this).closest('.cart__item').data('product-id');
        $.ajax({
            url: 'deleteCart',
            type: 'POST',
            data: { product_id: productId },
            success: function (response) {
                if (true) {
                    // Xóa sản phẩm khỏi giao diện
                    $(`.cart__item[data-product-id="${productId}"]`).remove();
                } else {
                    alert('Không thể xóa sản phẩm. Vui lòng thử lại.');
                }
            },
            error: function () {
                alert('Có lỗi xảy ra. Vui lòng thử lại.');
            }
        });
    });


    /* cap nhap giỏ hàng */
    $('#update_cart').on('click', function () {
        const updatedCart = {};

        $('.qty-input').each(function () {
            const productId = $(this).data('id');
            const quantity = $(this).val();
            updatedCart[productId] = quantity;
        });
       /*  console.log("Updated cart data:", updatedCart); */

        // AJAX request to update cart
        $.ajax({
            url: 'updateCart',
            type: 'POST',
            dataType: 'json',
            data: { cart: updatedCart },
            success: function (response) {
                try {
                    const responseText = xhr.responseText;
                    const jsonStart = responseText.indexOf('{');
                    if (jsonStart !== -1) {
                        const validJson = JSON.parse(responseText.substring(jsonStart));
                        /* console.log("Parsed JSON data:", validJson); */

                        for (const [productId, newTotal] of Object.entries(validJson.updatedPrices)) {
                            $(`#price_${productId}`).text(newTotal);
                            console.log(productId, newTotal)
                        }
                        console.log(validJson.totalPay)
                        $('#total__price').text(validJson.totalPay);
                        $('#total__pay').text(validJson.totalPay);
                        /* alert('Giỏ hàng đã được cập nhật!'); */
                    } else {
                        alert('Phản hồi từ server không hợp lệ.');
                    }

                } catch (e) {
                    /*  console.error("JSON parse error:", e);
                     alert('Có lỗi xảy ra khi xử lý phản hồi từ server.'); */
                }
            },
            error: function (xhr, status, error) {
                /*  console.error("AJAX error:", status, error);
                 console.log("Response text:", xhr.responseText); */
                try {
                    const responseText = xhr.responseText;
                    const jsonStart = responseText.indexOf('{');
                    if (jsonStart !== -1) {
                        const validJson = JSON.parse(responseText.substring(jsonStart));
                        /* console.log("Parsed JSON data:", validJson); */

                        for (const [productId, newTotal] of Object.entries(validJson.updatedPrices)) {
                            $(`#price_${productId}`).text(newTotal);
                            /* console.log(productId, newTotal) */
                        }
                        /* console.log(validJson.totalPay) */
                        $('#total__price').text(validJson.totalPay);
                        $('#total__pay').text(validJson.totalPay);
                       /*  alert('Giỏ hàng đã được cập nhật!'); */

                    } else {
                        alert('Phản hồi từ server không hợp lệ.');
                    }
                } catch (e) {
                    /*  console.error("JSON parse error:", e);
                     alert('Phản hồi từ server không hợp lệ. Vui lòng thử lại.'); */
                }
            }

        });
    });

    // xoa san phẩm trong DOM khi đặt hàng thành công
    $('.btn-pay').click(function () {

        let products = [];
        $('.cart__item').each(function () {
            products.push($(this).data('product-id'));
        });

        $.ajax({
            url: 'productOrder',
            type: 'POST',
            dataType: 'json',
            data: { products: products },
            success: function (response) {
                if (response.success) {
                    response.deletedProducts.forEach(function (productId) {
                        $(`.cart__item[data-product-id="${productId}"]`).remove();
                    });

                    alert('Đặt hàng thành công! Các sản phẩm đã được xóa.');
                } else {
                    alert('Có lỗi xảy ra: ' + response.error);
                }
            },
        });
    });


});
