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
    <link href="/public/css/utilities.css" rel="stylesheet" />
    <link href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="./views/authorize/login/login.css" rel="stylesheet" />
</head>

<body>
    <div class="background-bk">
        <div class="container text-center mt-5 pt-5 w-50" style="background-color: white; border-radius: 1rem;">
            <div class="row justify-content-center">
                <form method="POST">
                    <h1 class="h3 mb-3 fw-normal">Đăng nhập</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Tài khoản">
                        <label for="floatingInput">Tài khoản</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Mật khẩu">
                        <label for="floatingPassword">Mật khẩu</label>
                    </div>
                    Chọn vai trò của bạn:
                    <select name="role" class="form-select w-100">
                        <option value="student">Student</option>
                        <option value="admin">Admin</option>
                        <option value="paperAdder">Paper Adder</option>
                    </select>
                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <button class="btn btn-primary py-2 w-100" type="submit">Đăng nhập</button>
                    </div>
                    <div>
                        <button class="btn btn-info py-2 w-100" type="button">Đăng kí</button>
                    </div>
                </form>
            </div>
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