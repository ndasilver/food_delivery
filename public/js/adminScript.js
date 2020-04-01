const button = document.querySelector('#addMenuModalE');
const addCustomerModal = document.querySelector('#addMenuModal');
button.addEventListener('click',(e)=>{
    e.preventDefault();
    $('#addMenuModal').modal();
});