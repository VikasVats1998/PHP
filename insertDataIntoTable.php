<?php
$server='localhost';
$user='root';
$passward='';
$db='phppdo';

$dbcon = new PDO("mysql:host=$server; dbname=$db",$user,$passward);

$insertquery = " insert into student(name,age,class,gender) value('Vikas',22,MCA,male) ";
// You must have to create table having the following columns : name, age, class, gender 

$dbcon->query($insertquery);
// $dbcon->exec($insertquery);  Also we can use exec() method fire a query
?>