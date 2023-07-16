<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$user  = $_REQUEST['user'];
$name  = $_REQUEST['name'];
$category  = $_REQUEST['category'];
$post  = $_REQUEST['post'];
$salary  = $_REQUEST['salary'];
$email  = $_REQUEST['email'];
$description= $_REQUEST['description'];
//echo '<br>Hello '. $uname;


$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "studentjob";


$conn = new mysqli($servername, $username, $password, $dbname);

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "studentjob";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
    echo '<br>Connection failed.';
}
 else {
     echo "<br>Connected to db.";
}


echo '<br> '.$sql;
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<br>User already exists. Registration failed.';
}
else
{$sql = "INSERT INTO advertisementcc (name,category, post,salary,email,description,user) VALUES ( '" .$name. "','" .$category. "', '" .$post. "','" .$salary. "','" .$email. "','" .$description. "','" .$user. "')";
    //echo '<br> '.$sql;
    $result = $conn->query($sql);
echo '<br>Registration successfull.';
header('Location:advertisementc.html');
}
    


$conn->close();
