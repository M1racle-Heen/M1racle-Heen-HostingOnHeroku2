var tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();

tl.from(".menu-image",.5,{x:200,opacity: 0});
tl.from(".menu-text-center",1,{width:0},"=-.7");


const scene = new ScrollMagic.Scene({
    triggerElement: ".menu",
    triggerHook: "onLeave",
    duration: "70%"
})
    .setPin(".menu")
    .setTween(tl)
    .addTo(controller);

function updatePercentage(){
    tl.progress();
    console.log(tl.progress());
}
function onClickMenu() {
	document.getElementById('menu-bar').classList.toggle('change');
	document.getElementById('nav').classList.toggle('change-btn');
}
function clickHome () {
            window.scroll (0, 0);
}
function clickAbout () {
            window.scroll (0, 650);
}
function clickMenu () {
            window.scroll (0, 1000);
}
function clickContact () {
            window.scroll (0, 1400);
}
function clickMen () {
            window.scroll (0, 5000);
}
function popup1(){
	window.scroll (0, 0);
	var btn = document.getElementById("btn_white1").innerHTML;
	
	if(btn == "Book a table" || btn == "Заказать стол"){
		document.querySelector(".popup1").style.display = "flex";
		$(".popup1").animate({opacity: "1"},"slow");
		document.body.style.overflow = "hidden";
	}else{
		logout1();
	}	
}
function popout1(){
	window.scroll (0, 0);
	document.querySelector(".popup1").style.display = "none";
	$(".popup1").animate({opacity: "0"},"slow");
	document.body.style.overflow = "scroll";
}
function popup(){
	window.scroll (0, 0);
	var btn = document.getElementById("btn_white").innerHTML;
	
	if(btn == "Log In" || btn == "Авторизоваться"){
		document.querySelector(".popup").style.display = "flex";
		$(".popup").animate({opacity: "1"},"slow");
		document.body.style.overflow = "hidden";
	}else{
		logout();
	}	
}
function popout(){
	window.scroll (0, 0);
	document.querySelector(".popup").style.display = "none";
	$(".popup").animate({opacity: "0"},"slow");
	document.body.style.overflow = "scroll";
	document.getElementById("username").value = "";
	document.getElementById("pass").value = "";
}

function login(name){
	var name = document.getElementById("username").value;
	var pass = document.getElementById("pass").value;
	if(name=="" || pass == ""){
		alert("Check your email or password");
		popup();
	}else{
	document.querySelector(".user_profile").style.display = "inline";
	document.getElementById("user_name").innerHTML = name;
	document.getElementById("btn_white").innerHTML = "Log Out";

	popout();
	}
}
function logout1(){
	document.querySelector(".user_profile").style.display = "none";
}


function logout(){
	document.querySelector(".user_profile").style.display = "none";
	document.getElementById("btn_white").innerHTML = "Log In";
}

function retId(name){
	var name = document.getElementById("username").value;
}
