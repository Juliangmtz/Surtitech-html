<?php
    $ServerInfo = "mysql:dbname=".DB.";host=".SERVER;
    try {
        $connection = new PDO($ServerInfo, USER, PASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        echo "<script> alert ('Sucesfull connection)</script>";

    } catch (PDOException $e) 
    {
        echo "<script> alert('Error')</script>";
    }
?>