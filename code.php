<?php
session_start();
include('config/dbcon.php');

if(isset($_POST['save']))
{
    if(($_POST['studentname'] == "")||($_POST['rollno'] == "")||($_POST['class'] == "")||($_POST['gender'] == "")||($_POST['dob'] == "")||($_POST['address'] == "")){
        header("Location: addstudent.php");
    }
    else{
    $studentname = $_POST['studentname'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $query = "INSERT INTO students (studentname, rollno, class,gender,dob,address) VALUES ('$studentname', '$rollno', '$class', '$gender', '$dob', '$address')";
    $query_run = $conn->exec($query);
    header("Location: addstudent.php");
}
}


?>