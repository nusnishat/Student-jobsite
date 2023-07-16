<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//echo '<br>Hello '. $uname;


$servername = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "studentjob";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if($conn->connect_error)
{
    echo '<br>Connection failed.';
}
 else {
     echo "<br>Connected to db.";
}

$sql = "SELECT * FROM login WHERE username = '" .$username. "'";
echo '<br> '.$sql;
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<br>User already exists. Registration failed.';
}
 else {
    $sql = "INSERT INTO insertcompany (username, password) VALUES ( '" .$username. "', '" .$password. "')";
    //echo '<br> '.$sql;
    $result = $conn->query($sql);
    echo '<br>Registration successfull.';
    header('Location:advertisementc.html'); 
}

$conn->close();
?>