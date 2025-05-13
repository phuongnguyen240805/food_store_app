<?php
class ProductsModel extends DB
{
  public function products()
  {
    $sql = 'SELECT * FROM sanpham ORDER BY IDSP DESC';
    return mysqli_query($this->conn, $sql);
  }
  public function getTotalProducts($iddm = null)
  {
    $sql = "SELECT COUNT(*) as total FROM sanpham";
    if ($iddm) {
      $sql .= " WHERE IDDM = ?";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("i", $iddm);
      $stmt->execute();
      $result = $stmt->get_result();
    } else {
      $result = mysqli_query($this->conn, $sql);
    }
    $row = mysqli_fetch_assoc($result);
    return $row['total'];
  }

  public function getproducts($iddm = null, $start = 0, $limit = 5)
  {
    $sql = "SELECT * FROM sanpham";
    if ($iddm) {
      $sql .= " WHERE IDDM = ? ";
      $stmt = $this->conn->prepare($sql);
      $stmt->bind_param("i", $iddm);
      $stmt->execute();
      return $stmt->get_result();
    } else {
      //Nếu không có iddm, Lấy tất cả sản phẩm
      return mysqli_query($this->conn, $sql);
    }



  }

  // Xóa sản phẩm
  public function deleteProduct($idsp)
  {
    $sql = "DELETE FROM sanpham WHERE IDSP = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $idsp);
    return $stmt->execute();
  }

  public function getNameCategory()
  {
    $sql = "SELECT * FROM danhmuc ";
    return mysqli_query($this->conn, $sql);
  }

  public function addProduct($tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category)
  {
    $sql = "INSERT INTO sanpham (TENSP, SOLUONG, GIASP, GIACU, IMG, IDDM) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("siiisi", $tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category);
    return $stmt->execute();
  }
  public function updateProduct($idsp, $tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category)
  {
    $sql = "UPDATE sanpham SET TENSP = ?, SOLUONG = ?, GIASP = ?, GIACU = ?, IMG = ?, IDDM = ? WHERE IDSP = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("siissii", $tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category, $idsp);
    return $stmt->execute();
  }


  public function searchProducts($keyword)
  {
    $stmt = $this->conn->prepare("SELECT sp.*, dm.TENDM 
                               FROM sanpham sp 
                               LEFT JOIN danhmuc dm ON sp.IDDM = dm.ID 
                               WHERE sp.TENSP LIKE ?");
    $searchKeyword = "%$keyword%";
    $stmt->bind_param("s", $searchKeyword);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result;
  }
}



?>