//Put the fields in variables:
let pass = document.getElementById("passField");
let Cpass = document.getElementById("cPassField");

//Put the First Password Field Buttons in variables:
let open = document.getElementById("open");
let close = document.getElementById("close");

//Put the Second Password Field Buttons in variables:
let cOpen = document.getElementById("cOpen");
let cPassClose = document.getElementById("cPassClose");

//A function to the welcome.php page to logout to index.php:
function logOut() {
    window.location.href = "index.php";
}

//Make it be visable or not to the first field of Password:
function notVisable(){
    if(pass.type = "password"){
        console.log(pass.type);
        pass.type = "text";
        close.style.display = 'none';
        open.style.display = 'block';
    }}
function visable(){
    if(pass.type = "text"){
        console.log(pass.type);
        pass.type = "password";
        close.style.display = 'block';
        open.style.display = 'none';
    }}

//Make it be visable or not to the Second field of Password:
function CpassNotVisable(){
    if(Cpass.type = "password"){
        console.log(Cpass.type);
        Cpass.type = "text";
        cPassClose.style.display = 'none';
        cOpen.style.display = 'block';
    }}
function CpassVisable(){
    if(Cpass.type = "text"){
        console.log(pass.type);
        Cpass.type = "password";
        cPassClose.style.display = 'block';
        cOpen.style.display = 'none';
    }}

function unHideButton() {
    const response = grecaptcha.getResponse()
    if (response.length !== 0) {
        // `submitBtn` is the id I gave the form submit button
        document.getElementById('submitBtn').disabled = false
    }
}
const addCallback = setTimeout(() => {
    // Need to check reCaptcha exists before adding callback
    // or reCaptcha will fail to load
    if (grecaptcha) {
        const rcv2 = document.querySelector('.g-recaptcha');
        rcv2.dataset.callback = "unHideButton";
        clearTimeout(addCallback);
    }
}, 100);