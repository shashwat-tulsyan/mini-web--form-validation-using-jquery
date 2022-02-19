<?php
    $username = "root";
    $password ="";
    $server ="localhost";
    $database ="codetree";
    $con= mysqli_connect($server,$username,$password,$database);
    if($con)
    {
     //echo("connect");
    }
    else
    {  
    //echo("notconnect"); 
    }
?>