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

$sql = "SELECT * FROM insertstudent WHERE username = '" .$username. "' and password = '" .$password. "'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<br>login successfull.';
    header('Location:advertisement_job.php');
}
 else {
     echo '<br>login failed.';
}

$conn->close();
?>

