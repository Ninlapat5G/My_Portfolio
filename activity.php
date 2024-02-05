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
  text-shadow: 2px 2px 5px blue;
  animation: chcolor1ani 5s infinite;
}

@keyframes chcolor1ani {
  0%{text-shadow: 2px 2px 5px blue;}
  25%{text-shadow: 0px 0px 5px black;}
  50%{text-shadow: -2px -2px 5px purple;}
  75%{text-shadow: 0px 0px 5px black;}
  100%{text-shadow: 2px 2px 5px blue;}
}
.bor{
    box-shadow: 2px 2px 5px blue;
    border: 4px solid black;
    padding: 0px;
    animation: borani 5s infinite;
  }
  @keyframes borani{
    0%{border: 4px solid black;box-shadow: 2px 2px 5px blue;}
    50%{border: 4px solid blue;box-shadow: -2px -2px 5px black;}
    100%{border: 4px solid black;box-shadow: 2px 2px 5px blue;}
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
.pic1 {
    border-radius: 30px;
    border: 2px solid #e12121;
    padding: 10px;   
}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/31.jpg');
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
.bgimganimation4 {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/bganimation4.gif');
  min-height: 100%;
}
.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle; border-radius: 50px;}

.container .content {
    border-radius: 50px;
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

</style>
<body class="bgimganimation4">
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
<nav class="w3-sidebar bgimganimation4 w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
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
  <header class="w3-container w3-center w3-animate-bottom w3-text-black" style="padding:128px 16px" id="home">
    <h1 class="w3-jumbo chcolor1" id="write"></h1>
  </header>
  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content w3-animate-bottom" id="portfolio">
    <h2 class="w3-text-black chcolor1">ประสบการณ์</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding w3-animate-bottom" style="margin:0 -16px">
      <div class="w3-half">
        <div class="container">
            <img src="img/IT.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
              <h3>ฝึกงานตำแหน่ง IT Support ที่พิพิธภัณฑ์ผ้าในสมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ</h3>
            </div>
          </div>
      </div>
</div>
    <br>
      <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content w3-animate-bottom" id="portfolio">
    <h2 class="w3-text-black chcolor1">กิจกรรม</h2>
    <hr class="w3-opacity">
    <!-- Grid for photos -->
    <div class="w3-row-padding w3-animate-bottom" style="margin:0 -16px">
      <div class="w3-half">
        <div class="container">
            <img src="img/16.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
              <h3>ไปค่ายอบรมแกนนำอัตลักษณ์ของมหาวิทยาลัย 3 วัน 2 คืน</h3>
            </div>
          </div>
      </div>
      <div class="w3-half">
        <div class="container">
            <img src="img/19.jpg" alt="Notebook" style="width:100%; height:100%;">
            <div class="content">
              <h3>ไปค่ายสัมนาผู้นำสโมสรนักศึกษาของมหาวิทยาลัย 3 วัน 2 คืน</h3>
            </div>
          </div>
      </div>
    <!-- End photo grid -->
    </div>
    <br>
    <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content w3-animate-bottom" id="portfolio">
    <!-- Grid for photos -->
    <div class="w3-row-padding w3-animate-bottom" style="margin:0 -16px">
      <div class="w3-half">
        <div class="container">
            <img src="img/25.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
              <h3>แข่ง IoT งาน 9 ราชมงคล การปลูกข้าวด้วยเทคนิคแกล้งข้าว</h3>
            </div>
          </div>
      </div>
</div>
<div class="w3-padding-32 w3-content w3-animate-bottom" id="portfolio">
    <h2 class="w3-text-black chcolor1">Certificate</h2>
    <hr class="w3-opacity">
    <!-- Grid for photos -->
    <div class="w3-row-padding w3-animate-bottom" style="margin:0 -16px">
      <div class="w3-half">
        <div class="container">
            <img src="img/CCNAv7.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
              <h3>CCNAv7: Introduction to Networks</h3>
            </div>
          </div>
      </div>
      <div class="w3-half">
        <div class="container">
            <img src="img/simulink.jpg" alt="Notebook" style="width:100%;">
            <div class="content">
              <h3>Simulink Onramp Certificate</h3>
            </div>
          </div>
      </div>
    <!-- End photo grid -->
    </div>
      <center><button onclick="document.location='contact.php'" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
        <i class="fa fa-address-book w3-hover-opacity"></i>ติดต่อ</button></center>
  <!-- End Portfolio Section -->
  </div>


<script>
  var i = 0;
var j = 0;
var k = 0;
var txt1 = 'กิจกรรม';
var speed = 50;
function Write() {
  if (i < txt1.length) {
    document.getElementById("write").innerHTML += txt1.charAt(i);
    i++;
    setTimeout(Write, speed);
  }
}
Write();
function show_intro(){
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
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
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
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
