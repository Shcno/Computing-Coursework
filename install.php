<?php
    $servername="localhost";
    $username="root";
    $password="root";

    $conn=new PDO("mysql:host=$servername",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE DATABASE IF NOT EXISTS Trading";
    $conn->exec($sql);
    $sql="USE Trading";
    $conn->exec($sql);
    echo("DB made"); 
    

    $stmt1= $conn->prepare("DROP TABLE IF EXISTS tblusers;
    CREATE TABLE tblusers
    (UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(20) NOT NULL,
    Surname VARCHAR(20) NOT NULL,
    Forename VARCHAR(20) NOT NULL,
    Password VARCHAR(200) NOT NULL,
    Funds DECIMAL (15,2) NOT NULL);
    ");
    $stmt1->execute();

    
    $stmt2= $conn->prepare("DROP TABLE IF EXISTS tblusershares;
    CREATE TABLE tbluserShares
    (UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserID VARCHAR(20) NOT NULL,
    ShareID VARCHAR(20) NOT NULL,
    PriceBought DECIMAL (15,2) NOT NULL,
    TradeID VARCHAR(20) NOT NULL,
    Quantity VARCHAR(20) NOT NULL,
    Sold BOOLEAN NOT NULL,
    DateSold DATE NOT NULL,
    PriceSold DECIMAL(15,2) NOT NULL,
    DateBought DATE NOT NULL)
    ");
    $stmt2->execute();


    $stmt3= $conn->prepare("DROP TABLE IF EXISTS tbl")












    //add in some default data
   /*  $hashedpassword=password_hash("password",PASSWORD_DEFAULT);
    echo($hashedpassword);
    $stmt1= $conn->prepare("INSERT INTO tblusers
    (UserID,Username, Surname, Forename, Password, Year, Balance, Role)
    VALUES
    (NULL,'cunniffe.r','Cunniffe', 'Rob', :Password, 12, 10.50, 1),
    (NULL,'arnold.k','Arnold', 'Kev', :Password, 12, 10.50, 0)
    ");
    
    $stmt1->bindParam(":Password",$hashedpassword);
    
    $stmt1->execute(); */
?>