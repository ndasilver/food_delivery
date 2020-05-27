require('./bootstrap');

Echo.channel('channel-order')
    .listen('newOrderEvent', (e) => {
        console.log(e.order);
        const d = new Date();
        const date = `${d.getFullYear()}-${d.getMonth()}-${d.getDate()}  ${d.getHours()}:${d.getMinutes()}`;
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300000",
            "hideDuration": "100000",
            "timeOut": 0,
            "extendedTimeOut": 0,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "tapToDismiss": false
        }
        toastr["info"](`New order placed from ${e.order.owner}.<br> Consider refreshing orders page<br>${date}`,` New order No: ${e.order.id}`)
    });
