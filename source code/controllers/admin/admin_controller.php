<?php
require_once('controllers/admin/base_controller.php');

class AccountController extends BaseController
{
    function __construct()
    {
        $this->folder = 'admin';
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
