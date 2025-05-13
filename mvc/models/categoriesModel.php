<?php
class CategoriesModel extends DB {
  public function Categories(){
    $sql = "SELECT * FROM danhmuc";
    return mysqli_query($this->conn,$sql);
  }
//  Thêm danh mục
 public function add_category($tendm){
  $add_c = "INSERT INTO danhmuc (TENDM) VALUES (?)";
  $stmt = $this->conn->prepare($add_c);
  $stmt->bind_param("is", $tendm,);
  return $stmt->execute();
 }
 // Xóa danh mục
public function deleteCategory($id){
  $sql ="DELETE FROM danhmuc WHERE ID = ?";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param("i", $id);
  return $stmt->execute();
}
 
public function editCategory($id, $tendm) {
  $sql = "UPDATE danhmuc SET TENDM = ? WHERE ID = ?";
  $stmt = $this->conn->prepare($sql);
  $stmt->bind_param("si", $tendm, $id);
  return $stmt->execute();
}

}


?>