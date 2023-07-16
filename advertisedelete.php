<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Student JOBsite</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <style>
      
        body
        {
            background:#333;
            color:#fff;
        }
        .navbar
        {
            border-bottom: 3px solid #008ed6;
            background: #292b2c;
            opacity:0.7;
        }
       #home-section
       {
           background-image: url(company.jpg);
           background-size: cover;
           min-height: 700px;
           background-attachment: fixed;
         
       }
         .dark-overlay
           {
             background:rgba(0,0,0,.7);
              min-height: 700px;
               
           }
          .card-form
           {
               opacity: 0.8;
               margin-left: 60px;
               margin-right: 60px;
           }
           ///table//

table
        {
            border-collapse:collapse;
            width:800;
            color:black;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
           
            
        }
        th
        {
            background-color:#008ed6;
            color:white;
            
        }
        tr:nth-child(even){background-color:#393838}
        tr:nth-child(odd){background-color:#393838}
        
    </style>
    
    
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md">
            
                <img src="logo.png" class="logo">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon">
                        
                    </span>
                    
                </button>
                 <div class="container">  
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="jobwebsitereal.html" class="nav-link">Home</a>
                    </li>
               
                    <li class="nav-item">
                        <a href="taining.html" class="nav-link">Training</a>
                    </li>
                     <li class="nav-item">
                        <a href="job.php" class="nav-link">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="employers.html" class="nav-link">Cv Post</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        
        <!--head section-->
        
       
       <section id="home-section">
            <div class="dark-overlay">
                <div class="home-inner"> 
        <div class="container" >
            <h1 class="display-2 text-primary "><b><br><brr>Student JObsite</b></h1>
                                <h2 >
                                   It's a part-time job website.Only students can join your job.
                                    
                                </h2>
            <h3>
                Save time and effort in your hiring journey.
            </h3>
            <p class="lead">You can post your job advertisement in this website and fin your require candidate.
            Thousands of students are using this website to find job.</p>
                    
               <p class="lead"><b>Be a part of us.</b></p><br>
               <h3 class="text-warming">Your posted job advertisements</h3>
                
           <table width="900" hight="800" cellpadding="3" border="2" cellspacing="6" padding="4">
            <tr class="p-4">
            <th>Company Name</th>
            <th>Job Catergory</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            <th>Operation</th>
            </tr>
            <?php
            $userid=$_REQUEST["nameuser"];
            
             $conn = mysqli_connect("localhost","root","","studentjob");
          
             $sql= "SELECT * FROM advertisementcc where user = '$userid'";
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
                 echo "<td><a href = 'delete.php?id=$row[id]'>Delete</a></td>";
                
                       
                   }
        
          ?>
    </div>
      <br><br><br>          </div></div></section>
       
        
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
        
    </body>
</html>
