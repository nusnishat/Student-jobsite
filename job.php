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
             body {
  background:#f2f2f2;
   }
      
        #home-section {
  background: url("jobcover.jpg") no-repeat center top;
  background-size: cover;
  background-attachment: fixed;
  min-height: 400px; }
  #home-section .dark-overlay {
    background: rgba(0, 0, 0, 0.7);
    min-height: 400px; }
        
       .fa
           {
               background:#fff;
               color:black; 
               padding: 0px;
               font-size: 30px;
               border-radius: 5px;  
               width: 80%;
           }
        .navbar
        {
            border-bottom: 3px solid #008ed6;
            background: #292b2c;
            opacity:0.7;
        }
     //navbar//
     * {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  
  background-color:#ccffcc;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #008ed6;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 0px 10px 40px;
  
  width: 70%;
  border-left: none;
  height: 300px;
}
 
///table//

table
        {
            border-collapse:collapse;
            width:800;
            color:black;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
           
            
        }
        th
        {
            background-color:#008ed6;
            color:white;
            
        }
        tr:nth-child(even){background-color: #ccffcc}
        tr:nth-child(odd){background-color:#99ffcc}
        th, td {
  text-align: left;
  padding: 16px;
  
}


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
                        <a href="#" class="nav-link" style="color:white;">Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a href="employers.html" class="nav-link">Cv Post</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        
        <!--main-->
        <section >
            <div id="home-section">
                <div class="dark-overlay">
                    <div class="container">
                        <br><br>
                        <h6 class="display-4 text-warning mt-6">Find a better way to wok</h6> 
                        <h1 class="text-primary">Don't search for jobs.
                            Find the right fit instead.</h1>
                        <div class="d-flex flex-row">
                              <div class="p-4 align-self-start ">
                                  <i class="fa fa-align-justify mt-2"></i>    
                              </div>
                              <div >
                                  
                                  <br> <p class="lead text-light">There are so many! Starting with only the highest quality remote, work from home, and flexible jobs in 50+ career categories, 
                                <br>our goal is to provide you with a top-notch job search experience from start to finish… and even beyond!</p>
                            
                              </div>    
                         </div>
                        <div class="d-flex flex-row">
                              <div class="p-4 align-self-start ">
                                  <i class="fa fa-align-justify mt-2"></i>    
                              </div>
                              <div >
                                  
                                  <br> <p class="lead text-light">Save time, energy, and stress by letting our expert team vet the jobs and companies for you! <br>You only see the best remote and flexible job listings available.<br>
                            You can leverage exclusive hiring information on over 50,000 companies to help find the right employer, culture, and job–faster and easier.</p>
              
                              </div>    
                         </div>
                        <br><br> </div>
                </div>
            </div>
        </section>
<!--head-->
        <div class="container">
            <br><br>
            <h6 class="display-4 pt-30 text-primary">Choose your right job</h6>
            <p class="lead">There's more to a person than a resume or a set of skills. People bring a collection of their skills,passions and experiences to every new job.

<br>Whether you are looking for a next step for your career or a short term job, we connect you with a great career opportunity that's just right for you. </p>
             <p class="lead m-2">Search through millions of jobs and find the right fit. </p>
            <div class="d-flex flex-row">
                              <div class="p-4 align-self-start ">
                                  <i class="fa fa-align-justify mt-2"></i>    
                              </div>
                              <div >
                                  
                                  <h2 class="pt-4 " >Browse category</h2>
                                  <p class="lead">Jobs posted by different companies.</p>
                              </div>    
                         </div>
            
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'a')" id="defaultOpen">Accounting/Finance</button>
  <button class="tablinks" onclick="openCity(event, 'b')">Bank</button>
  <button class="tablinks" onclick="openCity(event, 'c')">Education/Training</button>
  <button class="tablinks" onclick="openCity(event, 'd')">Engineer/Architects</button>
  <button class="tablinks" onclick="openCity(event, 'e')">Garments/Textile</button>
  <button class="tablinks" onclick="openCity(event, 'f')">Hospitality/ Travel/ Tourism</button>
  <button class="tablinks" onclick="openCity(event, 'g')">Beauty Care/ Health & Fitness</button>
  <button class="tablinks" onclick="openCity(event, 'h')">IT & Telecommunication</button>
  <button class="tablinks" onclick="openCity(event, 'i')">Marketing/Sales</button>
  <button class="tablinks" onclick="openCity(event, 'j')">Media/Ad./Event Mgt</button>
  <button class="tablinks" onclick="openCity(event, 'k')">Medical/Pharma</button>
  <button class="tablinks" onclick="openCity(event, 'l')">Others</button>
</div>

<div id="a" class="tabcontent">
 <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Accounting/Finance";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="b" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Bank";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="c" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Education/Training";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>
<div id="d" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Engineer/Architects";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="e" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Garments/Textile";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="f" class="tabcontent">
 <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Hospitality/ Travel/ Tourism";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div> 
<div id="g" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Beauty Care/ Health & Fitness";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="h" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="IT & Telecommunication";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>

<div id="i" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Marketing/Sales";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>  
<div id="j" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Media/Ad./Event Mgt";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>  
<div id="k" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="Medical/Pharma";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>              
<div id="l" class="tabcontent">
  <div class="conatiner">
           <table width="800" hight="800" cellpaddin="2" >
            <tr>
            <th>Company Name</th>
            <th>Job Name</th>
            <th>Salary</th>
            <th>E-mail</th>
            <th>Location</th>
            </tr>
            <?php
            $category="others";
             $conn = mysqli_connect("localhost","root","","studentjob");
             if($conn->connect_error)
              {
                die("Connection failed:" .$conn->connect_error);
              }
             $sql= "SELECT name,post,salary,email,description from advertisementcc where category = '" .$category. "'";
             $result= $conn->query($sql);
             if($result->num_rows>0) 
             {
               while ($row =$result->fetch_assoc())
              {
               echo "<tr><td>". $row["name"]."</td><td>". $row["post"].
               "</td><td>". $row["salary"]."</td><td>". $row["email"].
                "</td><td>". $row["description"]."</td></tr>";
              }
             echo "</table>";
            }
            else {
             echo "0 result";
            }
            $conn->close();
            ?>
          </table>
    </div>
</div>
             
<script>
    
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
        </div>  
       
        
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
 
        
    </body>
</html>
