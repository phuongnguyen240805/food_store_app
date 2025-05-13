<?php
class Login extends Controller
{
    /* đăng nhập */
    function accLogin()
    {
        if (isset($_SERVER['REQUEST_METHOD']) == "POST") {
            if (!empty($_POST['tenTk']) && !empty($_POST['matkhau'])) {

                $tenTk = $_POST['tenTk'];
                $matkhau = $_POST['matkhau'];

                $loginModel = $this->model("accountModel");
                $result = $loginModel->loginAccount($tenTk, $matkhau);

                if (mysqli_num_rows($result) == 0) {
                    $resultCheck = false;
                    $this->view("loginView", ["resultCheck" => $resultCheck]);
                } else {
                    $row = mysqli_fetch_array($result);

                    $id = $row['IDKH'];
                    $tenTk = $row['TENTAIKHOAN'];
                    $matkhau = $row['MATKHAU'];
                    $img = $row['IMG'];

                    $_SESSION['IDKH'] = $id;
                    $_SESSION['TENTAIKHOAN'] = $tenTk;
                    $_SESSION['IMG'] = $img;

                    header("location: " . BASE_URL . "Home/");
                    exit();
                }
            }
        }
        $this->view("loginView");
    }

    /* đăng xuất tài khoản */
    function logout()
    {
        unset($_SESSION['IDKH']);
        session_destroy();
        header("location: " . BASE_URL . "Home/");
        exit();
    }
}
?>