const sub = () => {
    let total = Number($('#items-total').html());
    if (total == 1) {
        total = 1;
    } else {
        total = total - 1;
    }

    return $('#items-total').html(total);

}

const add = () => {
    let total = Number($('#items-total').html());
    total = total + 1;
    return $('#items-total').html(total);
}