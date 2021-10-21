<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <main>
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm bệnh nhân</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Họ bệnh nhân</th>
                    <th scope="col">Tên bệnh nhân</th>
                    <th scope="col">Sô điện thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Thông tin chi tiết</th>
                    <th scope="col">Sửa thông tin</th>
                    <th scope="col">Xóa thông tin</th>
                </tr>
            </thead>

            <tbody>
                <!--thay đổi-->
                <?php
                    //4 bước
                    //b1:
                    include 'conf.php';
                    //b2
                    $sql="select patientid,firstname, lastname, mobile, email from tb_patient";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patientid'].'</th>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td><a href="chitiet.php?id='.$row['patientid'].'" class="btn btn-primary"><i class="fas fa-user-edit"></i>Chi tiết</a></td>';
                            echo '<td><a href="sua.php?id='.$row['patientid'].'" class="btn btn-primary"><i class="fas fa-user-edit"></i>Edit</a></td>';
                            echo '<td><a href="xoa.php?id='.$row['patientid'].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a></td>';
                            echo '</tr>';   
                        }
                    }
                ?>

                <!--thay đổi-->
            </tbody>
        </table>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>