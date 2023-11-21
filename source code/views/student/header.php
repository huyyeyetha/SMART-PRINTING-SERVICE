<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="/BTL_CNPM/public/css/utilities.css" rel="stylesheet" />
    <link href="/BTL_CNPM/node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
</head>

<body class="h-100">
    <div class="container-fluid h-100 p-0">
        <div class="row border-bottom fixed-top" style="height: 75px;line-height:75px">
            <div class="col-auto">
                <div class="ms-3 px-3 border fw-bold" style="line-height: 55px; margin-top:10px;">...</div>
            </div>
            <div class="col">
                <div class="container-fluid bgc-dblue m-0 fs-3">Smart Print Service for Students</div>
            </div>
        </div>

        <div class="row h-100" style="padding-top: 75px;">
            <div class="col-lg-2 p-0 border">
                <div>
                    <div class="ps-4">
                        <div class="py-3">
                            <a href="index.php?page=student&controller=layouts&action=index" class="text-decoration-none text-black fs-6
                            <?php
                            if ($page == "layouts") echo ' fs-4'
                            ?>
                            ">Trang chủ</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=student&controller=history&action=index" class="text-decoration-none text-black fs-6
                            <?php
                            if ($page == "history") echo ' fs-4'
                            ?>
                            ">Lịch sử</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=student&controller=storage&action=index" class="text-decoration-none text-black fs-6
                            <?php
                            if ($page == "storage") echo ' fs-4'
                            ?>
                            ">Kho tài liệu</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=student&controller=account&action=index" class="text-decoration-none text-black fs-6
                            <?php
                            if ($page == "account") echo ' fs-4'
                            ?>
                            ">Tài khoản</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=student&controller=buy_paper&action=index" class="text-decoration-none text-black fs-6
                            <?php
                            if ($page == "buy_paper") echo ' fs-4'
                            ?>
                            ">Mua thêm giấy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">