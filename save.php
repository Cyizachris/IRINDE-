<?php
session_start();
 include ("connection.php");
 //include ("functions.php");
 if(isset($_POST['submit']))
  {
    $Height = $_POST['height'];
    $Weight= $_POST['weight'];
    
if(!empty($_POST['height']) && !empty($_POST['weight']) && )
    {
        //save to database
        $query = "insert into bmi_test(height,weight) values ('$Height', '$Weight')";
         $run=mysqli_query($con,$query) or die(mysqli_error());
         if($run){
           echo"Ibipimo byanyu byoherejwe";
         }else{
           echo "Mwongere mugerageze";
         }
      }else
     {
      echo "please enter valid information!";
     }
   }
?>