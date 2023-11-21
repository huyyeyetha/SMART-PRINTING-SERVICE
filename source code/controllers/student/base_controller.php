<?php
class BaseController
{
    protected $folder;


    function render($file, $data = array())
    {

        $view_file = 'views/student/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('views/student/basic_layouts.php');
        } else {
            header('Location: index.php?page=student&controller=layouts&action=error');
        }
    }
}
