<?php
require_once('controllers/admin/base_controller.php');

class PrinterController extends BaseController
{
    function __construct()
    {
        $this->folder = 'printer';
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
