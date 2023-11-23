<?php
session_start();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['role'])) {
        $_SESSION['user'] = $_POST['role'];
        session_write_close();
        $linkTo = "Location: index.php?page=" . $_SESSION['user'] . "&controller=layouts&action=index";
        header($linkTo);
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="/BTL_CNPM/public/css/utilities.css" rel="stylesheet" />
    <link href="/BTL_CNPM/node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
</head>

<body>
    <div>
        <div class="container text-center mt-5 pt-5">
            <form method="POST" action="">
                <label>Chọn vai trò của bạn:
                    <select name="role">
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                        <option value="paperAdder">Paper Adder</option>
                    </select>
                </label>
                <button class="bg-white border-1" type="submit">Đăng nhập</button>
            </form>
            <hr>
            <div class="row">
                <div class="col">Tính năng đăng nhập không được thực hiện.</div>
            </div>
            <div class="row">
                <div class="col">Đây là trang chọn vai trò của user.</div>
            </div>

        </div>
    </div>
</body>

</html>