<?php

require_once 'dbconfig.php';


    try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare("SELECT `ID`, `Name`, `Description`, `PhotoLink` FROM `myphotos` WHERE `ID`= '$ID'");
    //Execute the Statement
    $statement->execute();
    //Put statement into variable to processed by the HTML page
    $photoPost = $statement->fetchall(PDO::FETCH_ASSOC)[0];
    $ID = $photoPost['ID'];
    $Name = $photoPost['Name'];
    $Description = $photoPost['Description'];
    $PhotoLink = $photoPost['PhotoLink'];
    $pdo = null;
        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
