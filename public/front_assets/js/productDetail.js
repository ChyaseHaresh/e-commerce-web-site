function showSizes(object, sid) {


    document.querySelector('#p_size').value = sid;
    document.querySelector('#a_size').value = object.textContent;

    object.classList.remove('sizes')

    document.querySelector('.sizes').classList.remove('active_border');
    object.classList.add('active_border')
    object.classList.remove('border')

    document.querySelector('#p_size').value = sid;
    document.querySelector('#a_size').value = object.textContent;

    console.log(object.textContent);
    console.log(sid);

    object.classList.add('sizes')

}
function showColor(object, cid) {
    document.querySelector('#p_color').value = cid;
    document.querySelector('#a_color').value = object.textContent;
    object.classList.remove('colors')

    document.querySelector('.colors').classList.remove('active_border');
    object.classList.add('active_border')
    object.classList.remove('border')


    console.log(object.textContent);
    console.log(cid);
    object.classList.add('colors')

}


function applyCouponCode() {
    jQuery('#coupon_code_msg').html('');
    jQuery('#order_place_msg').html('');
    var coupon_code = jQuery('#coupon_code').val();
    if (coupon_code != '') {
        jQuery.ajax({
            type: 'post',
            url: '/apply_coupon_code',
            data: 'coupon_code=' + coupon_code + '&_token=' + jQuery("[name='_token']").val(),
            success: function (result) {
                console.log(result.status);
                if (result.status == 'success') {
                    jQuery('.show_coupon_box').removeClass('d-none');
                    jQuery('#coupon_code_str').html(coupon_code);
                    jQuery('#total_price').html('INR ' + result.totalPrice);
                    jQuery('.apply_coupon_code_box').hide();
                } else {

                }
                jQuery('#coupon_code_msg').html(result.msg);
            }
        });
    } else {
        jQuery('#coupon_code_msg').html('Please enter coupon code');
    }

}

function remove_coupon_code() {
    jQuery('#coupon_code_msg').html('');
    var coupon_code = jQuery('#coupon_code').val();
    jQuery('#coupon_code').val('');
    if (coupon_code != '') {
        jQuery.ajax({
            type: 'post',
            url: '/remove_coupon_code',
            data: 'coupon_code=' + coupon_code + '&_token=' + jQuery("[name='_token']").val(),
            success: function (result) {
                if (result.status == 'success') {
                    jQuery('.show_coupon_box').addClass('d-none');
                    jQuery('#coupon_code_str').html('');
                    jQuery('#total_price').html('INR ' + result.totalPrice);
                    jQuery('.apply_coupon_code_box').show();
                } else {

                }
                jQuery('#coupon_code_msg').html(result.msg);
            }
        });
    }
}
jQuery('#frmPlaceOrder').submit(function (e) {
    jQuery('#order_place_msg').html("Please wait...");
    e.preventDefault();
    jQuery.ajax({
        url: '/place_order',
        data: jQuery('#frmPlaceOrder').serialize(),
        type: 'post',
        success: function (result) {
            if (result.status == 'success') {
                window.location.href = "/payment_methods/"+result.coupon_value+"/"+result.order_id;
            }
            jQuery('#order_place_msg').html(result.msg);
        }
    });
});

function payment_confirmation() {
    let confirm_btn = document.querySelector('.confirmation');
    confirm_btn.classList.remove('d-none')
}

