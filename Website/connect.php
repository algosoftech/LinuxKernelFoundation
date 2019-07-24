<?php
  $hostname="localhost";
    $username="root";
    $password="";
    $dbname="linuxkernelfoundation_db";
    $conn = mysqli_connect($hostname,$username,$password,$dbname);
    mysqli_select_db($conn,$dbname);
   // $connect=mysqli_connect($hostname,$username,$password) or die ("mysqli not connected..");
    //mysqli_select_db($dbname,$connect) or exit (mysqli_error());
    if(! $conn ) {
			 die('Could not connect: ' . mysqli_error());       
			   }
      //echo 'Connected successfully';
?>  

