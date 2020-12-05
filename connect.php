<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];   
    $course = $_POST['course'];


    //database connection

    $con = new mysqli('localhost', 'root', '','collegeproject');
    if($con->connect_error){
        die('Connection Failed : ' .$con->connect_error);
    }else{
        $stmt = $con->prepare("INSERT INTO registeration(name, email, phone, course) values(?,?,?,?)");
        $stmt->bind_param('ssis',$name, $email, $phone, $course);
        $stmt->execute();
        echo "Your form has been submitted";
        $stmt->close();
        $con->close();
    }
?>