<?php
class ClientModel extends DB
{
    function getInfo($idKh)
    {
        $sql = "SELECT * FROM khachhang WHERE IDKH = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $idKh);
        $stmt->execute();
        return $stmt->get_result();
    }

    function updateInfo($idKh, $tenTk, $matkhau, $email)
    {
        $sql = "UPDATE khachhang SET TENTAIKHOAN = ?, MATKHAU = ?, EMAIL = ? WHERE IDKH = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssss', $tenTk, $matkhau, $email, $idKh);
        return $stmt->execute();
    }

}

?>