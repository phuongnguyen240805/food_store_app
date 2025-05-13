<?php
class StatisticalModel extends DB
{
    public function statistical()
    {
        $query = "SELECT `danhmuc`.*, COUNT(sanpham.IDDM) AS `number_cate` 
    FROM `sanpham` 
    INNER JOIN `danhmuc` ON sanpham.IDDM = danhmuc.ID 
    GROUP BY sanpham.IDDM";
        $result = mysqli_query($this->conn, $query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
        return $data;
    }


}



?>