
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
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body{
	font-family: 'Shippori Mincho', serif;
	line-height: 1.5;	
}
.title-text{
	font-size:40px;
	text-align: center;

}

/*narbar*/
#menu-bar{
	width: 50px;
	height: 10px;
	margin: 50px 10px 10px 20px;
	position: fixed;
	z-index: 1;
	cursor: pointer;
}

.bar{
	background: orange;
	border-radius: 10%;
	transition: 4s;
}
#bar1{
	width: 40px;
	height: 10px;
	transform: translateY(-4px);
}

#bar2{
	width: 40px;
	height: 10px;
	
}

#bar3{
	width: 40px;
	height: 10px;
	transform: translateY(4px);
}

.change .bar{
	background: #fff;
}

.change#bar1{
	transform: translateY(6px);
	rotate:z(45deg);
}
.change#bar3{
	transform: translateY(-15px);
	rotate:z(-45deg);
}

.change#bar2{
	opacity: 0;
}
.nav li a{
	text-decoration: none;
	color: orange;
	font-size: 30px;
	text-transform: uppercase;
	font-weight: bold;
}
.nav li:hover{
	color:#fff;
	background: orange;
	padding-left: 10px;
}
.nav li{
	margin: 20px 10px 10px 20px;
	padding-top: 10px;
	list-style-type:none;	
}
.nav{
	display: none;
}

.change-btn{
	display: block;
}

.header{
	min-height: 100vh;
	background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)),
	url('image2.jpg') center/cover no-repeat fixed;
	margin-top: auto;
	
}

.hero{
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center; 
	position: absolute;
	background-attachment: fixed;
	width: 100%;
	height: 100%; 
}

.hero .title{
	color: #fff;
	font-size: 50px;	
}

.hero-button{
    display: inline-block;
    text-decoration: none;
    text-transform: uppercase;
    padding: 13px 20px;
    border-radius: 200px;
    font-weight: bold;
    background: orange;
    color:#fff;
    cursor: pointer;
    border: 2px solid orange;
    margin-top:10px;
  
}
.hero-button:hover{
    background: #fff;
    color: orange;
    border: none;
    

}
/*-webkit-*/
.pulsate{
    animation: pulsate 3s ease-in-out;
    animation-iteration-count:infinite ;
    opacity: .3;
    color: black;
}
@-webkit-keyframes pulsate{
    0% {
        opacity: .3;
    }
    50% {
        opacity: 1;
    }
    100% {
        opacity: .3;
    }

}

/*About us*/
#about{
	padding: 40px;
}

.about{
	margin:30px 0; 
	display: flex;
}
.about-icon .fas{
	font-size: 60px;
	color:orange;
	margin-right: 20px;
}

.about-subtitle{
	text-transform: capitalize;
	color:orange;
	font-size: 25px;
}

.about-info{
	margin-top: 10px;
	line-height: 1.5;
}

.about-icon:hover .fas, 
.about-subtitle:hover{
	transition: transform 2s ease,color 2s ease;
	transform: translateY(-10px);
	color: #cd6100;
	cursor: pointer;
}
@media screen and (min-width: 576px){
	.about-center{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.about{
		flex: 0 0 calc(50% -16px);
	}
}

@media screen and (min-width: 972px){
	.about{
		flex: 0 0 calc(33.3% - 16px);
	}
}

.menu-image{
	min-height: 80vh;
	background: url('image2.jpg') center/cover fixed no-repeat;
}
.menu-text{
	min-height: 80vh;
	align-items: center;
	background: orange;
	columns: #000;
	padding: 40px 0;
}

.menu-text-center{
	width: 90%;
	margin: 0 auto;
}

.menu-text h1{
	font-size: 40px;
	text-transform: uppercase;
	margin-bottom: 10px;
}

.menu-text p{
	margin: 20px 0;
	line-height: 2;
}

.menu-text a{
	display: :inline-block;
	text-decoration: none;
	text-transform: uppercase;
	padding: 13px 20px;
	border-radius: 200px;
	font-weight: bold;
	background: rgb(10,10,10);
	color:orange;
	cursor: pointer;
	border:2px solid #000;
}

.menu-text a:hover{
	color:orange;
	background: #fff;
	border: none;
}

@media screen and (min-width: 776px){
	.menu{
		display: flex;
	}
	.menu-text{
		flex: 0 0 30%;
	}
	.menu-image{
		flex: 0 0 70%;
		clip-path: polygon(0 0,100% 0,50% 100%,0 100%);
	}
	.menu{
		background: orange;
	}
}

/*icons*/
#social-icons{
	height: 150px;
	background: #fff;
	text-align: center;
	padding: 50px 0 50px 0;
}

#social-icons a{
	display: inline-block;
	padding: 5px 10px;
	margin: 0 5px;
	font-size: 40px;
	border-radius: 5px;
	transition: transform 2s ease,color 2s ease;
}

#social-icons a:hover{
	transform: translateY(-20px);
}

.facebook{
	color: #3b5998;
}

.twitter{
	color:#38a1f3;
}

.instagram{
	color:#e1306c;
}

.plus{
	color:#db4a39;
}

/*Numbers*/
.number{
	text-align: center;
	background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.4)),
	url('image1.jpg') center/cover no-repeat fixed;
	padding: 60px 0;
	color:#fff;
}
.number p{
     font-size: 30px;
     font-weight: bold;
 }
.number:hover{
    color: orange;
}
.number .fas{
    font-size: 60px;
    margin: 20px 0;
}
.number h3{
    text-transform: uppercase;
}
@media screen and (min-width:576PX){
    #numbers {
        display: grid;
    grid-template-columns: 1fr 1fr;
    }
}
@media screen and (min-width: 992px){
    #numbers{
        grid-template-columns: repeat(4, 1fr);
    }
}
/*Cards*/
#food{
	padding: 20px;
}

.food-container{
	max-width: 90vw;
	margin: 0 auto;
}
.food-card{
	position: relative;
	background: linear-gradient(rgba(205,96,0,0.7),rgba(205,96,0,0.7));
	margin: 20px 0;
	color #000;
	overflow: hidden;
	padding: 3px;
	border-radius: 16px;
	border: 1px solid orange;
	box-shadow: 2px 3px 1px 1px #cd6100;
}
#food img{
    width: 100%;
    min-height: 100%;
    display: block;
    transition: transform 4s;
}

.img-text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    opacity: 0;
    transition: opacity 4s;

}
.img-footer{
    display: flex;
    justify-content: space-between;
    width: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    padding: 10px;
    font-size: 20px;
    opacity: 0;
    color: #000;
    transition: opacity 4s;
}
.img-text h1{
    font-size: 30px;
    margin-bottom: 10px;
}
.food-card:hover img{
    opacity: 0.4;
    transform: scale(1.3);
}
.food-card:hover .img-text,
.food-card:hover  .img-footer{
    opacity:1;
}

.food-btn{
    display: inline-block;
    background:#000;
    text-decoration: none;
    text-transform: capitalize;
    padding: 12px 32px;
    color: #fff;
    font-weight: bold;
    border-radius: 180px;
    cursor: pointer;
    margin-top: 16px;
    transition: all 0.3s ease-in-out;
    font-size:18px;
    outline:none;
}

.food-btn:hover{
    color: orange;
    background:#ffff;
    border: #000;
    outline: none;
}

.fas{
    font-size: 30px;
}

@media screen and (min-width: 576px){
    .food-container{
       display: grid;
       grid-template-columns: repeat(2, 1fr);
       grid-column-gap: 16px;
    }
}

@media screen and (min-width: 992px){
    .food-container{
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     grid-column-gap:16px;
    }
}

#gallery{
    padding: 40px;
    background: #fff;
}
.gallery-item{
    background: linear-gradient(rgb(rgba(241, 161, 13)) rgb(rgb(255, 165, 0)));
}
.gallery-item img{
    display:block;
    width: 100%;
    opacity: 1;
    transition: opacity 2s ease;
}
.gallery-item img:hover{
    opacity: 0.5;
}
@media screen and (min-width:576px){
    #gallery-center{
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
}
@media screen and (min-width:992px){
    #gallery-center{
        grid-template-columns: repeat(4, 1fr);
    }
}

.footer{
    background:#000;
    text-align: center;
}
.footer .tet{
	text-transform: uppercase;
color: #fff;
font-size: 24px;
margin: 30px 20px;
cursor: pointer;
}
.footer .text{
text-transform: uppercase;
color: #fff;
font-size: 24px;
margin-top: 20px;
}
.kek{
	display: block;
	z-index: 2;
	opacity: 0;
}
.popup1{
	position: absolute;
	top: 10px;
	display: none;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
	background-color: rgb(0,0,0,0.6);
	z-index: 2;
	opacity: 0;
}
.popup1-content{
	background-color:white;
	height: 550px;
	width: 600px;
	position: relative;
	padding: 10px;
	border-radius: 10px;
	text-align: center;
}
.popup{
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
	width: 100%;
	height: 100%;
	background-color: rgb(0,0,0,0.6);
	z-index: 2;
	opacity: 0;
}
.popup-content{
	background-color:white;
	height: 600px;
	width: 600px;
	position: relative;
	padding: 20px;
	border-radius: 10px;
	text-align: center;
}
input{
	display: block;
	margin: 30px auto;
	width: 50%;
	padding: 8px;
}
h4{
	padding: 2px;
}
.icn{
	margin: auto;
  width: 50%;
  border: 3px solid orange;
  padding: 10px;
}
.empty{
	margin: 10px auto;
  width: 50%;
  border: 0.000001px solid orange;
  
}
.closed{
	position: absolute;
	top:-10px;
	right: -10px;
	border-radius: 50%;
	border:1px solid black; 
	cursor: pointer;
}
.popup button{
	display:inline-block;
	text-decoration: none;
	text-transform: uppercase;
	padding: 13px 20px;
	border-radius: 200px;
	font-weight: bold;
	background: rgb(10,10,10);
	color:orange;
	cursor: pointer;
	border:2px solid #000;
}

.popup1 button{
	display:inline-block;
	text-decoration: none;
	text-transform: uppercase;
	padding: 13px 20px;
	border-radius: 200px;
	font-weight: bold;
	background: rgb(10,10,10);
	color:orange;
	cursor: pointer;
	border:2px solid #000;
}

.user_profile{
	position: absolute;
	top: 40px;
	right: 20px;
	margin: 0;
	background-color:rgb(0,0,0,0.6); 
	border-radius: 5px;
	z-index: 1;
	display: none;
}
#user_name{
	margin: 0;
	padding: 10px;
	display: inline;
	font-size: 25px;
	color: white;
}

.title-text2{
	font-size:40px;
	text-align: center;
}
