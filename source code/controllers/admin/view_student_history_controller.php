<?php
require_once('controllers/admin/base_controller.php');

class ViewStudentHistoryController extends BaseController
{
    function __construct()
    {
        $this->folder = 'student_history';
    }

    public function index()
    {
        $this->render('index');
    }

    public function error()
    {
        $this->render('error');
    }
}
