<?php
    include_once '../ketnoi.php';
    include_once 'kiemtra.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="sidenav col-md-2">
                <a href="index.php">DASHBOARD</a>
                <a href="?tpl=baiviet/ds">Bai viet</a>
                <a href="?tpl=chuyenmuc/ds">Chuyen muc</a>
                <a href="?tpl=nguoidung/ds">Nguoi dung</a>
                <a href="dangxuat.php">Thoat</a>
            </div>

            <div class="content container col-md-10">
                <?php
                    if(isset($_GET['tpl'])){
                        include_once 'tpl/' . $_GET['tpl']. '.php';
                    }
                    else{
                        include_once 'home.php';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>