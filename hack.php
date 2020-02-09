
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hacking virus stuff</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
      <style>
         * { box-sizing: border-box; }
		 /*** Works on common browsers ***/
::selection {
    background: rgb(0,125,0);
	background: rgba(0,125,0,0.8);
    color: #fff;
}
/*** Mozilla based browsers ***/
::-moz-selection {
    background: rgb(0,125,0);
	background: rgba(0,125,0,0.8);
    color: #fff;
}
/***For Other Browsers ***/
::-o-selection {
    background: rgb(0,125,0);
	background: rgba(0,125,0,0.8);
    color: #fff;
}
::-ms-selection {
    background: rgb(0,125,0);
	background: rgba(0,125,0,0.8);
    color: #fff;
}
/*** For Webkit ***/
::-webkit-selection {
    background: rgb(0,125,0);
	background: rgba(0,125,0,0.8);
    color: #fff;}
         body {
         font-family: sans-serif;
         text-align: center;
         background: black;
         color:white;
         -webkit-user-select: none;
         -moz-user-select: none;
         -o-user-select: none;
         -ms-user-select: none;
         -khtml-user-select: none;     
         user-select: none;
         }
         .scene {
         border: none;
         margin: 40px 0;
         position: relative;
         width: 210px;
         height: 140px;
         margin: 80px auto;
         perspective: 750px;
         }
         .carousel {
         width: 100%;
         height: 100%;
         position: absolute;
         transform: translateZ(-288px);
         transform-style: preserve-3d;
         transition: transform 1s;
         }
         .carousel__cell {
         position: absolute;
         width: 190px;
         height: 120px;
         left: 10px;
         top: 10px;
         border: 2px solid #f00;
         line-height: 116px;
         font-size: 80px;
         font-weight: bold;
         color: #f00;
         text-align: center;
         transition: transform 1s, opacity 1s;
         background: #f00;
         background: rgba(0,0,0, 0.7);
         }
         .carousel-options {
         color: #fff;
         text-align: center;
         position: relative;
         z-index: 2;
         background: rgba(0, 0, 0, 0.8);
         }
         .cells-range {
         -webkit-appearance: none;
         width: 25%;
         height: 4px;
         border-radius: 1px;
         background: #fff;
         outline: none;
         opacity: 0.8;
         -webkit-transition: .2s;
         transition: opacity .2s;
         }
         .cells-range:hover {
         opacity: 1;
         }
         .cells-range::-webkit-slider-thumb {
         -webkit-appearance: none;
         appearance: none;
         width: 15px;
         height: 15px;
         border-radius: 50%;
         background: #fff;
         cursor: pointer;
         }
         .cells-range::-moz-range-thumb {
         width: 15px;
         height: 15px;
         border-radius: 50%;
         background: #fff;
         cursor: pointer;
         }
         /* ---- scene--transform-func ---- */
         .scene--transform-func {
         display: block;
         width: 200px;
         height: 200px;
         margin: 60px 60px 60px 0;
         perspective: 600px;
         }
         .transform-func-panel {
         width: 200px;
         height: 200px;
         background: hsla(0, 100%, 50%, 0.7);
         line-height: 200px;
         color: white;
         font-size: 18px;
         text-align: center;
         }
         input[type="password"]:focus,input[type="password"]:hover,input[type="text"]:focus,input[type="text"]:hover{
         border-color: #0f0;
         color:#0f0;
         outline: 0;
         -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
         -moz-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
         box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(10, 240, 10, 0.6);
         }
         input[type="password"],input[type="text"]{
         cursor:text;
         text-align: center;
         width: 80%;
         max-width: 250px;
         min-height:20px;
         background-color: rgb(0, 0, 0);
         padding: 2px 20px;
         margin: 8px 0;
         display: inline-block;
         border: 1px solid #ccc;
         border-radius: 2px;
         box-sizing: border-box;
         color: #fff;
         font-size:20px;
         }
         .btt button{
         font-size:30px;
         width: 15%;
         max-width: 100px;
         color: #eee;
         background-color: #000;
         background-color: rgba(0,0,0,0);
         padding: 0;
         margin: 8px 0;
         border: none;
         border-radius: 1px;
         cursor: pointer;
         outline:none;
         }
         .btt button:hover{
         color:#0f0;
         outline: 0;
         }
         .pass input[type="button"],.pass button{
         font-size:20px;
         width: 15%;
         max-width: 50px;
         color: #fff;
         background-color: #000;
         padding: 3px;
         margin: 8px 0;
         border: 1px solid #fff;
         border-radius: 2px;
         cursor: pointer;
         outline:none;
         }
         .pass input[type="button"]:hover,.pass button:hover{
         color:#0f0;
         border:1px solid #0f0;
         outline: 0;
         }
         .pass {
         display: none;
         }
         * {margin: 0; padding: 0;}
         .tree ul {
         padding-top: 20px; position: relative;
         transition: all 0.5s;
         -webkit-transition: all 0.5s;
         -moz-transition: all 0.5s;
         }
         .tree li {
         float: left; text-align: center;
         list-style-type: none;
         position: relative;
         padding: 20px 5px 0 5px;
         transition: all 0.5s;
         -webkit-transition: all 0.5s;
         -moz-transition: all 0.5s;
         }
        
         .tree li::before, .tree li::after{
         content: '';
         position: absolute; top: 0; right: 50%;
         border-top: 1px solid #ccc;
         width: 50%; height: 20px;
         }
         .tree li::after{
         right: auto; left: 50%;
         border-left: 1px solid #ccc;
         }
         /*We need to remove left-right connectors from elements without 
         any siblings*/
         .tree li:only-child::after, .tree li:only-child::before {
         display: none;
         }
        
         .tree li:only-child{ padding-top: 0;}
         /*Remove left connector from first child and 
         right connector from last child*/
         .tree li:first-child::before, .tree li:last-child::after{
         border: 0 none;
         }
        
         .tree li:last-child::before{
         border-right: 1px solid #ccc;
         border-radius: 0 5px 0 0;
         -webkit-border-radius: 0 5px 0 0;
         -moz-border-radius: 0 5px 0 0;
         }
         .tree li:first-child::after{
         border-radius: 5px 0 0 0;
         -webkit-border-radius: 5px 0 0 0;
         -moz-border-radius: 5px 0 0 0;
         }
         
         .tree ul ul::before{
         content: '';
         position: absolute; top: 0; left: 50%;
         border-left: 1px solid #ccc;
         width: 0; height: 20px;
         }
         .tree li a{
         border: 1px solid #ccc;
         padding: 5px 10px;
         text-decoration: none;
         color: #666;
         font-family: arial, verdana, tahoma;
         font-size: 11px;
         display: inline-block;
         cursor:pointer;
         border-radius: 5px;
         -webkit-border-radius: 5px;
         -moz-border-radius: 5px;
         transition: all 0.5s;
         -webkit-transition: all 0.5s;
         -moz-transition: all 0.5s;
         }
         
         .tree li a:hover, .tree li a:hover+ul li a {
         background: #0f0; color: #000; border: 1px solid #0c0;
         }
         /Connector styles on hover/
         .tree li a:hover+ul li::after, 
         .tree li a:hover+ul li::before, 
         .tree li a:hover+ul::before, 
         .tree li a:hover+ul ul::before{
         border-color:  #0f0;
         }
         .tree{display:none}
         /* The popup form - hidden by default */
         .form-popup {
         display: none;
         position: fixed;
         bottom: 10px;
         right: 15px;
         border: 1px solid #fff;
         z-index: 9;
         max-width: 300px;
         max-height: 280px;
         background-color: #000;
         background-color: rgba(0,0,0,0.9);
         overflow: hidden;
         }
         /* Add styles to the form container */
         .form-container {
         max-width: 300px;
         padding: 10px;
         
         }
         /* Full-width input fields */
         .form-container input[type=text], .form-container input[type=password] {
         font-size:15px;
         width: 100%;
         padding:6px;
         }
         /* Set a style for the submit/login button */
         .form-container .btn {
         background-color: #FFF;
         background-color: rgba(0,0,0,0);
         color: #0f0;
         padding: 16px 20px;
         border: 1px solid #0f0;
         cursor: pointer;
         width: 90%;
         margin-bottom:10px;
         opacity: 0.8;
         border-radius:2px;
         }
         /* Add a red background color to the cancel button */
         .form-container .cancel {
         color: #f00;
         border: 1px solid #f00;
         }
         /* Add some hover effects to buttons */
         .form-container .btn:hover, .open-button:hover {
         opacity: 1;
         }
         canvas{display:block;  max-height:300px;}
         .form-popup2 {
         display: none;
         position: fixed;
         top: 10px;
         overflow: hidden;
         left: 15px;
         border: 1px solid #fff;
         z-index: 8;
         
         }
.clt, .clt ul, .clt li {
     position: relative;
     color:#0f0;
}

.clt ul {
    list-style: none;
    padding-left: 32px;
}
.clt li::before, .clt li::after {
    content: "";
    position: absolute;
    left: -12px;
}
.clt li::before {
    border-top: 1px solid #0f0;
    top: 9px;
    width: 8px;
    height: 0;
}
.clt li::after {
    border-left: 1px solid #0f0;
    height: 100%;
    width: 0px;
    top: 2px;
}
.clt ul > li:last-child::after {
    height: 8px;
}
th, td {
text-align:center;
  height:45px;
  width:40px;
  font-size:30px;
}
table{
border:none;
}
th, td {
  padding: 25px;
}

.t  { border:1px solid #fff;color:#fff; }
.t2 { border:1px solid #0f0;color:#0f0; }
.t:hover {
  background-color:#f00;
}
.small {
    display:none;
	text-align:left;
 }
@media screen and (max-width: 800px){
 .wide {
     display:none;
 }
  .small {
    display:block;
 }
}
      </style>
   </head>
   <body>
   <div class="wide">
      <div style="margin-top: 10%;">
         <span style="display:none;">
         <input id="j" type="radio" name="showpass" onchange="show1();showtree1();closeForm();">
         <input id="th" type="radio" name="showpass" onchange="show2();">
         </span>
         <div class="scene">
            <label for="j">
               <div class="carousel">
                  <div class="carousel__cell">1<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">2<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">3<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">4<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">5<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">6<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">7<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">8<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">9<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">10<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">11<i class="fas fa-lock"></i></div>
                  <div class="carousel__cell">12<i class="fas fa-lock"></i></div>
            <label for="th"><div class="carousel__cell" style="color:#0f0; border:2px solid #0f0">13<i class="fas fa-unlock-alt"></i></div></label>
            <div class="carousel__cell">14<i class="fas fa-lock"></i></div>
            <div class="carousel__cell">15<i class="fas fa-lock"></i></div>
            </div></label>
         </div>
      </div>
      <div class="carousel-options">
      <p>
         <label style="font-size:1px;color:#000;">
         <input class="cells-range" type="range" min="3" max="15" value="9" />
         </label>
      </p>
      <p class="btt">
         <button class="previous-button"><i class="far fa-arrow-alt-circle-left"></i></button>
         <button class="next-button"><i class="far fa-arrow-alt-circle-right"></i></button>
      </p>
      <p class="pass" id="pass">
         <input type="password" id="tx" onkeyup="if(this.value.length > 0) document.getElementById('start_button').disabled = false; else document.getElementById('start_button').disabled = true;">
         <button id="start_button" onclick="showtree2();document.getElementById('tx').disabled = true;" disabled>
         <i class="fas fa-key"></i></button>
      <div id="tree" class="tree">
         <ul>
            <li>
               <a>Mainframe</a>
               <ul>
                  <li>
                     <a onclick="openForm4()">
                        Unknown<!--combination lock-->
                     </a>
                     <ul>
                        <li>
                           <a>
                             <i class="fas fa-lock"></i>&nbsp;Locked
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a>
                        Breach<!-- cube -->
                     </a>
                     <ul>
                        <li>
                               <a  onclick="openForm3()">Files</a><!-- js tree -->
                          
                        </li>
                        <li>
                           <a>Process<!-- plans --></a>
                           <ul>
                              <li>
                                 <a  onclick="openForm2()">Code</a>
                              </li>
                              <li>
                                 <a>IP Adress</a>
                              </li>
                              <li>
                                 <a>SHA256-encrypt_protocol</a>
                              </li>
                           </ul>
                        </li>
                        <li><a onclick="openForm()">Database</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
      </p>
      <div class="dragable form-popup" id="myForm4" style="max-width:260px;max-height:350px;right:10px;top:15px;">
         <form  class="form-container">
           <table>
  <tr>
  <td class='t' onclick='cSwap(this)' >&becaus;</td> 
    <td class='t' onclick='cSwap(this)' >&DJcy;</td>
    <td class='t' onclick='cSwap(this)' >&iquest;</td>
  </tr>
  <tr>
    <td class='t' onclick='cSwap(this)' >&nbsp;</td>
    <td class='t' onclick='cSwap(this)' >&prop;</td>
    <td class='t' onclick='cSwap(this)' >&Omega;</td>
  </tr>
  <tr>
    <td class='t' onclick='cSwap(this)' >&star;</td>
    <td class='t' onclick='cSwap(this)' >&race;</td>
    <td class='t' onclick='cSwap(this)' >&elsdot;</td>
  </tr>
</table>
<button type="button" class="btn cancel" onclick="closeForm4()" >Close</button>
         </form>
      </div>
      
      <div class="dragable form-popup" id="myForm">
         <form action="/action_page.php" class="form-container">
            <label for="email"><b>Username</b></label>
            <input type="text" placeholder="Username" name="email"  required>
            <label for="psw"><b>Password</b></label>
            
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" class="btn">Access Database</button>
            <button type="button" class="btn cancel" onclick="closeForm()" >Close</button>
         </form>
      </div>
      <div class="dragable form-popup2" id="myForm2">
         <form action="/action_page.php" class="form-container" style="background-color:#000;">
            <canvas id="c"></canvas>
            <button type="button" class="btn cancel" onclick="closeForm2()" >Close</button>
         </form>
      </div>
      <div class="dragable form-popup" id="myForm3" style="max-width:240px;max-height:540px;left:10px;">
      <form class="form-container">
         
         <div class="clt" style="text-align:left;">
  <ul>
    <li>
      <i class="far fa-folder-open"></i>Private
      <ul>
        <li>
          <i class="far fa-folder-open"></i>Classified
          <ul>
            <li><i class="far fa-file-code"></i>&nbsp;Compromised.html</li>
            <li><i class="far fa-file-image"></i>&nbsp;IMG_69.kek</li>
          </ul>
        </li>
        <li>
          <i class="far fa-folder-open"></i>Important
          <ul>
            <li><i class="far fa-file-code"></i>&nbsp;Exploits.php</li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <i class="far fa-folder-open"></i>public_html
      <ul>
        <li><i class="far fa-folder"></i>&nbsp;pictures
		<ul>
		<li><i class="far fa-file-image"></i>&nbsp;Download.png</li>
		</ul>
		</li>
		<li><i class="far fa-file"></i>&nbsp;.htaccess</li>
<li><i class="far fa-file-code"></i>&nbsp;404.php</li>
<li><i class="far fa-file-code"></i>&nbsp;about.php</li>
<li><i class="far fa-file-code"></i>&nbsp;action_page.php</li>
<li><i class="far fa-file-code"></i>&nbsp;bj.php</li>
<li><i class="far fa-file-code"></i>&nbsp;connect.php</li>
<li><i class="far fa-file-image"></i>&nbsp;favicon.ico</li>
<li><i class="far fa-file-image"></i>&nbsp;favicon.png</li>
<li><i class="far fa-file-code"></i>&nbsp;hack.php</li>
<li><i class="far fa-file-code"></i>&nbsp;index.php</li>
<li><i class="far fa-file-code"></i>&nbsp;J1.css</li>
<li><i class="far fa-file-image"></i>&nbsp;logo2.png</li>
<li><i class="far fa-file-code"></i>&nbsp;post.php</li>
      </ul>
    </li>
	<li>
      <i class="far fa-folder-open"></i>tmp
      <ul>
        <li>[Empty directory]</li>
      </ul>
    </li>
  </ul> 
 </div>
<button type="button" class="btn cancel" onclick="closeForm3()" >Close</button></form>
      </div>
      <span style="display:none" >
         <p>
            Orientation:
            <label>
            <input type="radio" name="orientation" value="horizontal" checked />
            X-axis
            </label>
            <label>
            <input type="radio" name="orientation" value="vertical" />
            Y-axis
            </label>
         </p>
      </span>
      <div style="width:10px;height:50px;color:#000;">
         <br /><br />
         <p>.</p>
      </div></div></div>
	  <div style=";color:#0f0;" class="small">
	  <p>
═══════════════╡<br>
<i class="far fa-folder-open"></i><b>&nbsp;/</b><br>
╠═<i class="far fa-folder-open"></i>&nbsp;<b>public_html</b><br>
║&nbsp;&nbsp;╠═<i class="far fa-file"></i>&nbsp;.htaccess<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;404.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;about.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;action_page.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;bj.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;connect.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-image"></i>&nbsp;favicon.ico<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-image"></i>&nbsp;favicon.png<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;hack.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;index.php<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;J1.css<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-code"></i>&nbsp;J2.css<br>
║&nbsp;&nbsp;╠═<i class="far fa-file-image"></i>&nbsp;logo2.png<br>
║&nbsp;&nbsp;╚═<i class="far fa-file-code"></i>&nbsp;post.php<br>
╚═<i class="far fa-folder-open"></i>&nbsp;<b>tmp</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;╚═<i>[Empty&nbsp;directory]</i><br>
═══════════════╡
</p>
	  </div>
   <!-- </body> -->
   <script>
   var carousel = document.querySelector('.carousel');
var cells = carousel.querySelectorAll('.carousel__cell');
var cellCount; // cellCount set from cells-range input value
var selectedIndex = 0;
var cellWidth = carousel.offsetWidth;
var cellHeight = carousel.offsetHeight;
var isHorizontal = true;
var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
var radius, theta;
// console.log( cellWidth, cellHeight );
function rotateCarousel() {
    var angle = theta * selectedIndex * -1;
    carousel.style.transform = 'translateZ(' + -radius + 'px) ' +
        rotateFn + '(' + angle + 'deg)';
}
var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener('click', function() {
    selectedIndex--;
    rotateCarousel();
});
var nextButton = document.querySelector('.next-button');
nextButton.addEventListener('click', function() {
    selectedIndex++;
    rotateCarousel();
});
var cellsRange = document.querySelector('.cells-range');
cellsRange.addEventListener('change', changeCarousel);
cellsRange.addEventListener('input', changeCarousel);

function changeCarousel() {
    cellCount = cellsRange.value;
    theta = 360 / cellCount;
    var cellSize = isHorizontal ? cellWidth : cellHeight;
    radius = Math.round((cellSize / 2) / Math.tan(Math.PI / cellCount));
    for (var i = 0; i < cells.length; i++) {
        var cell = cells[i];
        if (i < cellCount) {
            // visible cell
            cell.style.opacity = 1;
            var cellAngle = theta * i;
            cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
        } else {
            // hidden cell
            cell.style.opacity = 0;
            cell.style.transform = 'none';
        }
    }
    rotateCarousel();
}
var orientationRadios = document.querySelectorAll('input[name="orientation"]');
(function() {
    for (var i = 0; i < orientationRadios.length; i++) {
        var radio = orientationRadios[i];
        radio.addEventListener('change', onOrientationChange);
    }
})();

function onOrientationChange() {
    var checkedRadio = document.querySelector('input[name="orientation"]:checked');
    isHorizontal = checkedRadio.value == 'horizontal';
    rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
    changeCarousel();
}
// set initials
onOrientationChange();


//impractical
function show1() {
    document.getElementById('pass').style.display = 'none';
}

function show2() {
    document.getElementById('pass').style.display = 'block';
}

function showtree1() {
    document.getElementById('tree').style.display = 'none';
}

function showtree2() {
    document.getElementById('tree').style.display = 'inline-block';
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}

function openForm2() {
    document.getElementById("myForm2").style.display = "block";
}
function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
}

function openForm3() {
    document.getElementById("myForm3").style.display = "block";
}
function closeForm3() {
    document.getElementById("myForm3").style.display = "none";
}

function openForm4() {
    document.getElementById("myForm4").style.display = "block";
}
function closeForm4() {
    document.getElementById("myForm4").style.display = "none";
}
//end of retardation

var c = document.getElementById("c");
var ctx = c.getContext("2d");

//making the canvas full screen
c.height = window.innerHeight;
c.width = window.innerWidth;

//chinese characters - taken from the unicode charset
var chinese = "田由甲申甴电甶男甸甹町画甼甽甾甿畀畁畂畃畄畅畆畇畈畉畊畋界畍畎畏畐畑";
//converting the string into an array of single characters
chinese = chinese.split("");

var font_size = 10;
var columns = c.width / font_size; //number of columns for the rain
//an array of drops - one per column
var drops = [];
//x below is the x coordinate
//1 = y co-ordinate of the drop(same for every drop initially)
for (var x = 0; x < columns; x++)
    drops[x] = 1;

//drawing the characters
function draw() {
    //Black BG for the canvas
    //translucent BG to show trail
    ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
    ctx.fillRect(0, 0, c.width, c.height);

    ctx.fillStyle = "#0F0"; //green text
    ctx.font = font_size + "px arial";
    //looping over drops
    for (var i = 0; i < drops.length; i++) {
        //a random chinese character to print
        var text = chinese[Math.floor(Math.random() * chinese.length)];
        //x = i*font_size, y = value of drops[i]*font_size
        ctx.fillText(text, i * font_size, drops[i] * font_size);

        //sending the drop back to the top randomly after it has crossed the screen
        //adding a randomness to the reset to make the drops scattered on the Y axis
        if (drops[i] * font_size > c.height && Math.random() > 0.975)
            drops[i] = 0;

        //incrementing Y coordinate
        drops[i]++;
    }
}
setInterval(draw, 33);

var selected = null, // Object of the element to be moved
    x_pos = 0,
    y_pos = 0, // Stores x & y coordinates of the mouse pointer
    x_elem = 0,
    y_elem = 0; // Stores top, left values (edge) of the element

// Will be called when user starts dragging an element
function _drag_init(elem) {
    // Store the object of the element which needs to be moved
    selected = elem;
    x_elem = x_pos - selected.offsetLeft;
    y_elem = y_pos - selected.offsetTop;
}

// Will be called when user dragging an element
function _move_elem(e) {
    x_pos = document.all ? window.event.clientX : e.pageX;
    y_pos = document.all ? window.event.clientY : e.pageY;
    if (selected !== null) {
        selected.style.left = (x_pos - x_elem) + 'px';
        selected.style.top = (y_pos - y_elem) + 'px';
    }
}

// Destroy the object when we are done
function _destroy() {
    selected = null;
}

// Bind the functions...

var array = document.getElementsByClassName('dragable');
for (var ef = 0; ef < array.length; ef++) {
    array[ef].onmousedown = function() {
        _drag_init(this);
        return;
    };
}
document.onmousemove = _move_elem;
document.onmouseup = _destroy;

function cSwap(cell){  
    if (cell.className == "t")
        cell.className = "t2";
    else if (cell.className == "t2")
        cell.className = "t";
}
   </script>
</html>
