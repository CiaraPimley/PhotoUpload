<?php

require_once 'dbconfig.php';
$Name = $_POST['Name'];
$Description = $_POST['Description'];
$PhotoLink = $_POST['PhotoLink'];


    try {
        $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
//        echo "Connected to $dbname at $host successfully.";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo "Connected successfully";

       $sql = "INSERT INTO `myphotos`(`Name`, `Description`,`PhotoLink`) VALUES ('$Name', '$Description','$PhotoLink')";

        $conn->exec($sql);
        
        $statement = $conn->prepare("SELECT * FROM `myphotos` WHERE `Name`='$Name'");
        $statement->execute();
        $photoPost = $statement->fetchall(PDO::FETCH_ASSOC)[0];
        $ID = $photoPost['ID'];
        
        
      // $sql2 = "INSERT INTO `categories`(`PostID`, `Hashtag`) VALUES ('$PostID', '$Hashtag')";
       // $conn->exec($sql2);


        $conn = null; 
        echo "Added to database!";

        
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
    
//header("Location: http://localhost/diary/Views/blogpost.php?PostID=$PostID");
//die();

    

