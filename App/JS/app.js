let eyesolid = document.getElementById("eyes-solid");
let eyeslash = document.getElementById("eyes-slash");
let password = document.getElementById("password");
let closeNotif = document.getElementById("close-notif");
let loginNotif = document.getElementById("erreur-login");

eyeslash.addEventListener('click', function e(){
   
    eyesolid.style.display = 'initial';
    eyeslash.style.display = 'none';
    password.type = 'text';
})
eyesolid.addEventListener('click', function e(){

    eyesolid.style.display = 'none';
    eyeslash.style.display = 'initial';
    password.type = 'password';
})
if (loginNotif != null){
closeNotif.addEventListener('click', function e(){

    loginNotif.style.opacity = '0';
})
window.onload = function e(){

    loginNotif.style.transform = 'translateX(-80px)';
    loginNotif.style.opacity = '1';
}}