var stripe = Stripe('pk_test_bohfuGVRRIElFYaR89rMqTgb00Cp0w6SRd');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
var style = {
    base: {
        // Add your base input styles here. For example:
        fontSize: '16px',
        color: '#32325d',
    },
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style,hidePostalCode: true});

/*
 * CHANGING PAYMENT METHODS
 */
$('input[name="payment_method"]').change(function () {
    var paymentMode = $(this).attr('id');
    if (paymentMode == 'stripe'){
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        $('.stripe-payment-section').show("50","swing");
    }else{
        $('.stripe-payment-section').hide("50","swing");
        card.unmount('#card-element');
    }
});


function stripePayment() {
    // Create a token or display an error when the form is submitted.
    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the customer that there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
            // Pace.stop();
        }
    });

}// stripe payment function

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('orderCheckoutForm');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}

//checkout button
const checkoutButton = document.getElementById('card-button');
// checkout button click event
checkoutButton.addEventListener('click',function (event) {
    event.preventDefault();
    const orderNames = document.getElementById("orderFname");
    const orderPhone = document.getElementById("phone");
    const orderAddress = document.getElementById("address");
    const paymentOption = document.querySelectorAll('input[name="payment_method"]')
    if (orderNames.value == ""){
        // if names are empty
        orderNames.style.border = "1px solid #FF0000";
        orderNames.focus();
    }
    else if (orderPhone.value == ""){
        // if phone number is empty
        orderPhone.style.border = "1px solid #FF0000";
        orderPhone.focus();
    }
    else if (orderAddress.value == ""){
        // if address is empty
        orderAddress.style.border = "1px solid #FF0000";
        orderAddress.focus();
    }else{
        let selectedPayment;
        for (let i=0 ;i < paymentOption.length; i++){
            if (paymentOption[i].checked){
                selectedPayment = paymentOption[i].getAttribute("id");
                break;
            }
        }
        if (selectedPayment == undefined){
            // if no payment mode selected
            alert("select payment");
        }else if (selectedPayment == "cash"){
            Pace.restart();
            // If payment mode is cash
            document.getElementById('orderCheckoutForm').submit();
        }else{
            Pace.restart();
            // if payment selected other than cash
            stripePayment();
        }
    }

});
