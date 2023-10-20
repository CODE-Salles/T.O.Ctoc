 var newUser = document.getElementById('cadastrarCliente');
 var editUser = document.getElementById('edit');
 var showUser = document.getElementById('visualizar');
 var deleteUser = document.getElementById('delete');

 var modalBox = document.getElementById('modal');
 var modalClose1 = document.querySelectorAll('[id^="cancelar"]')
 var modalX = document.querySelectorAll('[id^="modalClose"]')
 var modalNewUser = document.getElementById('modal-new-user');
 var modalManageUser = document.getElementById('modal-manage-user');
 var modalDeleteUser = document.getElementById('modal-delete-user');

 newUser.addEventListener('click', () => {manageModal('newUser')});
 editUser.addEventListener('click', () => {manageModal('showUser')});
 showUser.addEventListener('click', () => {manageModal('showUser')});
 deleteUser.addEventListener('click', () => {manageModal('deleteUser')});

 function closeModals(){
    let modalElements = document.querySelectorAll('[id^="modal-"]');

    modalElements.forEach(element => {
        element.classList = 'modal-content';
      });
}

 modalClose1.forEach(element => {
    element.addEventListener('click', () => {
        manageModal('close');
        closeModals();
    });
 })

 modalX.forEach(element => {
    element.addEventListener('click', () => {
        manageModal('close');
        closeModals();
    });
 })


 function manageModal(typeModal){
    modalBox.classList.toggle('active')
    switch(typeModal){
        case 'newUser':
            modalNewUser.classList.toggle('modal-content-active');
            break;
        case 'showUser':
            modalManageUser.classList.toggle('modal-content-active');
            break;
        case 'deleteUser':
            modalDeleteUser.classList.toggle('modal-content-active');
            break;
        case 'close':
            break;
        default:
    }
 }