<?php
namespace app\core;

class Request 
{
    public function getPath() 
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody() 
    {
        $body = [];

        if($this->isGet()) {
            foreach($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $value, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if($this->isPost()) {
            foreach($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        return $body;
    }

    function isGet()
    {
        return $this->getMethod() === 'get';
    }

    function isPost()
    {
        return $this->getMethod() === 'post';
    }

}
?>