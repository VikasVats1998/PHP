<?php
$server='localhost';
$user='root';
$passward='';
$db='phppdo';

$dbcon=new PDO("mysql:host=$server; dbname=$db",$user,$passward);
//You must have to create a database named "phppdo"
if($dbcon){
    echo "Connection done";
}
?>