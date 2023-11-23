<?php
require_once('controllers/student/base_controller.php');

class BuyPaperController extends BaseController
{
    function __construct()
    {
        $this->folder = 'buy_paper';
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
