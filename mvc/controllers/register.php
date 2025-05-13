<?php
class Register extends Controller
{

    public function accRegister()
    {
        $actionResult = false;
        if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
            if (isset($_POST['tenTk'], $_POST['tenKh'], $_POST['email'], $_POST['matkhau'])) {
                $tenTk = $_POST['tenTk'];
                $tenKh = $_POST['tenKh'];
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $img = 'https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_640.png';

                $accounts = $this->model("AccountModel");
                $accounts->addAccounts($tenTk, $tenKh, $matkhau, $email, $img);
                
                $this->view("registerView");
            } else {
                $this->view("registerView");
            }
        } else {
            print_r($_POST);
        }
    }
}
?>