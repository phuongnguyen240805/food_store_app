<?php
// class OrdersdetailModel extends DB {
//     public function ordersdetail($id) {
//         $sql = "SELECT gh.*, kh.TENKH, sp.TENSP 
//                 FROM giohang gh
//                 INNER JOIN khachhang kh ON gh.IDKH = kh.IDKH
//                 INNER JOIN sanpham sp ON gh.IDSP = sp.IDSP
//                 WHERE gh.ID = '$id'";
//         return mysqli_query($this->conn, $sql);
//     }

//     public function getOrderInfo($id) {
//         $sql = "SELECT * FROM orders WHERE ID = '$id'";
//         $result = mysqli_query($this->conn, $sql);
//         return mysqli_fetch_assoc($result);
//     }

// }
?>
<?php
// class OrdersdetailModel extends DB {
//     public function ordersdetail($id){
//         $sql = "SELECT gh.*, kh.TENKH, sp.TENSP 
//                 FROM giohang gh
//                 INNER JOIN khachhang kh ON gh.IDKH = kh.IDKH
//                 INNER JOIN sanpham sp ON gh.IDSP = sp.IDSP
//                 WHERE gh.IDKH = (SELECT IDKH FROM giohang WHERE ID = '$id')";
//         return mysqli_query($this->conn, $sql);
//     }

//     public function getOrderInfo($id) {
//         $sql = "SELECT gh.ID, kh.TENKH, gh.IDKH
//                 FROM giohang gh
//                 INNER JOIN khachhang kh ON gh.IDKH = kh.IDKH
//                 WHERE gh.ID = '$id'
//                 LIMIT 1";
//         $result = mysqli_query($this->conn, $sql);
//         return mysqli_fetch_assoc($result);
//     }
// }
?>
<?php
class OrdersdetailModel extends DB {
    public function ordersdetail($id) {
        $sql = "SELECT gh.*, kh.TENKH, sp.TENSP 
                FROM giohang gh
                INNER JOIN khachhang kh ON gh.IDKH = kh.IDKH
                INNER JOIN sanpham sp ON gh.IDSP = sp.IDSP
                WHERE gh.IDKH = (SELECT IDKH FROM giohang WHERE ID = '$id')";
        return mysqli_query($this->conn, $sql);
    }

    public function getOrderInfo($id) {
        $sql = "SELECT gh.ID, kh.TENKH, gh.IDKH, o.TRANGTHAI
                FROM giohang gh
                INNER JOIN khachhang kh ON gh.IDKH = kh.IDKH
                INNER JOIN orders o ON o.ID = gh.ID
                WHERE gh.ID = '$id'
                LIMIT 1";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
}
?>