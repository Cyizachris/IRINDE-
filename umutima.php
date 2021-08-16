<?php 
session_start();
include('connection.php');
?>
<Doctype! Html>
<title>UMUTIMA</title>
<header>
<style>
  *{
    padding: 0;
    margin: 0;
  }
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
  border:1px;
  border-radius: 2px;
  padding: 5px;
   opacity: 1;
   filter: grayscale(0%);
}
img:hover {
   opacity: 0.5;
   filter: grayscale(100%);
}
.bim{
border:0;
border-radius: 4px;
}
.bim img{
padding: 5px;
transition:transform 0.5s;
filter:greyscale(100%);

}
.bim img:hover{
transform: scale(1.2);
filter:greyscale(0%);
}
#nine{
  text-align: justify;
}
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
<th class="umutwe" width="10%"><font color="white" size="2"> <a href="umva inama.php" target="_self"> <b>UMVA INAMA</b></a></font></th>
<th class="umutwe" width="10%"><font color="white" size="2">  <a href="isuzume.php" target="_self"><b>ISUZUME</b></a></font></th>
</tr>
</div>
</table> 
<p><font color="lightblack" size="14"> <marquee behavior="slide" direction="left">Irinde Indwara zitandura kandi umenye uko wakwita ku buzima bwawe neza!</marquee></font> </p>
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
<input type="text" placeholder="Shakisha"/input>
<button type="submit" name="search">Shakisha</button>
<table class="bim" width="100%" height="70%">
<tr>
<th width="50%"><p>Twite ku maso yacu</p></th>
<th width="50%"><p>Indwara z'amaso n uko zitangira</p></th>
</tr>
<tr>
<td width="50%">
<img src="../images/fa.jpg" alt="ijisho">
<img src="../images/hat.jpg" alt="ijisho"> 
<img src="../images/hip.jpg" alt="ijisho">
<img src="../images/hype.jpg" alt="ijisho">
</td>
<td width="50%"><p id="nine">observed  that  ants  would  be  attracted  to  some  people’surine, because it was sweet. The term “Sweet Urine Disease”was coined.Some Key Aspects of Diabetes• Diabetes is a long-term condition that causes highblood sugar levels.• In 2013 it was estimated that over 382 million peoplethroughout the world had diabetes.• Type  1  Diabetes  -  the  body  does  not  produceinsulin. Approximately 10% of all diabetes cases aretype 1.• Type  2  Diabetes  -  the  body  does  not  produceenough insulin for proper function. Approximately90% of all cases  of diabetes  worldwide are of thistype.• Gestational  Diabetes  - this  type  affects  femalesduring pregnancy.• The  most  common  diabetes  symptoms  includefrequent  urination,  intense  thirst  and  hunger,weight gain, unusual weight loss, fatigue, cuts andbruises that do not heal, male sexual dysfunction,numbness and tingling in hands and feet.• If you have Type 1 and follow a healthy eating plan,do adequate exercise, and take insulin, you can leada normal life.• Type 2 patients need to eat healthily, be physicallyactive, and test their blood glucose. They may alsoneed  to  take  oral  medication,  and/or  insulin  tocontrol blood glucose levels.Types of Diabetes1) Type  1 diabetes: The  body does  not produce  insulin.Some people may refer to this type asinsulin-dependentdiabetes,juvenile  diabetes,  orearly-onset  diabetes.People usually develop type 1 diabetes before their 40thyear, often in early adulthood or teenage years. Type 1diabetes is nowhere near as common as type 2 diabetes.Approximately  10%  of  all  diabetes  cases  are  type  1.Patients with type  1 diabetes will need to take insulininjections for the rest of their life. They must also ensureproper  blood-glucose  levels  by  carrying  out  regularblood tests and following a special diet.2) Type  2 diabetes: The  body does  not  produce  enoughinsulin for proper function, or the cells in the body donot react to insulin (insulin resistance). Approximately90% of all cases of diabetes worldwide are type 2. Somepeople  may  be able  to  control  their  type  2  diabetessymptoms  by losing  weight, following a  healthy diet,doing  plenty  of  exercise,  and  monitoring  their  bloodglucose levels. However, type 2 diabetes is typically aprogressive disease - it gradually gets worse - and thepatient will probably end up have to take insulin, usuallyin  tablet  form.  Overweight  and  obese  people  have  amuch  higher  risk  of  dev eloping   ty pe  2  diabete scompared to those with a healthy body weight. Peoplewith a lot of visceral fat, also known as central obesity,belly  fat,  or abdominal  obesity, are  especially  at  risk.Being  overweight/obese  causes  the  body  to  releasechemicals that can destabilize the body’s cardiovascularand metabolic systems.Being  overweight,  physically  inactive  and eating  thewrong foods all contribute to our risk of developing type2  diabetes.  The  scientists  believe  that  the  impact  ofsugary soft drinks on diabetes risk may be a direct one,rather  than  simply an  influence on body  weight.  Therisk of developing type 2 diabetes <br>is also greater as weget older. Experts are not completely sure why, but say
that as  we age we  tend  to put on weight and  becomeless physically  active. Those with a close  relative whohad/  had  type  2  diabetes, <br> people  of Middle  Eastern,African, or South Asian descent also have a higher riskof developing the disease. Men whose testosterone levelsare  low  have  been  found  to  have  a  higher  risk  ofdeveloping type 2 diabetes.3) Gestational diabetes: This type affects females duringpregnancy.  Some  women  have  very  high  levels  ofglucose  in  their blood,  and  their bodies  are unable  toproduce enough insulin to transport all of the glucoseinto their cells,  resulting in progressively rising  levelsof  glucose.  Diagnosis  of gestational  diabetes  is  madeduring pregnancy. The majority of gestational diabetespatients can control their diabetes with exercise and diet.Between 10 to 20 percent of them will need to take somekind  of  blood-gluco se-controlling  medications.Undiagnosed  or uncontrolled gestational  diabetes canraise the risk of complications during childbirth.What is prediabetes: The vast majority of patients withtype  2  diabetes  initially  hadprediabetes.  Their  bloodglucose  levels  where  higher  than  normal,  but  not  highenough to merit a diabetes diagnosis. The cells in the bodyare becoming resistant to insulin.Diabetes is a Metabolism DisorderDiabetes  (diabetes  mellitus)  is  classed  as  a  metabolismdisorder.  Metabolism  refers  to  the  way  our  bodies  usedigested food for energy and growth. Most of what we eatis broken down into glucose. Glucose is a form of sugar inthe blood - it is the principal source of fuel for our bodies.When our food  is digested, the glucose makes its wayinto our bloodstream. Our cells use the glucose for energyand  growth.  However,  glucose  cannot  enter  our  cellswithout insulin being present - insulin makes it possible forour cells to take in the glucose. Insulin is a hormone that isproduced  by  the  pancreas.  After  eating,  the  pancreasautomatically  releases  an  adequate  quantity  of insulin  tomove the glucose present in our blood into the cells, as soonas glucose enters the cells blood-glucose levels drop.A  person  with  diabetes  has  a condition  in which  thequa n tity  of  glucose  in  the  blood  is   too  elevated(hyperglycemia). This is because the body does not produceenough insulin, produces no insulin, or has cells that do notrespond properly to the insulin the pancreas produces. Thisresults in too much glucose building up in the blood. Thisexcess blood glucose eventually  passes out of the body inurine. So, even though the blood has plenty of glucose, thecells are not getting it for their essential energy and growthrequirements.How to determine whether you have diabetes, prediabetesor neitherDoctors  can  determine  whether  a  patient  has  a  normalmetabolism, prediabetes or diabetes in one of three differentways (tests):�The A1C test– at least 6.5% means diabetes– between<br> 5.7% and 5.99% means prediabetes– less than 5.7% means normal�The FPG (fasting plasma glucose) test– at least 126 mg/dl means diabetes– between  100  mg/dl  and  125.99  mg/dl  meansprediabetes– less than 100 mg/dl means normalAn  abnormal  reading  following  the  FPG  means  thepatient has impaired fasting glucose (IFG</p></td>
</tr>
</table>
<tr>
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