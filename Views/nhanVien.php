<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <div class="alert alert-primary" role="alert">
            List danh sách thông tin của nhân viên
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">ID</th>
                <th scope="col">NameStaff</th>
                <th scope="col">AgeStaff</th>
                <th scope="col">Thao tác</th>
            </tr>
            </thead>
                <tbody class="table-group-divider">
                <?php
                $stt = 0;
                foreach ($listStaff as $value) {
                    extract($value);
                    $sua = "index.php?url=edit&&id=".$value['id'];
                    $xoa = "index.php?url=delete&&id=".$value['id'];
                    $stt++;
                ?>
                    <tr>
                        <th scope="row"><?php echo $stt ?></th>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['nameStaff'] ?></td>
                        <td><?php echo $value['ageStaff'] ?></td>
                        <td><a href="<?php echo $sua?>" class="btn btn-primary">Sửa</a>    ||   <a href="<?php echo $xoa?>" class="btn btn-danger">Xóa</a></td>
                    </tr>
                <?php }?>
                </tbody>
        </table>
        <a href="index.php?url=add" class="btn btn-primary mt-2 ">Thêm mới</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>