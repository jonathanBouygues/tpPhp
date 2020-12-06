/* ╔╩╔╩╔╩╔╩ */
// █▄██▄█ Redirection after 10 secondes  █▄██▄█

// Targets
let action404 = document.getElementById('action404');
let timingRedir = document.getElementById('timing');
let timer = 10;


// Render the countdown (10 secs, pace 1 sec)
function countSeconde() {
    timer = timer - 1;
    timing.innerHTML = timer;
}

setInterval(countSeconde, 1000);


// Count 10 secs to redirect
// setTimeout(function () { action404.submit(); }, 10000);
// OR
function redirection() {
    action404.submit();
}

setTimeout(redirection, 10000);