<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','rdw');
   $sql="DELETE FROM driver WHERE driverid='$id'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: deletedriver.php");
   }else{
         echo "Not deleted";
   }
   
?>
