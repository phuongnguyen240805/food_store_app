<?php
class DetailModel extends DB
{
    /* hien thi san pham voi id tuong ung */
    function productDetailShow($idsp)
    {
        $sql = "SELECT * FROM sanpham WHERE IDSP = $idsp";
        return mysqli_query($this->conn, $sql);
    }

    /* sản phẩm liên quan */
    function relatedProduct($iddm)
    {
        $sql = "SELECT * FROM sanpham WHERE IDDM = $iddm LIMIT 4";
        return mysqli_query($this->conn, $sql);
    }

}
?>