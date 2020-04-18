const addMenuModal = ()=>{
    $('#addMenuModal').modal();
};

$(document).ready(function () {
    const editButton = document.querySelector('.editMenuModalButton');
    $('.editMenuModalButton').on('click',function (e) {
        e.preventDefault();
        const ItemId = $(this).prev().val();
        // console.log(ItemId);
        $.get('/admin/menu/'+ItemId,function (data, status) {
            if (status== 'success'){
                // console.log('success now');
                $('#editModalName').val(data[0].name);
                $('#editModalDescription').val(data[0].description);
                $('#editModalPrice').val(data[0].price);
                const category_id = data[0].category.id;
                $('#editModalCategory option:selected').removeAttr('selected');
               $('#editModalCategory option[value='+category_id+']').attr('selected','selected');
               $('#modalEditForm').attr('action','/admin/menu/'+ItemId);
            }else {
                alert('server error');
            }
        });
        $('#itemEditId').val(ItemId);
        $('#editMenuModal').modal();
    });
});

let approveOrder = (id) => {
    Swal.fire({
        title: 'Are you sure you want to approve this order?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, approve it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url:`order/approve/${id}`,
                type:'GET',
                beforeSend:function () {

                },
                success:function () {
                        location.reload();
                }
            });
        }
    });
};

let rejectOrder = (id) => {
    Swal.fire({
        title: 'Are you sure you want to reject this order?',
        text: "You won't be able to revert this!",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, reject it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url:`order/reject/${id}`,
                type:'GET',
                beforeSend:function () {

                },
                success:function () {
                    location.reload();
                }
            });
        }
    });
};
