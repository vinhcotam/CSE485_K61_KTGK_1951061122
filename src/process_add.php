<?php
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    include 'conf.php';
    $sql = "INSERT INTO tb_patient (firstname,lastname, mobile, email)
    VALUES ('$firstname','$lastname','$mobile','$email')";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: index.php");
    }else{
        echo "Loi";
    }
    mysqli_close($conn);
?>