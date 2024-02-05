<!DOCTYPE html>
<html>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="highlight.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, * {font-family: "Montserrat", sans-serif}
.menu {
  text-shadow: 2px 2px 5px red;
  animation: menuch 10s infinite;
}
.chcolor1 {
  text-shadow: 2px 2px 5px red;
  animation: mymove1 5s infinite;
}

@keyframes mymove1 {
  0%{text-shadow: 2px 2px 5px red;}
  25%{text-shadow: 0px 0px 5px yellow;}
  50%{text-shadow: -2px -2px 5px green;}
  75%{text-shadow: 0px 0px 5px blue;}
  100%{text-shadow: 2px 2px 5px red;}
}
.bor{
    box-shadow: 0px 0px 10px red;
    padding: 5px;
    animation: borani 5s infinite;
  }
  @keyframes borani{
    0%{box-shadow: 0px 0px 10px red;}
    50%{box-shadow: 0px 0px 10px blue;}
    100%{box-shadow: 0px 0px 10px red;}
  }
@keyframes menuch {
  0%{text-shadow: 2px 2px 5px red;}
  25%{text-shadow: 2px 2px 5px yellow;}
  50%{text-shadow: 2px 2px 5px green;}
  75%{text-shadow: 2px 2px 5px blue;}
  100%{text-shadow: 2px 2px 5px red;}
}
.w3-row-padding img {margin-bottom: 12px}
.pic1 {
    border-radius: 30px;
    border: 2px solid #e12121;
    padding: 10px;   
}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/20.jpg');
  min-height: 100%;
}
.bgimgview {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/8.jpg');
  min-height: 100%;
}
.bgimganimation1 {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/bganimation1.gif');
  min-height: 100%;
}
.bgimganimation2 {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/bganimation2.gif');
  min-height: 100%;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: left;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<body class="bgimganimation2">
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar bgimganimation1 w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center w3-animate-bottom w3-text-white">
    <a href="index.php" class="w3-bar-item w3-button w3-hover-border-white" onclick="closeNav()">หน้าหลัก</a>
    <a href="aboutme.php" class="w3-bar-item w3-button w3-hover-border-white" onclick="closeNav()">เกี่ยวกับฉัน</a>
    <a href="activity.php" class="w3-bar-item w3-button w3-hover-border-white" onclick="closeNav()">ประสบการณ์/กิจกรรม/Certificate</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hover-border-white" onclick="closeNav()">ติดต่อ</a>
  </div>
</nav>
<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center w3-animate-bottom w3-text-white" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo chcolor1" id="port"></h1>
    <p class="text chcolor1" id="name"></p>
    <img src="img/2.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <button onclick="document.location='aboutme.php'" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
      <i class="fa fa-address-book w3-hover-opacity"></i>เกี่ยวกับฉัน    </button>
  </header>

  <!-- Portfolio Section -->
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content bor">
    <span class="close">&times;</span>
    <h1 class="menu">INTRODUCTION</h1>
    <hr>
    <p id="intro"></p>
  </div>

</div>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content w3-animate-bottom" id="portfolio">
    <h2 class="w3-text-white chcolor1">Me</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding w3-animate-bottom" style="margin:0 -16px">
      <div class="w3-half bor">
        <img src="img/21.jpg" style="width:100%">
        <img src="img/26.jpg" style="width:100%">
        <img src="img/23.jpg" style="width:100%">
      </div>
      <div class="w3-half bor">
        <img src="img/28.jpg" style="width:100%">
        <img src="img/24.jpg" style="width:100%">
        <img src="img/25.jpg" style="width:100%">
        <img src="img/27.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

<script>
      alert("ยินดีต้อนรับเข้าสู่ Web Portfolio ของผมครับ");
var i = 0;
var j = 0;
var k = 0;
var txt1 = 'Patcharadanai Suksa-ard';
var txt2 = 'My Portfolio';
var txt3 = 'สวัสดีครับ Portfolio นี้ ผมได้ใส่สิ่งที่ผมทำมาในช่วง 3 ปีที่ผมเรียนที่มหาวิทยาลัย (ยกเว้นบางรูปที่เป็นผลงานตอนผมทำโปรเจค IoT ที่บ้าน (ผมทำตอนอยู่ปวช.)) โดยผมได้หารูปกิจกรรม, Certificate เท่าที่สามารถหาได้ โดยหวังว่าท่านจะเห็นความตั้งใจและ passion ในสายงานนี้ในตัวของผมครับ ขอบคุณครับ.';
var speed = 100;
function Writename() {
  if (i < txt1.length) {
    document.getElementById("name").innerHTML += txt1.charAt(i);
    i++;
    setTimeout(Writename, speed);
    if(i==txt1.length) {show_intro();}
  }
}
function Writemyport() {
  if (j < txt2.length) {
    document.getElementById("port").innerHTML += txt2.charAt(i);
    j++;
    setTimeout(Writemyport, speed);
  }
}
function Writeintro() {
  if (k < txt3.length) {
    document.getElementById("intro").innerHTML += txt3.charAt(k);
    k++;
    setTimeout(Writeintro, 10);
  }
}
Writemyport();
Writename();
function show_intro(){
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
  modal.style.display = "block";


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
Writeintro();
}
// Open and close sidebar
function openNav() {
  document.getElementById("mySidebar").style.width = "60%";
  document.getElementById("mySidebar").style.display = "block";
}

function closeNav() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
