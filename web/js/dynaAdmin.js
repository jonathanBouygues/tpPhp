/* ╔╩╔╩╔╩╔╩ */
// █▄██▄█ Manage the data to delete/modify █▄██▄█

// Targets
let selectValArt = document.getElementById('valueArticle');
let inputDel = document.querySelector('input[name = valueDel]');
let inputMod = document.querySelector('input[name = valueMod]');
let actionMod = document.getElementById('actionMod');
let formModArt = document.getElementById('formModArt');
let formDelArt = document.getElementById('formDelArt');

// Default value (first article)
inputDel.value = selectValArt.value;
inputMod.value = selectValArt.value;

// On change of the select, the data is update
selectValArt.addEventListener('change', function () {
    inputDel.value = selectValArt.value;
    inputMod.value = selectValArt.value;
});

// On change of the select, the data is update
actionMod.addEventListener('click', function (event) {
    actionMod.style.display = "none";
    formModArt.style.display = "flex";
    formDelArt.style.display = "none";
});