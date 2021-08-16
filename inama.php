<?php 
session_start();
 include ("connection.php");
?>
<Doctype! Html>
  <title>ISUZUME</title>
  <header>
  <style>
      a:link, a:visited {
  border:1px;
  border-radius:4px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
  h1{
    text-indent: 50px;
   text-shadow: 3px 2px #3DAEF6;
   word-spacing: 10px;
   direction: rtl;
   line-height: 1.8;
   font-family: lucida console,serif;
  font-size:24px;
  
  }
  table{
  background-color:rgba(70,190,111,0.12) ;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.14), 0 17px 50px 0 rgba(0,0,0,0.20);
  border-radius: 4px;
  
  }
  body{
  background-image:url("../images/mi.jpg");
  }
  h1::first-letter{
   font-size:36px;
  font-color: #ff12d6;
  }
  
  p{   text-align: center;
   }
  p{
    color: white;
    padding: 12px 20px;
    text-align: center;
   
  }
  
  
  input[type=text] {
    -webkit-transition: width 0.3s ease-in-out;
    transition: width 0.3s ease-in-out;
    border-radius: 4px;
    border: 2px solid #4Cff40;
    padding: 5px 10px;
  }
  
  input[type=text]:focus {
    width: 30%;
  }
  button{
   background-color:rgba(10, 172, 200, 0.527) ;
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.14), 0 17px 50px 0 rgba(0,0,0,0.20);
   border-radius: 4px;
   padding: 5px 10px;
  }
  
  }
  .menya{
  text-decoration:none;
   background-color:white;
   color: green;
   border-radius:10px;
   padding: 5px 35px;
  }
  .menya:hover{
  background-color: #ffeecc;
    color: #5DBF60;
    }
  .umutwe{
  background-color:white;
    color: green;
    padding: 14px 25px;
    border-radius: 4px;
    }
    .umutwe:hover{
    background-color: #aaccaa;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  }
  #mina{
    text-align:justify;
  }
  #mimi{
    text-align:justify;
  }
 /*style for footer */ 
 footer{
 bottom: 0;
}
.footer-distributed{
 background-color: #292c2f;
 box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
 box-sizing: border-box;
 width: 100%;
 text-align: left;
 font: bold 16px sans-serif;
 
 padding: 55px 50px;
 margin-top: 80px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
 display: inline-block;
 vertical-align: top;
}
 
.footer-distributed .footer-left{
 width: 40%;
}
 
.footer-distributed h3{
 color:  #ffffff;
 font: normal 36px 'Cookie', cursive;
 margin: 0;
}
 
.footer-distributed h3 span{
 color:  #5383d3;
}
 
 
.footer-distributed .footer-links{
 color:  #ffffff;
 margin: 20px 0 12px;
 padding: 0;
}
 
.footer-distributed .footer-links a{
 display:inline-block;
 line-height: 1.8;
 text-decoration: none;
 color:  inherit;
}
 
.footer-distributed .footer-company-name{
 color:  #8f9296;
 font-size: 14px;
 font-weight: normal;
 margin: 0;
}
 
 
.footer-distributed .footer-center{
 width: 35%;
}
 
.footer-distributed .footer-center i{
 background-color:  #33383b;
 color: #ffffff;
 font-size: 25px;
 width: 38px;
 height: 38px;
 border-radius: 50%;
 text-align: center;
 line-height: 42px;
 margin: 10px 15px;
 vertical-align: middle;
}
 
.footer-distributed .footer-center i.fa-envelope{
 font-size: 17px;
 line-height: 38px;
}
 
.footer-distributed .footer-center p{
 display: inline-block;
 color: #ffffff;
 vertical-align: middle;
 margin:0;
}
 
.footer-distributed .footer-center p span{
 display:block;
 font-weight: normal;
 font-size:14px;
 line-height:2;
}
 
.footer-distributed .footer-center p a{
 color:  #5383d3;
 text-decoration: none;;
}
 
.footer-distributed .footer-right{
 width: 20%;
}
 
.footer-distributed .footer-company-about{
 line-height: 20px;
 color:  #92999f;
 font-size: 13px;
 font-weight: normal;
 margin: 0;
}
 
.footer-distributed .footer-company-about span{
 display: block;
 color:  #ffffff;
 font-size: 14px;
 font-weight: bold;
 margin-bottom: 20px;
}
 
.footer-distributed .footer-icons{
 margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
 display: inline-block;
 width: 35px;
 height: 35px;
 cursor: pointer;
 background-color:  #33383b;
 border-radius: 2px;
 
 font-size: 20px;
 color: #ffffff;
 text-align: center;
 line-height: 35px;
 
 margin-right: 3px;
 margin-bottom: 5px;
}
 
 
@media (max-width: 880px) {
 
 .footer-distributed{
 font: bold 14px sans-serif;
 
 }
 
 .footer-distributed .footer-left,
 .footer-distributed .footer-center,
 .footer-distributed .footer-right{
 display: block;
 width: 100%;
 margin-bottom: 40px;
 text-align: center;
 }
 
 .footer-distributed .footer-center i{
 margin-left: 0;
 }
 .main {
 line-height: normal;
 font-size: auto;
 }
 
}
  /*style for grid images */
  :root {
  --offset: 1rem;
}
 
*, *:before, *:after {
  box-sizing: border-box;
}

img,
a {
  display: block;
  height: 100%;
}
 
img {
  max-width: 100%;
  width: 100%;
  object-fit: cover;
}
 
.grid {
  display: grid;
  grid-gap: 0;
  overflow: hidden;
  list-style: none;
  margin: 0;
  padding: 0;
  height: 100vh;
}
.grid li {
  position: relative;
}
.grid li:hover ~ li:last-child:after,
.grid li:last-child:hover:after,
.grid li:hover ~ li:last-child:before,
.grid li:last-child:hover:before {
  opacity: 1;
  transition: 1s ease;
}
.grid li:last-child:after,
.grid li:last-child:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  pointer-events: none;
  clip-path: polygon(var(--offset) var(--offset), var(--offset) calc(100% - var(--offset)), calc(100% - var(--offset)) calc(100% - var(--offset)), calc(100% - var(--offset)) var(--offset));
  -webkit-clip-path: polygon(var(--offset) var(--offset), var(--offset) calc(100% - var(--offset)), calc(100% - var(--offset)) calc(100% - var(--offset)), calc(100% - var(--offset)) var(--offset));
  opacity: 0;
  transition: opacity 1s, transform 1s 1s, background 1s;
}
.grid li:last-child:after {
  mix-blend-mode: multiply;
  background: #aaafc3;
}
.grid li:last-child:before {
  backdrop-filter: grayscale(100%) blur(2px);
  -webkit-backdrop-filter: grayscale(100%) blur(2px);
}
.grid li:nth-child(1):hover ~ li:last-child:after {
  background: #2ab1ce;
}
.grid li:nth-child(2):hover ~ li:last-child:after {
  background: #4267b2;
}
.grid li:nth-child(3):hover ~ li:last-child:after {
  background: #e64786;
}
.grid li:nth-child(4):hover ~ li:last-child:after {
  background: #fd2914;
}
.grid li:nth-child(5):hover ~ li:last-child:after {
  background: #fbb016;
}
.grid li:nth-child(6):hover ~ li:last-child:after {
  background: #6bca6c;
}
.grid li:nth-child(7):hover ~ li:last-child:after {
  background: #173b51;
}
.grid li:nth-child(8):hover ~ li:last-child:after {
  background: #173b51;
}
.grid li:last-child:hover:after {
  background: #ff6d34;
}
 
.grid {
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 33.3333333333%);
}
.grid li:last-child:after,
.grid li:last-child:before {
  left: 100%;
  transform: translate3d(-100%, -100%, 0);
}
.grid li:nth-child(1):hover ~ li:last-child:after,
.grid li:nth-child(1):hover ~ li:last-child:before {
  transform: translate3d(-200%, -200%, 0);
}
.grid li:nth-child(2):hover ~ li:last-child:after,
.grid li:nth-child(2):hover ~ li:last-child:before {
  transform: translate3d(-100%, -200%, 0);
}
.grid li:nth-child(3):hover ~ li:last-child:after,
.grid li:nth-child(3):hover ~ li:last-child:before {
  transform: translate3d(0%, -200%, 0);
}
.grid li:nth-child(4):hover ~ li:last-child:after,
.grid li:nth-child(4):hover ~ li:last-child:before {
  transform: translate3d(-200%, -100%, 0);
}
.grid li:nth-child(5):hover ~ li:last-child:after,
.grid li:nth-child(5):hover ~ li:last-child:before {
  transform: translate3d(-100%, -100%, 0);
}
.grid li:nth-child(6):hover ~ li:last-child:after,
.grid li:nth-child(6):hover ~ li:last-child:before {
  transform: translate3d(0%, -100%, 0);
}
.grid li:nth-child(7):hover ~ li:last-child:after,
.grid li:nth-child(7):hover ~ li:last-child:before {
  transform: translate3d(-200%, 0%, 0);
}
.grid li:nth-child(8):hover ~ li:last-child:after,
.grid li:nth-child(8):hover ~ li:last-child:before {
  transform: translate3d(-200%, 0%, 0);
}
.grid li:last-child:hover:after,
.grid li:last-child:hover:before {
  transform: translate3d(-100%, 0%, 0);
}
 
@media (max-width: 60em) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: repeat(4, 25%);
  }
  .grid li:last-child:after,
  .grid li:last-child:before {
    left: 0%;
    transform: translate3d(-50%, -150%, 0);
  }
  .grid li:nth-child(1):hover ~ li:last-child:after,
  .grid li:nth-child(1):hover ~ li:last-child:before {
    transform: translate3d(-100%, -300%, 0);
  }
  .grid li:nth-child(2):hover ~ li:last-child:after,
  .grid li:nth-child(2):hover ~ li:last-child:before {
    transform: translate3d(0%, -300%, 0);
  }
  .grid li:nth-child(3):hover ~ li:last-child:after,
  .grid li:nth-child(3):hover ~ li:last-child:before {
    transform: translate3d(-100%, -200%, 0);
  }
  .grid li:nth-child(4):hover ~ li:last-child:after,
  .grid li:nth-child(4):hover ~ li:last-child:before {
    transform: translate3d(0%, -200%, 0);
  }
  .grid li:nth-child(5):hover ~ li:last-child:after,
  .grid li:nth-child(5):hover ~ li:last-child:before {
    transform: translate3d(-100%, -100%, 0);
  }
  .grid li:nth-child(6):hover ~ li:last-child:after,
  .grid li:nth-child(6):hover ~ li:last-child:before {
    transform: translate3d(0%, -100%, 0);
  }
  .grid li:nth-child(7):hover ~ li:last-child:after,
  .grid li:nth-child(7):hover ~ li:last-child:before {
    transform: translate3d(-100%, 0%, 0);
  }
  .grid li:nth-child(8):hover ~ li:last-child:after,
  .grid li:nth-child(8):hover ~ li:last-child:before {
    transform: translate3d(-100%, 0%, 0);
  }
  .grid li:last-child:hover:after,
  .grid li:last-child:hover:before {
    transform: translate3d(0%, 0%, 0);
  }
 
  :root {
    --offset: 0;
  }
}
.description {
  font-family: "Unica One", sans-serif;
  font-size: 1.25rem;
  position: absolute;
  display: block;
  right: 2rem;
  left: 2rem;
  text-align: center;
  top: 50%;
  width: 60px;
  margin: auto;
  color: white;
  z-index: 100;
  opacity: 0;
  transform: translate3d(0, -50%, 0);
  transition: .3s 0s;
}
 
li:hover .description {
  opacity: 1;
  transition: .6s .3s;
}
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  </head>
  <body>
  <h1 align="center"><font><b>IRINDE<b></font></h1>
  <table border="0" width="100%" height="8%">
  <tr>
  <th class="umutwe" width="10%"><font color="white" size="2"> <a href="home.php" target="_self"><b>AHABANZA</b></a></font></th>  
  <th class="umutwe" width="10%"><font color="white" size="2"> <a href="inama.php" target="_self"> <b>UMVA INAMA</b></a></font></th>
  <th class="umutwe" width="10%"><font color="white" size="2">  <a href="isuzume.php" target="_self"><b>ISUZUME</b></a></font></th>
  </tr>
</table> 
<p><font color="lightblack" size="14"> Irinde Indwara zitandura kandi umenye uko wakwita ku buzima bwawe neza!</font> </p>
<table margin="center" border="0" width="100%" height="8%">
<tr>
<th  width="10%"><font color="white" size="2"><p>Menya uko wakwirinda Indwara z'/ya</p></font></th>
<th  class="menya" width="10%"><font color="white" size="2"> <a href="eye.php" target="_self"> AMASO</font></th>
<th  class="menya" width="10%"><font color="white" size="2">  <a href="diabetes.php" target="_self"><b>DIABETE</b></a></font></th>
<th  class="menya" width="10%"><font color="white" size="2"> <a href="umutima.php" target="_self"><b>UMUTIMA</b></a></font></th>
<th  class="menya" width="10%"><font color="white" size="2"> <a href="impyiko.php" target="_self"> IMPYIKO</font></th>
<th   class="menya" width="10%"><font color="white" size="2">  <a href="asima.php" target="_self"><b>ASIMA</b></a></font></th>
<th  class="menya" width="10%"><font color="white" size="2"> <a href="kanseri.php" target="_self"><b>KANSERI</b></a></font></th>
</tr>
</table>
  </div>
  </table>
<input type="text" placeholder="Shakisha"/input>
<button type="submit" name="search">Shakisha</button>
<ul class="grid">
     <li>
      <a href="#">
        <img src="../images/umu.jpg" alt="">
        <span class="description">Jya kwa Muganga buri kwezi!</span>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="../images/tv.jpg" alt="">
      </a>
      <span class="description">Soma amakuru ku ndwara zitandukanye?</span>
    </li>
    <li>
      <a href="#">
        <img src="../images/fre.jpg" alt="">
        <span class="description">Ganira n' incuti</span>
      </a>      
    </li>
    <li>
     <a href="#">
        <img src="../images/tv.jpg" alt="">
        <span class="description">IDAGADURE</span>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="../images/water.jpg" alt="">
        <span class="description">Nywa amazi ahagije!</span>
      </a>
    </li>
    <li>
      <a href="#">
      <img src="../images/sport.jpg" alt="">
        <span class="description">kora siporo</span>
      </a>
    </li>
    <li>
      <a href="#">
        <img src="../images/food.jpg" alt="">
        <span class="description">Rya indyo yuzuye!</span>
      </a>
    </li>    
    <li>
      <a href="#">
        <img src="../images/sleep.jpg" alt="">
        <span class="description">Ruhuka bihagije!</span>
      </a>
    </li>
</ul>
<footer class="footer-distributed">
 
 <div class="footer-left">
 
 <h3>IRINDE<span>Rwanda</span></h3>
 
 <p class="footer-links">
 <a href="#">AHABANZA</a>
 ·
 <a href="#">BMI</a>
 ·
 <a href="#">KwipimishaAmaso</a>
 </p>
 
 <p class="footer-company-name">IrindeRwanda &copy; 2021</p>
 </div>
 
 <div class="footer-center">
 
 <div>
 <i class="fa fa-map-marker"></i>
 <p><span>Kn 31 st</span> Kigali, Nyarugenge</p>
 </div>
 
 <div>
 <i class="fa fa-phone"></i>
 <p>+250 782 844 889</p>
 </div>
 
 <div>
 <i class="fa fa-envelope"></i>
 <p><a href="mailto:info@moh.gov.rw">info@moh.gov.rw</a></p>
 </div>
 
 </div>
 
 <div class="footer-right">
 
 <p class="footer-company-about">
 <span>About the company</span>
 IRINDERWANDA Program Yahisemo Gukorana n abanyarwanda ibafasha Kubaha amakuru ahagije ku Ndwara zitandura
 </p>
 
 <div class="footer-icons">
 
 <a href="https://facebook.com/RwandaHealth"><i class="fa fa-facebook"></i></a>
 <a href="https://twitter.com/RwandaHealth"><i class="fa fa-twitter"></i></a>
 <a href="https://linkedin.com/RwandaHealth"><i class="fa fa-linkedin"></i></a>
 <a href="https://instagram.com/RwandaHealth"><i class="fa fa-instagram"></i></a>
</div>
 
 </div>
 
 </footer>
    </body>
    </html>