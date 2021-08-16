<?php 
session_start();
  include('connection.php');
  include('functions.php');

  $user_data= check_login($con);

?>

   <title>Home</title>
<head>
<style>
body{
  background-image:url("../images/mi.jpg");
}
a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 2px solid #4CAF50;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  border-radius:8px;
}

a:hover, a:active {
  background-color:red;
  border: 0;
  box-shadow: 0 12px 16px 0 rgba(0,200,0,0.24), 0 17px 50px 0 rgba(0,190,0,0.19);
  border-radius: 8px;
}
div {
  
  border-radius:4px;
  border: 1px solid red;
  padding: 8px;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: blue;
}

p {
  text-indent: 100px;
  text-align: justify;
  letter-spacing: 3px;
}
table{
background-color:rgba(70,179,111,0.12) ;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.14), 0 17px 50px 0 rgba(0,0,0,0.20);
border-radius: 4px;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>

</head>
<body>
  <a href="logout.php">logout</a>
Hello, <?php echo $user_data['First_name']?>


</head>
<body>

<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="img_5terre.jpg" alt="Cinque Terre" width="60" height="40">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="../images/kim.jpg" alt="Forest" width="60" height="40">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="../images/si.jpg" alt="Northern Lights" width="60" height="40">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="../images/ten.jfif" alt="doctor" width="60" height="40">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div>
<h1>irinde program</h1>
<p>Irinde Rwanda program, ni gahunda igamije kubamenyesha abaturarwanda,amakuru ahagije ku ndwara zitandura.Ikoresha uburyo butandukanye kandi buhamye mukubamenyesha,ayo Makuru 
harimo inama z'abaganga b'inzobere;Muri irinde program kandi ubasha gufatisha ibipimo byo mu rwego rwa mbere,ku ndwara nka diyabete n' amaso.
uyikoresha kandi ashobora gusoma inyandiko zitandukanye z'abahanga aho baba basobanura indwara nuko zifata.. </p>
</div>
<table border="0" width="100%" height="8%" bgcolor="violet">
<body>
<tr>
<th width="10%"><font color="white" size="2"><b>UMVA INAMA</b></font></th>
<th width="10%"><font color="white" size="2"><b>ISUZUME</b></font></th>
<th width="10%"><font color="white" size="2"><b>IYANDIKISHE</b></font></th>
</tr>
</table>
</body>
</html>