var newUser = document.getElementById('CriarPost');
var editUser = document.querySelectorAll('[id^="edit"]')
var showUser = document.querySelectorAll('[id^="visualizar"]')
var deleteUser = document.querySelectorAll('[id^="delete"]')

var modalBox = document.getElementById('modal');
var modalClose1 = document.querySelectorAll('[id^="cancelar"]')
var modalX = document.querySelectorAll('[id^="modalClose"]')
var modalNewUser = document.getElementById('modal-new-post');
var modalManageUser = document.getElementById('modal-manage-post');
var modalDeleteUser = document.getElementById('modal-delete-post');

newUser.addEventListener('click', () => {manageModal('newUser')});

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

editUser.forEach(element => {
   element.addEventListener('click', () => {manageModal('showUser') 
});
});

showUser.forEach(element => {
   element.addEventListener('click', () => {manageModal('showUser') 
});
});

deleteUser.forEach(element => {
   element.addEventListener('click', () => {manageModal('deleteUser') 
});
});



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