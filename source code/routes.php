<?php
$pages = array(
  'error' => ['errors'],
  'main' => ['layouts', 'about', 'services', 'blog', 'archive', 'contact', 'login', 'register', 'edit'],
  'student' => ['layouts', 'print', 'buy_paper', 'history', 'storage', 'account'],
  'admin' => ['layouts, admin'],
  'authorize' => ['login']
);
$controllers = array(
  'layouts' => ['index'],
  'login' => ['index'],
  'print' => ['index'],
  'storage' => ['index'],
  'buy_paper' => ['index'],
  'account' => ['index'],
  'history' => ['index'],
  'admin' => ['index'],
  'config_page' => ['index'],
  'printer' => ['index'],
  'view_student_history' => ['index'],
); // Các controllers trong hệ thống và các action có thể gọi ra từ controller đó.

// Nếu các tham số nhận được từ URL không hợp lệ (không thuộc list controller và action có thể gọi
// thì trang báo lỗi sẽ được gọi ra.
if (!array_key_exists($page, $pages) || !array_key_exists($controller, $controllers) || !in_array($action, $controllers[$controller])) {
  $page = 'error';
  $controller = 'errors';
  $action = 'index';
}
if ($page == 'error') {
  $controller = 'errors';
  $action = 'index';
}

// Nhúng file định nghĩa controller vào để có thể dùng được class định nghĩa trong file đó
include_once('controllers/' . $page . "/" . $controller . '_controller.php');
// Tạo ra tên controller class từ các giá trị lấy được từ URL sau đó gọi ra để hiển thị trả về cho người dùng.
$klass = str_replace('_', '', ucwords($controller, '_')) . 'Controller';
$controller = new $klass;
$controller->$action();
