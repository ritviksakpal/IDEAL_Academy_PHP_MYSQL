<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];   
    $course = $_POST['course'];


    //database connection

    $con = new mysqli('localhost', 'id15574462_ritvik_vs', 'R0L<7xQJG5_)>dY&','id15574462_collegeproject');
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