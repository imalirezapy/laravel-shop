// ========== sleep function ==================================
function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}


// ========== ajax function ====================================
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

// ========== backward timer ===================================
let timerOn = true;
function timer(remaining, redirect) {
    var m = Math.floor(remaining / 60);
    var s = remaining - 1;//% 60;
    m = m < 10 ? '0' + m : m;
    s = s < 10 ? '0' + s : s;
    document.getElementById('timer').innerHTML = s;
    remaining -= 1;

    if (remaining >= 1 && timerOn) {
        setTimeout(function () {
            timer(remaining, redirect);
        }, 1000);
        return;
    }

    // if(!timerOn) {
    //     // Do validate stuff here
    //     return;
    // }

    window.location.replace(redirect);
}


// ========== disable or enable submit button ==================
if (['register', 'login', 'verify'].includes(document.getElementById('route').content)) {
    let phoneInput = document.getElementById('phone-input');
    let sendCodeButton = document.getElementById('send-code-btn');
    let emailInput = document.getElementById('email-input');
    let nameInput = document.getElementById('name-input');

    [phoneInput, emailInput, nameInput].forEach(item => {
        item.addEventListener('keyup', function () {
            let enable = false;
            if (document.getElementById('route').content === 'register') {
                enable = (phoneInput.value.length >= 10) && (nameInput.value !== '') && (emailInput.value !== '');
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
}

// ========== fix header top ===================================
window.onscroll = function() {myFunction()};
var header_lg = document.getElementById("navbar-lg");
var header_sm = document.getElementById("navbar-sm");
var sticky1 = header_lg.offsetTop;
var sticky2 = header_sm.offsetTop;
function myFunction() {
    if (window.pageYOffset > sticky1 || window.pageYOffset > sticky2) {
        header_lg.classList.add("sticky");
        header_sm.classList.add("sticky");
    } else {
        header_lg.classList.remove("sticky");
        header_sm.classList.remove("sticky");
    }
}

// ========== burger menu ======================================
let menu = document.getElementById('collapse-menu');
$('#collapse-menu').on('click', function (){
    let event = document.getElementById('humber-bar');
    if (event) {
        menu.innerHTML = '<button data-arrow-focusable="" title="" id="x-bar" class="icon-button" style="width: 36px; height: 36px;"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path d="M18.78 5.22a.728.728 0 010 1.043L13.043 12l5.737 5.737a.728.728 0 010 1.043.728.728 0 01-1.043 0L12 13.043 6.263 18.78a.728.728 0 01-1.043 0 .728.728 0 010-1.043L10.957 12 5.22 6.263a.728.728 0 010-1.043.728.728 0 011.043 0L12 10.957l5.737-5.737a.728.728 0 011.043 0z" fill="#20222A"></path></svg></button>';
    } else if (document.getElementById('x-bar')) {
        menu.innerHTML = '<button data-arrow-focusable="" title="" id="humber-bar" class="icon-button" style="width: 36px; height: 36px;"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path d="M3.643 6.273h16.714A.631.631 0 0021 5.636.631.631 0 0020.357 5H3.643A.631.631 0 003 5.636c0 .358.281.637.643.637zm16.714 5.09H3.643A.631.631 0 003 12c0 .358.281.636.643.636h16.714A.631.631 0 0021 12a.631.631 0 00-.643-.636zm0 6.364H3.643a.631.631 0 00-.643.637c0 .358.281.636.643.636h16.714a.631.631 0 00.643-.636.631.631 0 00-.643-.637z" fill="#20222A"></path></svg></button>';
    }

});

// ========== horizon scroll ===================================
$('.owl-carousel').owlCarousel({
    rtl: true,
    margin: 10,
    dots: false,
    responsive: {
        0: {
            items: 4,
        },
        640: {
            items: 6,
        },
        1024: {
            items: 7,
        },
        1200: {
            items: 8,
        },
        1440: {
            items: 10,
        },
    },

});

function moved() {
    var owl = $(".owl-carousel").data('owlCarousel');
    alert('THE END');

    if (owl.currentItem + 1 === owl.itemsAmount) {
        alert('THE END');
    }
}
