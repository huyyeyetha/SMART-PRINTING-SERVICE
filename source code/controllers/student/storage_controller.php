<?php
require_once('controllers/student/base_controller.php');

class StorageController extends BaseController
{
    function __construct()
    {
        $this->folder = 'storage';
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
