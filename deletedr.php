<?php
   
   $id= $_GET['users_id'];

   $conn=mysqli_connect('localhost','root','','rdw');
   $sql="DELETE FROM driver WHERE users_id = '$id' ";

   echo $sql;
   return;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: deletedriver.php");
   }else{
         echo "Not deleted";
   }
   
?>
