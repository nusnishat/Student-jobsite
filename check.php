<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LoopLab</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    
    </head>
    <body>
         <table width="900" hight="800" cellpaddin="2" border="2" cellspacing="6" padding="4">
            <tr class="p-4">
            <th>Company Name</th>
            <th>Job Catergory</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            <th>delete</th>
            </tr>
            <?php
            
             $conn = mysqli_connect("localhost","root","","studentjob");
          $sql= "SELECT name,category,post,salary,email,description from advertisementcc where user = '" .$userid. "'";
            
             $sql= "SELECT * FROM advertisementcc ";
             $records=mysqli_query($conn,$sql);
  
               while ($row =mysqli_fetch_array($records))
              {
                
                 echo "<tr>";
                 echo "<td>".$row['name']."</td>";
                 echo "<td>".$row['category']."</td>";
                 echo "<td>".$row['post']."</td>";
                 echo "<td>".$row['salary']."</td>";
                 echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['description']."</td>";
                 echo "<td><a href='delete.php?id=".$row['id'].">Delete</a></td>";
                
                       
                   }
            
            
          
            $conn->close();
            ?>
            
            
             $conn = mysqli_connect("localhost","root","","studentjob");
          
             $sql= "SELECT * FROM advertisementcc where user = '" .$userid. "'";
             $records=mysqli_query($conn,$sql);
  
               while ($row =mysqli_fetch_array($records))
              {
                
                 echo "<tr>";
                 echo "<td>".$row['name']."</td>";
                 echo "<td>".$row['category']."</td>";
                 echo "<td>".$row['post']."</td>";
                 echo "<td>".$row['salary']."</td>";
                 echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['description']."</td>";
                 echo "<td><a href='delete.php?id=".$row['id'].">Delete</a></td>";
                
                       
                   }

    </body>
</html>
