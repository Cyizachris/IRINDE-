<?php
session_start();
 include ("connection.php");
 //include ("functions.php");
 if(isset($_POST['submit']))
  {
    $right_eye = $_POST['right_eye'];
    $left_eye= $_POST['left_eye'];
    
if(!empty($right_eye) && !empty($left_eye) && is_numeric($right_eye) && is_numeric($left_eye))
    {
        //save to database
        $query = "INSERT INTO eye_test (right_eye,left_eye) VALUES ($right_eye,$left_eye)";
        $run= mysqli_query($con,$query) or die(mysqli_error());
        if($run){
            echo"Ibipimo byanyu byafashwe";
        }else{
            echo " Ibipimo byanyu ntibyafashwe";
        }
}else
     {
      echo "please enter valid information!";
     }
   }
?>
<Doctype! Html>
  <title>EYE TEST</title>
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
  
  button{
   background-color:rgba(0,255,0,0.34) ;
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
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);}
    img {
    width: 300px;
    align:;
    border:1px;
    border-radius: 4px;
    padding: 5px;
     opacity: 1;
     filter: grayscale(0%);
  }
  img:hover {
     opacity:0.5;
     filter: grayscale(100%);
  }
  .reg{
      margin:auto;
background-color:rgb(32, 2, 7);
max-width: 450px;
padding:50px;
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
border-radius:4px;

  }
  input[type=text],input[type=number],input[type="date"]{
    width: 100%;
   padding: 12px 20px;
   background-color:whitesmoke;
   margin: 8px 0;
   box-sizing: border-box;
  -webkit-transition: width 0.3s ease-in-out;
  transition: width 0.3s ease-in-out;
  border-radius: 12px;
}
input[type=text]:focus,input[type=number]:focus{
  width: 30%;

}
input[type=submit]{
  background-color: #fedede;
  width: 100%;
  padding: 12px 20px;
  box-sizing: border-box;
  border-radius:12px;

}
input[type=submit]:hover{
  background-color:white;
  width: 100%;
  padding: 12px 20px;
  box-sizing: border-box;
  border-radius:12px;

}
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
<p><font color="lightblack" size="14"> <marquee behavior="slide" direction="left">Menya indwara zitandura n'uko wakwita ku buzima bwawe!</marquee></font> </p>
<table border="0" width="100%" height="8%">
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
<img src="../images/tila.jpg" alt="test">
<p>Itegereze Ifoto Neza maze wandike umubare w'umurongo ureba neza!(NB:mubare Muhereye hasi)</p>
<div class="reg">
  <p id="nice">Ipimishe AMASO<p></p>
  <form method="POST">
  <input type="number" name="right_eye" placeholder="UMUBARE W'UMURONGO(ku ijisho ry'iburyo)"><br>
  <input type="number" name="left_eye" placeholder="UMUBARE W'UMURONGO (ku jisho ry'ibumoso)"><br>
  <input type="submit" value="EMEZA"><input type="submit" value="REBA IBISUBIZO">
</form>
<p><marquee behavior="slide" direction="right"><i>Murabona ubutumwa bubamenyesha ibipimo byanyu</i></marquee>
 </div>
 
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