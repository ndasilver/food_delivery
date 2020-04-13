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

// Functions to display/hide change box
$(function() {
    $('#cash').click(function() {
        if ($(this).is(':checked')) {
            $('#change-box').show();
        } else {
            $('#change-box').hide();
        }
    });
});

$(function() {
    $('#momo').click(function() {
        if ($(this).is(':checked')) {
            $('#change-box').hide();
        } else {
            $('#change-box').show();
        }
    });
});



// Function to disable/enable checkout button
$(function() {
    $('#agree').click(function() {
        if ($(this).is(':checked')) {
            $('#btn-checkout').removeAttr('disabled');
        } else {
            $('#btn-checkout').attr('disabled', 'disabled');
        }
    });
});



let getItemId = (itemId) => {
    let clickedItem = document.getElementById("clickedItemId");
    clickedItem.value = itemId;
};
const addToCart = ()=>{
   const ItemId = document.getElementById("clickedItemId").value;
   const cartPrice = document.getElementById("cart-price");
   const itemTotal = document.getElementById("items-total").innerText;
   const url = `../add-to-cart/${ItemId}/${itemTotal}`;
   const action = $('#addToCartModal').modal('hide');
   getData(url,action,"Successfully added to cart");

};
let getData = (url,action,message)=> {
    $.ajax({
        type:'GET',
        url:url,
        beforeSend:function () {
            Pace.restart();
        },
        success:function () {
            Pace.stop();
                action;
            Swal.fire(
                'Good job!',
                message,
                'success'
            )
        }
    });
};

const addToDropDownCart = ()=> {
    $(".itemCartDropDown").remove();
    $(".dropdown-divider").remove();
    $.getJSON('../cart-items-cart', function (data, status) {
        if (status == "success") {
            let counter = 0;
            $.each(data, function (i, field) {
                const itemID = i;
                const postID = $(".itemCartDropDown").attr("id");
                document.getElementById("dropdown-cart-items").insertAdjacentHTML('afterbegin', `
                         <div class="itemCartDropDown" id="${i}">
                            ${field.quantity}x ${field.name} = ${field.quantity * field.price}
                            </div>
                            <div class="dropdown-divider"></div>`);
                counter++;
            })
            document.getElementById("cartQuantityCounter").innerHTML = counter;
        } else {
            console.error("error occured");
        }
    });
};

addToDropDownCart();
