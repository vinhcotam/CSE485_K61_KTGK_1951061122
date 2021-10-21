<?php
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $birthofdate =$_POST['birthofdate'];
    $gender =$_POST['gender'];
    $mobile =$_POST['mobile'];
    $email =$_POST['email'];
    $height =$_POST['height'];
    $weight =$_POST['weight'];
    $blood_type =$_POST['blood_type'];
    $created_on =$_POST['created_on'];
    $modified_on =$_POST['modified_on'];
    include 'conf.php';
    $sql = "INSERT INTO tb_patient (firstname,lastname,dateofbirth,gender ,mobile, email,height,weight,blood_type,created_on,modified_on)
    VALUES ('$firstname','$lastname','$birthofdate','$gender','$mobile','$email','$height','$weight','$blood_type','$created_on','$modified_on')";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: index.php");
    }else{
        echo "Loi";
        header("Location: error.php");
    }
    mysqli_close($conn);
?>