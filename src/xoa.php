<?php
    include 'conf.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
    $sql = "delete from tb_patient where patientid ='$id'";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result>0){
        header("Location: index.php");
    }else{
        header('location:"error.php"');
    }
    mysqli_close($conn);
?>