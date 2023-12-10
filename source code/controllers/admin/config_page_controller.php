<?php
require_once('controllers/admin/base_controller.php');

class ConfigPageController extends BaseController
{
    function __construct()
    {
        $this->folder = 'config_page';
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
