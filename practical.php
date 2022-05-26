<?php
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $age=$_POST["age"];
    $state=$_POST["state"];

    /*
    Connect to DB

    $servername="localhost";
    $username="root";
    $password="";

    $conn=new mysqli($servername,$username,$password);

    if($conn->connect_error){
        die("Connection Unsuccessful:".$conn->connect_error);
    }else{
        echo "Connection successful<br><br>";
    }

    $conn->close();
    */

    /*
    Create Database

    $servername="localhost";
    $username="root";
    $password="";

    $conn=new mysqli($servername,$username,$password);

    if($conn->connect_error){
        die("Connection Unsuccessful:".$conn->connect_error);
    }else{
        echo "Connection successful<br><br>";
    }

    $sql="CREATE DATABASE db_register";

    if($conn->query($sql)===TRUE){
        echo "Database Successfully Created<br>";
    }else{
        echo "Databse Unsuccessfully Created:".$conn->error;
    }

    $conn->close();
    */

    /*
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="db_register";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Unsuccessful:".$conn->connect_error);
    }else{
        echo "Connection successful<br><br>";
    }

    $sql="CREATE TABLE user_registration (FirstName VARCHAR(30) NOT NULL,LastName VARCHAR(30) NOT NULL,Age INT(3) NOT NULL,State VARCHAR(30) NOT NULL)";

    if($conn->query($sql)===TRUE){
        echo "Table Successfully Created<br>";
    }else{
        echo "Table Unsuccessfully Created:".$conn->error;
    }

    $conn->close();
    */

    /* */

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="db_register";

    $conn=new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection Unsuccessful:".$conn->connect_error);
    }else{
        echo "Connection successful<br><br>";
    }

    $sql="INSERT INTO user_registration (FirstName,LastName,Age,State) VALUES ('$fname','$lname','$age','$state')";

    if($conn->query($sql)){
        echo "Data Insert Successfully<br>";
    }else{
        echo "Data Insert Unsuccessfully:".$conn->error;
    }

    $conn->close();

    echo "Welcome ".$fname." !<br>";
    echo "Your name is ".$fname." ".$lname."<br>";
    echo "You are ".$age." years old and staying at ".$state.".";


?>