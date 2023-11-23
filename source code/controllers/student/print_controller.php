<?php
require_once('controllers/student/base_controller.php');

class PrintController extends BaseController
{
    function __construct()
    {
        $this->folder = 'print';
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
