let buttons = document.querySelectorAll('[id^="action-"]');
let modalBox = document.getElementById("modal")

buttons.forEach(button => {
    button.addEventListener('click', () => { manageModal(button) });
})


function closeModals() {
    let modalElements = document.querySelectorAll('[id^="modal-"]');

    modalElements.forEach(element => {
        element.classList = 'modal-content';
    });
}

function manageModal(button) {
    //    console.log(button.id.includes("new-post"));
    console.log(button.id.substring("action-".length));

    let info = button.id.substring("action-".length);

    let [typeModal, modal] = info.split(/-(.+)/);
    // console.log(typeModal,element);

    modalBox.classList.toggle('active')
    switch (typeModal) {
        case 'new':
            let modalNew = document.getElementById("modal-new-" + modal);
            modalNew.classList.toggle('modal-content-active');
            break;
        case 'show':
            let modalShow = document.getElementById("modal-show-" + modal);
            modalShow.classList.toggle('modal-content-active');
            break;
        case 'edit':
            let modalEdit = document.getElementById("modal-edit-" + modal);
            modalEdit.classList.toggle('modal-content-active');
            break;
        case 'delete':
            let modalDelete = document.getElementById("modal-delete-" + modal);
            modalDelete.classList.toggle('modal-content-active');
            break;
        case 'modalClose':
            closeModals();
            break;
        default:
    }
}