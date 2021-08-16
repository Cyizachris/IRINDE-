<?php 
$server="localhost";
$user="root";
$password="";
$database="irinde";
!$con=mysqli_connect($server,$user,$password,$database);
if(!$con){
    echo ("Connection failed: " .mysqli_connect_error());
  }
  else{
    echo "successfully connected" ;
  }
  ?>