<?php
    include 'conf.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Sửa</title>
</head>

<body>
    <main>
        <h2>Sửa</h2>
        <?php
        $sql="SELECT * FROM tb_patient WHERE patientid=$id";
        $res=mysqli_query($conn, $sql);
        if($res==true)
        {
            if(mysqli_num_rows($res)==1)
            {
                $row=mysqli_fetch_assoc($res);
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                
            }
            else
            {
                header('location:"index.php"');
            }
        }
    ?>
        <?php
        if(isset($_POST["edit"])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $mobile =$_POST['mobile'];
            $email = $_POST['email'];
            $sql = "UPDATE tb_patient SET firstname='$firstname',lastname='$lastname',
            mobile='$mobile',email='$email' WHERE patientid = $id";
            $result = mysqli_query($conn,$sql);
            header("location:index.php");
        }

?>
<form action="" method="POST">
        <label for="patientid" name="patientid">Mã: <?php echo $id; ?></label>
        
    <div class="mb-3">
            <label for="firstname" class="form-label">Họ của bệnh nhân</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']; ?>" >
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Tên bệnh nhân</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']; ?>">
        </div>
        <div class="mb-3">
            <label for="mobile" class="form-label">Số điện thoại</label>
            <input type="tel" class="form-control" name="mobile" value="<?php echo $row['mobile']; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email'];; ?>">
        </div>
        <button type="submit" class="btn btn-primary" value="edit" name="edit">Sửa</button>
    </form>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>