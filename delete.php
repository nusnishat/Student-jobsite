<?php
$conn = mysqli_connect("localhost","root","","studentjob");      
             $sql = "DELETE FROM advertisementcc WHERE id='$_GET[id]'";
             $records=mysqli_query($conn,$sql);
             if(mysqli_query($conn,$sql))
             {
                  header('Location:advertisementc.html'); 
                 
                
             }
                 else {
                     echo "not delete";
}
             
  ?>