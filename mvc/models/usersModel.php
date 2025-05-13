<?php
class Usersmodel extends DB
{
    public function usersview()
    {
        $sql = "SELECT * FROM khachhang";
        return mysqli_query($this->conn, $sql);

    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM khachhang WHERE IDKH = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}


?>