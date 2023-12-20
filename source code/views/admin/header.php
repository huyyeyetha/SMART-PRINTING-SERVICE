<?php
session_start();
if (!(isset($_SESSION['user']) && $_SESSION['user'] == 'admin')) {
    session_write_close();
    header("Location: index.php?page=authorize&controller=login&action=index");
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPSS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="/public/css/datnguyen.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="/public/js/datnguyen.js"></script>
</head>

<body class="h-100">
    <div class="container-fluid h-100 p-0">
        <div class="row fixed-top bg-white" style="height: 75px;line-height:75px">
            <div class="col border-bottom border-black">
                <div class="container-fluid m-0 fs-3">Smart Print Service</div>
            </div>

            <div class="col-auto px-5 border-start border-bottom hover-bg-gray hover-mouse border-black">
                <a class="text-decoration-none text-black" href="index.php?page=authorize&controller=login&action=index">
                    <?php
                    if (isset($_SESSION['user'])) echo "Logout";
                    else echo "Login";
                    ?>
                </a>
            </div>
        </div>

        <div class="row h-100" style="padding-top: 75px;">
            <div class="col-lg-2 p-0 border-end border-black fixed h-100">
                <div>
                    <div class=" ps-4">
                        <div class="py-3">
                            <a href="index.php?page=admin&controller=layouts&action=index" class="hover-bold text-decoration-none text-black fs-6
                            <?php
                            if ($page == "layouts") echo ' fw-bold fs-4'
                            ?>
                            ">Trang chủ</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=admin&controller=config_page&action=index" class="hover-bold text-decoration-none text-black fs-6
                            <?php
                            if ($page == "config_page") echo ' fw-bold fs-4'
                            ?>
                            ">Cấu hình trang in</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=admin&controller=printer&action=index" class="hover-bold text-decoration-none text-black fs-6
                            <?php
                            if ($page == "printer") echo ' fs-4 fw-bold'
                            ?>
                            ">Điều khiển máy in</a>
                        </div>
                        <div class="py-3">
                            <a href="index.php?page=admin&controller=view_student_history&action=index" class="hover-bold text-decoration-none text-black fs-6
                            <?php
                            if ($page == "view_student_history") echo ' fs-4 fw-bold'
                            ?>
                            ">Xem lịch sử in của sinh viên</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-10">