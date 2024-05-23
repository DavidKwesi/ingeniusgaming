<?php

include '../settings/conn1.php';

if(isset($_POST["registerinfo"])){
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $registeremail=$_POST["registeremail"];
    $password=$_POST["password"];
    $retypepassword=$_POST["retypepassword"];
    
    // $password=md5($password);
    // $retypepassword=md5($retypepassword);

    $checkEmail="SELECT * From register where registeremail='$registeremail'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "<script type='text/javascript'>alert('Email Already Exist');</script>";
    }

    else{
        $insertQuery="INSERT INTO register(firstName,lastName,registeremail,password,retypepassword)
        VALUES('$firstName','$lastName','$registeremail','$password', '$retypepassword')";

        if($conn->query($insertQuery)==TRUE){
            header("location:../view/Login Page.php");
        }

        else{
            echo "Error:".$conn->error;
        }

    
    }
}

if(isset($_POST["logininfo"])){
    $registeremail=$_POST["useremail"];
    $password=$_POST["password"];
    // $password=md5($password);

    $sql="SELECT* From register WHERE registeremail='$registeremail' and password='$password'";
    $result=$conn->query($sql);

    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['registeremail']=$row['registeremail'];
        header("Location:Homepage.php");
        exit();
    }

    // else{
    //     echo "Incorrect email or password";
    // }

}

?>