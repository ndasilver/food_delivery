const button = document.querySelector('#addMenuModalE');
button.addEventListener('click',(e)=>{
    e.preventDefault();
    $('#addMenuModal').modal();
});

$(document).ready(function () {
    const editButton = document.querySelector('.editMenuModalButton');
    $('.editMenuModalButton').on('click',function (e) {
        e.preventDefault();
        const ItemId = $(this).closest('.menuId');
        console.log(ItemId);
        $('#itemEditId').val();
        $('#editMenuModal').modal();
    });
});