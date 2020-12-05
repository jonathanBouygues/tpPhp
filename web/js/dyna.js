/* ╔╩╔╩╔╩╔╩ */
// █▄██▄█ Do appears the bloc "newUser" █▄██▄█

// Targets
let actionNew = document.getElementById('actionNew');
let formNewUser = document.querySelector('.formNewUser');
let formConnexion = document.querySelector('.formConnexion');

// On click on the button, the bloc appears
actionNew.addEventListener('click', function () {
    actionNew.style.display = "none";
    formNewUser.style.display = "flex";
    formConnexion.style.display = "none";
});
