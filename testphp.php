<?php

try{
    $server='localhost';
    $user='root';
    $passward='';
    $db='phppdo';
    
    $dbcon = new PDO("mysql:host=$server; dbname=$db",$user,$passward);
    // if($dbcon){
    //     echo "Connection done";
    // }
    $insertquery = " insert into ludana(name,qty,fat,rate) value('Vikas',2,60,80) ";
    $dbcon->query($insertquery);
    // $dbcon->exec($insertquery);  Also we can use exec() method fire a query
    
    
    $selectquery="select * form ludana";
    $gete = $dbcon->query($selectquery);
    // $result = $gete->fetch();
    while($row=$gete->fetch()){

        // print_r($row);
        echo $row['name'];
    }
    } catch(PDOException $e){
        echo "Error : ".$e->getMessage();
    }
?>