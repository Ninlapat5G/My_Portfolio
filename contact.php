<!DOCTYPE html>
<html>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="highlight.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.menu {
  text-shadow: 2px 2px 5px red;
  animation: menuch 10s infinite;
}
@keyframes menuch {
  0%{text-shadow: 2px 2px 5px red;}
  25%{text-shadow: 2px 2px 5px yellow;}
  50%{text-shadow: 2px 2px 5px green;}
  75%{text-shadow: 2px 2px 5px blue;}
  100%{text-shadow: 2px 2px 5px red;}
}
.chcolor1 {
  text-shadow: 2px 2px 5px red;
  animation: chcolor1ani 5s infinite;
}

@keyframes chcolor1ani {
  0%{text-shadow: 2px 2px 5px red;}
  25%{text-shadow: 0px 0px 5px yellow;}
  50%{text-shadow: -2px -2px 5px green;}
  75%{text-shadow: 0px 0px 5px blue;}
  100%{text-shadow: 2px 2px 5px red;}
}
.fb{
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/fb.jpg');
  min-height: 100%;
}
.bor{
    box-shadow: 0px 0px 10px red;
    border: 5px solid red;
    padding: 0px;
    animation: borani 5s infinite;
  }
  @keyframes borani{
    0%{border: 5px solid red;box-shadow: 0px 0px 10px red;}
    50%{border: 5px solid blue;box-shadow: 0px 0px 10px blue;}
    100%{border: 5px solid red;box-shadow: 0px 0px 10px red;}
  }
  .borin{
    box-shadow: 2px 2px 10px red;
    border: 0px solid red;
    padding: 0px;
    animation: borinani 5s infinite;
  }
  @keyframes borinani{
    0%{border: 0px solid red;box-shadow: 2px 2px 10px red;}
    50%{border: 0px solid blue;box-shadow: -2px -2px 10px blue;}
    100%{border: 0px solid red;box-shadow: 2px 2px 10px red;}
  }
.box {
  background-color: white 0.5;
  width: auto;
  border: 5px solid green;
  padding: 50px;
  margin: 20px;
  animation: boxani 5s infinite;
}
@keyframes boxani {
  0%{border: 5px solid green;}
  25%{border: 5px solid red;}
  50%{border: 5px solid blue;}
  75%{border: 5px solid red;}
  100%{border: 5px solid green;}
}
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
.bgimg8 {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/8.jpg');
  min-height: 100%;
}
.bganimation3 {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/bganimation4.gif');
  min-height: 100%;
}
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
.close {
  color: #aaaaaa;
  float: right;
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
<body class="bganimation3">
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>
<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content borin">
    <span class="close">&times;</span>
    <h1 class="menu">THANK YOU</h1>
    <hr>
    <p id="end"></p>
  </div>
</div>
<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar bganimation3 w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center w3-animate-bottom w3-text-black">
    <a href="index.php" class="w3-bar-item w3-button w3-hover-black" onclick="closeNav()">หน้าหลัก</a>
    <a href="aboutme.php" class="w3-bar-item w3-button w3-hover-black" onclick="closeNav()">เกี่ยวกับฉัน</a>
    <a href="activity.php" class="w3-bar-item w3-button w3-hover-black" onclick="closeNav()">ประสบการณ์/กิจกรรม/Certificate</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-hover-black" onclick="closeNav()">ติดต่อ</a>
  </div>
</nav>
<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center w3-animate-bottom" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo chcolor1" id="write"></h1>
    <center>
      <img src="img\21.jpg" class="rounded-circle bor" alt="Cinque Terre" width="200" height="200"><br>
    </center>
  </header>
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-dark-gray w3-padding-32 w3-animate-bottom" id="about">
    <hr class="w3-opacity">
    <div class="w3-section">
        <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right chcolor1"></i>ที่อยู่: 60 ถนน ศรีอยุธยา แขวง วชิรพยาบาล เขตดุสิต กทม. 10300</p>
        <p><a href="tel: 088-210-3791" class="fa fa-phone fa-fw w3-xxlarge w3-margin-right chcolor1"></a> Phone: 0882103791</p>
        <p><a href="mailto: Patcharadanai-s@rmutp.ac.th" class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right chcolor1"></a> Gmail: Patcharadanai-s@rmutp.ac.th</p>
        <p><a href="https://www.facebook.com/profile.php?id=100026178399809"><img src="img/fb.png" class="w3-xxlarge w3-margin-right chcolor1" width="45px" height="45px"></a>Facebook: Ninlapat Suksa-ard</p>
        <p><a href="https://github.com/Ninlapat5G"><img src="img/git.png" class="w3-xxlarge w3-margin-right chcolor1" width="45px" height="45px"></a>Github: Ninlapat5G</p>
      </div>
      <footer class="w3-container w3-padding-10 w3-center w3-opacity w3-xlarge" style="margin:-24px">
        <button onclick="thank()" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
        <img src="img\17.jpg" class="w3-hover-opacity" width="45px" height="45px"></i>
        </button>
          </footer>
<script>
var i = 0;
var j = 0;
var txt = 'ช่องทางติดต่อ';
var txt2 = 'ขอบคุณที่เข้ามาอ่านจนจบครับ';
var speed = 50;
function Write() {
  if (i < txt.length) {
    document.getElementById("write").innerHTML += txt.charAt(i);
    i++;
    setTimeout(Write, speed);
  }
}
Write();
function show_intro(){
  if (j < txt2.length) {
    document.getElementById("end").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(show_intro, speed);
  }
}
function thank(){
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
    document.getElementById("end").innerHTML = '';
    j=0;
  }
}
show_intro();
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
