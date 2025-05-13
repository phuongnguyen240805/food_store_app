<?php
class CartModel extends DB
{

    /* them san pham vao gio hang */
    function addProductCart($idKh, $idSp, $soluong, $giaSp)
    {
        $sql = "INSERT INTO giohang (IDKH, IDSP, SOLUONG, GIA) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssss', $idKh, $idSp, $soluong, $giaSp);
        return $stmt->execute();
    }

    /* thong tin khách hàng trong gio hang */
    /*  function userCart($idKh)
     {
         $sql = "SELECT * FROM giohang WHERE IDKH = ?";
         $stmt = $this->conn->prepare($sql);
         $stmt->bind_param('s', $idKh);
         $stmt->execute();
         $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

         return $cart_items;
     } */

    public function updateProductStock($productId, $qty)
    {
        $sql = "UPDATE sanpham SET SOLUONG = SOLUONG - ? WHERE IDSP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ss', $qty, $productId);
        return $stmt->execute();
    }

    /* thong tin khách hàng khi đặt hàng */
    /*  public function order($name, $phone, $address, $price)
     {
         $sql = "INSERT INTO order (TENKH, PHONE, DIACHI, TOTAL) VALUES (?, ?, ?, ?)";
         $stmt = $this->conn->prepare($sql);
         $stmt->bind_param('sisi', $name, $phone, $address, $price);
         return $stmt->execute();
         
     } */
    public function orders($name, $phone, $address, $totalPrice)
    {
        $query = "INSERT INTO orders (TENKH, PHONE, DIACHI, TOTAL) VALUES (?, ?, ?, ?)";

        // Kiểm tra nếu chuẩn bị thất bại
        $stmt = $this->conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->conn->error); // Kiểm tra lỗi cụ thể
        }

        // Bind tham số
        $stmt->bind_param("sssd", $name, $phone, $address, $totalPrice);

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return $stmt->insert_id; // Trả về ID của đơn hàng vừa tạo
        } else {
            die("Execute failed: " . $stmt->error); // Kiểm tra lỗi thực thi
        }
    }


}
?>