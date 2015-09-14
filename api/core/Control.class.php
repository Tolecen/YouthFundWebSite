<?php

class Controller
{
    public function Run()
    {
        $this->Analysis();
        $control = $_GET['c'];
        $action = $_GET['a'];
        //这里构造出控制器文件的路径
        $controlFile = ROOT_PATH . "api/Controllers/" . $control . ".class.php";
        if (!file_exists($controlFile)) {
            exit("控制器文件不存在" . $controlFile);
        }
        include($controlFile);
        $class = ucwords($control);
        if (!class_exists($class)) {
            exit("未定义的控制器类" . $class);
        }
        $instance = new $class();
        if (!method_exists($instance, $action)) {
            exit("不存在的方法" . $action);
        }
        $instance->$action();
    }

    protected function Analysis()
    {
        if (isset($_SERVER['PATH_INFO'])) {
            $path = trim($_SERVER['PATH_INFO'], '/');
            $paths = explode('/', $path);
            $control = array_shift($paths);
            $action = array_shift($paths);
        }
        $_GET['c'] = $control = !empty($control) ? $control : "nightkiss";
        $_GET['a'] = $action = !empty($action) ? $action : "index";
    }
}

?>