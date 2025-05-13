<!-- nơi gọi model view controller -->

<?php
class App
{
    // http://localhost/BT/mvc%20practice/home/intro/1/2
    protected $controller = "Home"; // (home)
    protected $action = "intro"; // (intro)
    protected $param = []; // (1/2)

    function __construct()
    { 
        // hàm tạo
        $arrayUrl = $this->urlProcess(); /* Array ( [0] => home [1] => category [2] => 1 [3] => 2 ) */

        // xử lí controller
        /* file_exists() kiểm tra xem một file hoặc thư mục có tồn tại hay không */
        if (file_exists("./mvc/controllers/" . $arrayUrl[0] . ".php"))  /* kiểm tra ./mvc/controllers/home.php có tồn tại hay không */ {
            $this->controller = $arrayUrl[0];
            unset($arrayUrl[0]);
        }
        require_once "./mvc/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        // xử lí action 
        if (isset($arrayUrl[1])) {
            if (method_exists($this->controller, $arrayUrl[1])) { // check controller có tồn tại hay không 
                $this->action = $arrayUrl[1]; // gán value mới cho biến $action
                unset($arrayUrl[1]);
            }
        }

        // xử lí param
        $this->param = $arrayUrl ? array_values($arrayUrl) : [];
        // $this->param đang là 1 array

        //$ctl = new $this->controller; // fix
        call_user_func_array([$this->controller, $this->action], $this->param);

    }


    // xử lí thanh địa chỉ
    function urlProcess()
    {
        if (isset($_GET["url"])) {
            /* filter_var là một hàm trong PHP được sử dụng để lọc và xác thực dữ liệu */
            return explode( // cắt chuỗi thành array
                "/",
                filter_var(trim($_GET["url"], "/"))
            ); // trả về những gì người dùng nhập vào


        }

    }
}


?>