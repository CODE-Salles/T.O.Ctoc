var modal = document.getElementById("modal-medu");
var btn = document.getElementById("open-modal-medu");
var span = document.getElementsByClassName("close-medu")[0];

btn.onclick = function(){
    modal.style.display = "block";
}

span.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = "none";
    }
}

// --------------------- //

var modal = document.getElementById("modal-medu");
var btn = document.getElementById("open-modal-medu");
var span = document.getElementsByClassName("close-medu")[0];
var nomeInput = document.getElementById("nome-medu");
var emailInput = document.getElementById("email-medu");
var senhaInput = document.getElementById("senha-medu");
var saveButton = document.querySelector(".button-save");
var validationMessage = document.getElementById("validation-message-medu");

btn.onclick = function () {
    modal.style.display = "block";
};

span.onclick = function () {
    modal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

saveButton.onclick = function () {
    var nome = nomeInput.value.trim();
    var email = emailInput.value.trim();
    var senha = senhaInput.value.trim();

    if (nome === "" || email === "" || senha === "") {
        validationMessage.style.display = "block";
    } else {
        validationMessage.style.display = "none";
    }
};