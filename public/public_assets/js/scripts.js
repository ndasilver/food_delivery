const sub = () => {
    let total = Number($('#items-total').html());
    const price = 6500;

    if (total == 1) {
        total = 1;
    } else {
        total = total - 1;
    }

    let total_price = price * total;

    displayPrice(total_price);
    return $('#items-total').html(total);

}

const add = () => {
    let total = Number($('#items-total').html());
    const price = 6500;
    total = total + 1;
    let total_price = price * total;

    displayPrice(total_price);
    return $('#items-total').html(total);
}

const displayPrice = (price) => {
    return $('#cart-price').html(price);
}

$(function() {
    $('#agree').click(function() {
        if ($(this).is(':checked')) {
            $('#btn-checkout').removeAttr('disabled');
        } else {
            $('#btn-checkout').attr('disabled', 'disabled');
        }
    });
});
