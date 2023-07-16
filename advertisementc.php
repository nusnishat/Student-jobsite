<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
     
 <?php
 if(isset($_GET('username'))){
     $username=$_GET('username');
     mysql_connect("localhost","root","") or die("Could not connect to the server");
     mysql_select_db("insercompany") or die ("That database could not be found");
     
 }
 
 
 ?>
    </body>
</html>
