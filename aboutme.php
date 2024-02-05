<!DOCTYPE html>
<html>
<title>My Portfolio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="highlight.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
body, * {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.menu {
  text-shadow: 2px 2px 5px purple;
  animation: menuch 10s infinite;
}

@keyframes menuch {
  0%{text-shadow: 2px 2px 5px purple;}
  25%{text-shadow: 2px 2px 5px blue;}
  50%{text-shadow: 2px 2px 5px purple;}
  75%{text-shadow: 2px 2px 5px blue;}
  100%{text-shadow: 2px 2px 5px purple;}
}
.chcolor1 {
  text-shadow: 2px 2px 5px purple;
  animation: chcolor1ani 5s infinite;
}

@keyframes chcolor1ani {
  0%{text-shadow: 2px 2px 5px purple;}
  25%{text-shadow: 0px 0px 5px blue;}
  50%{text-shadow: -2px -2px 5px purple;}
  75%{text-shadow: 0px 0px 5px blue;}
  100%{text-shadow: 2px 2px 5px purple;}
}
.chcolor2 {
  color: red;
  animation: mymove2 10s infinite;
}

@keyframes mymove2 {
  0%{color: red;}
  50%{color: green;}
  75%{color: blue;}
  100%{color: red;}
}
.bor{
    box-shadow: 0px 0px 10px red;
    padding: 5px;
    animation: borani 5s infinite;
  }
  @keyframes borani{
    0%{box-shadow: 0px 0px 10px purple;}
    50%{box-shadow: 0px 0px 10px blue;}
    100%{box-shadow: 0px 0px 10px purple;}
  }
.pic1 {
    box-shadow: 2px 2px 10px red;
    border-radius: 30px;
    border: 2px solid red;
    padding: 1px;
    animation: pic1ani 5s infinite;
}
@keyframes pic1ani {
    0%{border: 5px solid red;box-shadow: 0px 0px 10px red;}
    50%{border: 5px solid blue;box-shadow: 0px 0px 10px blue;}
    100%{border: 5px solid red;box-shadow: 0px 0px 10px red;}
  }
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('img/21.jpg');
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
</style>
<body class="bganimation3">
<!-- Sidebar with image -->
<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
  <div class="bgimg"></div>
</nav>

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
    <p class="w3-jumbo text chcolor1" id="name"></p>
    <p>Computer Engineering,RMUTP.</p>
    <img src="img/21.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
    <button onclick="Click()" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
      <i class="w3-hover-opacity"></i>My Passion,My Vision <?php echo "<br>"?>(กดเล่นได้นะครับ^^)
    </button>
    <h2 class="text" id="passion"></h2>
  </header>
  <br><br><br>
  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-dark-gray w3-padding-32 w3-animate-bottom" id="about">
    <h1 class="chcolor1">เกี่ยวกับฉัน</h1>
    <hr class="w3-opacity">
    <h3 class="w3-padding-16 chcolor1">ประวัติส่วนตัว</h3>
    <center><img class="pic1" src="img\20.jpg" alt="Girl in a jacket" width="350" height="350"></center>
    <p>ผมชื่อ นาย พัชรดนัย สุขสอาด ชื่อเล่น นิน อายุ 21 ปี</p>
    <h3 class="w3-padding-16 chcolor1">การศึกษา</h3>
    <ul class="">
      <li>จบการศึกษา: สถาบันเทคโนโลยีจิตรลดา ประเภทวิชาเทคโนโลยีสารสนเทศและการสื่อสาร สาขาเทคโนโลยีสารสนเทศ</li>
      <li>กำลังศึกษา: มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร คณะวิศวกรรมศาสตร์ สาขา วิศวกรรมคอมพิวเตอร์</li>
      <center><a onclick="downloadpdf()" href="pdf/Transcript(TH).pdf" download="ใบ transcript.pdf" class="w3-button w3-light-grey w3-padding-large w3-margin-top">
      <i></i>Transcript
</a></center>
    </ul>
    <h3 class="w3-padding-16 chcolor1">ความสนใจในงาน</h3>
    <p>ผมมีความชอบในงานที่มีการนำ Computer และ Network มาใช้ ยิ่งผมได้ศึกษามากขึ้นเรื่อยๆ ผมยิ่งตื่นเต้นและจินตนาการถึงอนาคตที่รอบตัวผมเต็มไปด้วยเทคโนโลยีที่ฉลาด ในการทำงานที่ผมอยากทำ ผมอยากเป็นส่วนหนึ่งที่ทำให้เทคโนโลยีทุกอย่างในชีวิตประจำวันสามารถสื่อสารกันได้ และเพียงพอสำหรับทุกคน ทำให้ชีวิตผู้คนง่ายขึ้น ในราคาที่สามารถจับต้องได้ครับ
และผมอยากอยู่ในที่ๆ สามารถผลักดันกันให้ดีขึ้นในทุกๆวัน อยู่ในที่ๆมีความท้าทาย ไม่หนีปัญหาหรืออุปสรรคที่เข้ามา และผมมีความเชื่อว่า หากทำงานได้ดี จะไปได้ไกล แต่การมีทีมที่ดี จะประสบความสำเร็จครับ</p>
    <h3 class="w3-padding-16 chcolor1">ตำแหน่งงานที่สนใจ</h3>
    <ul class="">
      <li>*** IOT Engineer ***</li>
      <li>Cyber Security</li>
      <li>Network Engineer</li>
      <li>Software Developer</li>
    </ul>
    <h2 class="w3-padding-16 chcolor1">ความสามารถ</h2>
    <h3 class="w3-padding-16 chcolor1">Computer</h3>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Arduino</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">ESP32,ESP8266</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Raspberry Pi</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">C, C++ Programming</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Python Programming</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Dart Programming</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">HTML, CSS, Javascript</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">PHP, SQL</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Batch,VBScript</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">CiRA Core</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Photoshop, Illustrator, Vegas pro</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">Blender(3D)</div>
    </div>
    <br>
    <h3 class="w3-padding-16 chcolor1">Language</h3>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">ภาษาไทย</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">ภาษาอังกฤษ (Progressive)</div>
    </div>
    <p class="w3-wide"></p>
    <div class="w3-light-grey">
      <div class="w3-container w3-center w3-padding-small w3-black bor" style="width:100%">ภาษาจีน (Basic)</div>
    </div>
    <h3 class="w3-padding-16 chcolor1">โปรเจคที่ทำระหว่างศึกษา</h3>
    <ul class="">
      <li>อุปกรณ์ IOT ด้วย ESPNOW Protocol</li>
      <li>ROS</li>
      <li>Drone</li>
      <li>Remote Software</li>
    </ul><br>
    <center><button onclick="document.location='activity.php'" class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-address-book"></i>ประสบการณ์/กิจกรรม/Certificate
    </button></center>

<script>
// Open and close sidebar
var i = 0;
var j = 0;
var txt = 'Hello World!';
let txt2 = 'Passion: ผมอาจเป็นคนเดินช้า แต่ผมจะไม่หยุดเดิน Vision: พัฒนาศักยภาพ เพื่อสร้างสินค้าระดับโลก';
let txt3;
var speed = 50;
var count = 0;
function Writename() {
  if (i < txt.length) {
    document.getElementById("name").innerHTML += txt.charAt(i);
    i++;
    setTimeout(Writename, speed);
  }
}
Writename();
function Click(){
  if(count==1){txt3=txt2;count=0;}
  else count=1;
  show();
}
function downloadpdf(){
  alert("Download successed");  
}
function show(){
  if(count==1){
  if (j < txt2.length) {
    document.getElementById("passion").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(show, speed);
    }
  }else{
    if(j > 0){
    document.getElementById("passion").innerHTML = txt3.substr(0,j-1);
    j--;
    txt3=txt3.substr(0,j);
    setTimeout(show, speed);
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
