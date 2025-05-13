<?php
class AccountModel extends DB
{

    /* đăng kí người dùng */
    public function addAccounts($tenTk, $tenKh, $matkhau, $email, $img)
    {
        /*  $addAcc = "INSERT INTO khachhang (TENTAIKHOAN, TENKH, MATKHAU, EMAIL, IMG) VALUES (?, ?, ?, ?, ?) ";
         $stmt = $this->conn->prepare($addAcc);
         $stmt->bind_param("sssss", $tenTk, $tenKh, $matkhau, $email, $img);
         return $stmt->execute(); */

        if (isset($_SERVER['REQUEST_METHOD']) == "submit") {
            /* kiểm tra xem tên tai khoản có trùng hay không */
            $check = "SELECT * FROM khachhang WHERE TENTAIKHOAN = ?";
            $stmt = $this->conn->prepare($check);
            $stmt->bind_param("s", $tenTk);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                //require_once "./mvc/views/notify.php";
                echo "<script>alert('Tên tài khoản đã tồn tại, vui lòng đăng kí tài khoản khác');</script>";
            } else {
                $addAcc = "INSERT INTO khachhang (TENTAIKHOAN, TENKH, MATKHAU, EMAIL, IMG) VALUES (?, ?, ?, ?, ?) ";
                $stmt = $this->conn->prepare($addAcc);
                $stmt->bind_param("sssss", $tenTk, $tenKh, $matkhau, $email, $img);

                if ($stmt->execute()) {
                    header('location: ' . BASE_URL . 'login/accLogin');
                    return true;
                } else {
                    echo "them that bai";
                    return false;
                }
            }
        }

    }

    /* đăng nhập tài khoản */
    public function loginAccount($tenTk, $matkhau)
    {
        $sql = "SELECT * FROM khachhang WHERE TENTAIKHOAN = ? AND MATKHAU = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $tenTk, $matkhau);
        if ($stmt->execute()) {
            return $stmt->get_result();
        } else {
            echo "ko tìm thấy tài khoản";
        }

    }

}
?>