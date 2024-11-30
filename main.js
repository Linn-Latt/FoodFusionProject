// Show Navbar
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
          nav = document.getElementById(navId)

    toggle.addEventListener('click', () =>{
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')

        // Add show-icon to show and hide the menu too
        toggle.classList.toggle('show-icon')
    })      
}
showMenu('nav-toggle', 'nav-menu');
// Show Navbar Ends


// Register PopUp
const popup = document.querySelector(".btnreg");
const closepopup = document.querySelector(".reg-close");

popup.addEventListener("click", function(){
    document.querySelector("#popup").classList.add("open-popup");
});

closepopup.addEventListener("click", function(){
    document.querySelector("#popup").classList.remove("open-popup");
});

// Password
const showpassword = document.getElementById("eclose");
showpassword.addEventListener('click', function(){
    const pwdinput = document.getElementById("password");
    const icon = this;
    if (pwdinput.type === 'password') 
    {
        pwdinput.type = 'text';
        icon.classList.replace('ri-eye-off-line','ri-eye-line');
    } 
    else 
    {
        pwdinput.type = 'password';
        icon.classList.replace('ri-eye-line','ri-eye-off-line');
    }
});

const showrepassword = document.getElementById("reclose");
showrepassword.addEventListener('click', function(){
    const repwdinput = document.getElementById("repassword");
    const reicon = this;
    if (repwdinput.type === 'password') 
    {
        repwdinput.type = 'text';
        reicon.classList.replace('ri-eye-off-line','ri-eye-line');
    } 
    else 
    {
        repwdinput.type = 'password';
        reicon.classList.replace('ri-eye-line','ri-eye-off-line');
    }
});

// Register PopUp Ends


// Cookie Popup
function acceptCookies()
{
    document.getElementById("cookiePopup").style.display = "none";
}
// Cookie Popup Ends






