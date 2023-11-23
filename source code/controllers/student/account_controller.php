<?php
require_once('controllers/student/base_controller.php');

class AccountController extends BaseController
{
    function __construct()
    {
        $this->folder = 'account';
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
