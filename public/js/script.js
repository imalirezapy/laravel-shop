function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function apply(phone) {
    var token = document.getElementById('_token').content;
    $.ajax({
        method: 'POST',
        url: '/verify',
        dataType: 'json',
        data: {_token:token,},
        success: function (response) {
            timer(60, phone)
        }, complete: function () {
            // sleep(1400).then(() => {
            //     item.className = item.className.replace('loader', '')
            //     item.setAttribute('onclick', url+'(this)');
            // });

        }
    });
}

let timerOn = true;

function timer(remaining, phone) {
    var m = Math.floor(remaining / 60);
    var s = remaining - 1;//% 60;

    m = m < 10 ? '0' + m : m;
    s = s < 10 ? '0' + s : s;
    document.getElementById('timer').innerHTML = s;
    remaining -= 1;

    if (remaining >= 1 && timerOn) {
        setTimeout(function () {
            timer(remaining, phone);
        }, 1000);
        return;
    }

    // if(!timerOn) {
    //     // Do validate stuff here
    //     return;
    // }

    location.reload();
}



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

            sendCodeButton.disabled = false;
            sendCodeButton.className = 'btn send-code-btn';
        } else {
            sendCodeButton.disabled = true;
            sendCodeButton.className = "btn send-code-btn disabled";
        }
    });
})



