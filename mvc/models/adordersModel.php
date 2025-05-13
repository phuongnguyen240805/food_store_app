<?php
class AdordersModel extends DB {
  public function adorders() {
      $sql = "SELECT ID, TENKH, PHONE, DIACHI, TOTAL, TRANGTHAI FROM orders";
      return mysqli_query($this->conn, $sql);
  }

  public function updateOrderStatus($id, $trangthai) {
    $sql = "UPDATE orders SET TRANGTHAI = ? WHERE ID = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ii", $trangthai, $id);
    return $stmt->execute();
}
}


?>