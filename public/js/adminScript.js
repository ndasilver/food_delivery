const button = document.querySelector('#addMenuModalE');
button.addEventListener('click',(e)=>{
    e.preventDefault();
    $('#addMenuModal').modal();
});

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