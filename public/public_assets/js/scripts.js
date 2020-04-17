
// Function to control product quantities by substracting

const sub = () => {
    let total = Number($('#items-total').html());
    const price = Number($('#initial-price').val());

    if (total == 1) {
        total = 1;
    } else {
        total = total - 1;
    }

    let total_price = price * total;

    displayPrice(total_price);
    return $('#items-total').html(total);

}


// Function to control product quantities by adding
const add = () => {
    let total = Number($('#items-total').html());
    const price = Number($('#initial-price').val());
    total = total + 1;
    let total_price = price * total;

    displayPrice(total_price);
    return $('#items-total').html(total);
}


// Function to display price
const displayPrice = (price) => {
    return $('#cart-price').html(price);
}

// Function to reset add to cart Modal
$('#addToCartModal').on('hidden.bs.modal', function (e) {
    $('#items-total').html('1');
    $('#cart-price').html('');
    $("#default-selection").prop('checked', true);
})

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

    // Displaying information related to the specific Menu
    getMenuData(itemId);

};

const addToCart = ()=>{
   const ItemId = document.getElementById("clickedItemId").value;
   const cartPrice = document.getElementById("cart-price");
   const itemTotal = document.getElementById("items-total").innerText;
   const side_dish = $('input[name="accomp"]:checked').val();


   const url = `../add-to-cart/${ItemId}/${parseInt(itemTotal)}/side/${side_dish}`;
   if (side_dish){
       const action = $('#addToCartModal').modal('hide');
       getData(url,action,"Successfully added to cart");
       addToDropDownCart();
   }else {
       Swal.fire({
           icon: 'error',
           title: 'Oops...',
           text: 'Please select side dish first'
       })
   }

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

// Ajax Function to getMenu Information on add to cart
const getMenuData = (id) => {
    const menuId = id;
    $.ajax({
        type:'GET',
        url:"/getMenuInfo/"+ menuId,
        dataType:"json",
        success:function(data){
            // console.log(data.name);
            $('#cart-price').html(data.price);
            $('#menu-name').html(data.name);

            $('#initial-price').val(data.price);
            $('#addToCartModal').modal('show');

        }
    });

}

