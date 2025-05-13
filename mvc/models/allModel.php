<?php
class Allmodel extends DB{
  public function hienthi(){
    $sql = "SELECT * FROM khachhang";
    $result = $this->conn->query($sql);
    $count = 0;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $count++;
        }
    }

    return $count;
  }

  public function hienthidm(){
    $sql="SELECT * from danhmuc";
                        $result=$this->conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        return $count;
 
 }
 public function hienthisp(){
     $sql="SELECT * from sanpham";
                       $result=$this->conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       return $count;
 }
}





?>