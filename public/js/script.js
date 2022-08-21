function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


let timerOn = true;

function timer(remaining) {
    var m = Math.floor(remaining / 60);
    var s = remaining-1 ;//% 60;

    m = m < 10 ? '0' + m : m;
    s = s < 10 ? '0' + s : s;
    document.getElementById('timer').innerHTML = s;
    remaining -= 1;

    if(remaining >= 1 && timerOn) {
        setTimeout(function() {
            timer(remaining);
        }, 1000);
        return;
    }

    // if(!timerOn) {
    //     // Do validate stuff here
    //     return;
    // }

    location.reload();

}

timer(60);


let phoneInput = document.getElementById('phone-input');
let sendCodeButton = document.getElementById('send-code-btn');
let emailInput = document.getElementById('email-input');
let nameInput = document.getElementById('name-input');

[phoneInput,emailInput,nameInput].forEach(item => {
    item.addEventListener('keyup', function () {
        let enable = false;
        if (document.getElementById('route').content === 'register') {
            enable = (phoneInput.value.length >= 10) && (nameInput.value !== '') && (emailInput.value !== '' ) ;
        } else {
            enable = phoneInput.value.length >= 10;
        }
        if (enable) {
            sendCodeButton.className = 'btn send-code-btn';
        } else {
            sendCodeButton.className = "btn send-code-btn disabled";
        }
    });
})

