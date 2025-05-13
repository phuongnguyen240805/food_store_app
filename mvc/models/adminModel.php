<?php
class AdminModel extends DB {
    public function checkAdmin($username, $password) {
        $sql = "SELECT * FROM adminn WHERE TENADMIN = ? AND MKADMIN = ?";
        $stmt = $this->conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->num_rows > 0;
        }

        return false; // Trả về false nếu chuẩn bị câu lệnh thất bại
    }
}
?>