<!-- dùng để gọi model -->
<!-- dùng đc nhiều lần -->
<?php

class Controller
{
    // require model
    public function model($model)
    {
        require_once "./mvc/models/" . $model . ".php";
        return new $model;
    }

    //require view 
    public function view($view, $data = [])
    {
        require_once "./mvc/views/" . $view . ".php"; //tải giao diện mà không cần phải trả lại kết quả.
    }

}

?>