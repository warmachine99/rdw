<?php
   
   $vregno= $_POST['regno'];
   $vtype= $_POST['type'];
   $vchasisno= $_POST['chasisno'];
   $vbrand= $_POST['brand'];
   $vcolor= $_POST['color'];
   $vregdate= $_POST['regdate'];
   $vpicture= $_FILES['image']['name'];
  
   $target = "vehiclepicture/".basename($_FILES['image']['name']);



   $conn=mysqli_connect('localhost','root','','rdw');
   $sql="UPDATE vehicle SET v_id='$id', regno='$vregno',type='$vtype',chasisno='$vchasisno',brand='$vbrand',color='$vcolor',regdate='$vregdate', brand='$vbrand', picture='$target'   WHERE veh_id='$id'";

   if(mysqli_query($conn,$sql)){
      header("Location: updatedv.php?v_id=".$id); 
   }else{
        echo "Not updated";
   }
?>