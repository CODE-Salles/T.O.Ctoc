var modal = document.getElementById("modal");
var btn = document.getElementById("open-modal");
var span = document.getElementsByClassName("close")[0];

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

var modal = document.getElementById("modal");
var btn = document.getElementById("open-modal");
var span = document.getElementsByClassName("close")[0];
var nomeInput = document.getElementById("nome");
var emailInput = document.getElementById("email");
var senhaInput = document.getElementById("senha");
var saveButton = document.querySelector(".save");
var validationMessage = document.getElementById("validation-message");

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
        // Aqui você pode adicionar a lógica para salvar os dados
        // Se os campos estiverem preenchidos corretamente
        validationMessage.style.display = "none";
    }
};
