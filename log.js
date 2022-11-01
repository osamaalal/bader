// Coder Shiyar   -   https://youtube.com/codershiyar
// ----------------------------------------------------


let arabic = document.getElementById("arabic");
let english = document.getElementById("english");
let bage = document.getElementById("bage");
let welcome = document.getElementById("welcome-text");
let about = document.getElementById("about");
let aboutText = document.getElementById("about-text");
let contact = document.getElementById("contact");

arabic.onclick = ()=>{
    setLanugage("arabic");
    localStorage.setItem("Lang","arabic");
};

english.onclick = ()=>{
    setLanugage("english");
    localStorage.setItem("Lang","english");
};

onload = ()=>{
    setLanugage(localStorage.getItem("Lang"));
};
function setLanugage(getLanuage){
if(getLanuage === "arabic"){
    bage.innerHTML = "الصفحة الرئيسية";
    welcome.innerHTML = "مرحبا بكم  في صفحة مبرمج شيار";
    about.innerHTML = "حولنا";
    aboutText.innerHTML = "انا استاذ برمجيات و مهندس برمجيات";
    contact.innerHTML = "اتصل بنا";
}else if(getLanuage ==="english"){
    bage.innerHTML = "home";
    welcome.innerHTML = "Welcome to website of Coder Shiyar";
    about.innerHTML = "  About US";
    aboutText.innerHTML = "  I am a teacher and a Software Developer";
    contact.innerHTML = "Contact us";

}


}



