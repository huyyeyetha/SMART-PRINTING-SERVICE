<?php
require_once('controllers/student/base_controller.php');

class HistoryController extends BaseController
{
    function __construct()
    {
        $this->folder = 'history';
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
