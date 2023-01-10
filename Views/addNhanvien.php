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
    THÊM DANH SÁCH NHÂN VIÊN
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <h4 class="mb-3" style="text-align: center">Nhập thông tin vào form</h4>
                <form action="index.php?url=add" method="post">
                    <input class="form-control mb-3" type="text" placeholder="id autocrement" aria-label="default input example" disabled="">
                    <input class="form-control mb-3" type="text" placeholder="tên nhân viên" aria-label="default input example" name="name">
                    <input class="form-control" type="number" placeholder="tuổi nhân viên" aria-label="default input example" name="age">
                    <input class="btn btn-primary mt-3 col-sm-3" type="submit" value="Submit INFO" name="submit">
                </form>
            </div>
        </div>
        <div class="col-sm-3">

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
