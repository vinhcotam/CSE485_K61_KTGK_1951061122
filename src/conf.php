<?php
        //define('HOST','localhost');
       // define('USER','root');
       // const PASS='';
       // const DB ='patient';
        $conn=mysqli_connect('localhost','root','','patient');
        if(!$conn)
        {
            die('Fail'); //thong bao loi, dung thuc hien code ben duoi neu loi
        }
        //echo 'test';
?>