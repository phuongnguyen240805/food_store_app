<!-- nơi lấy dữ liệu từ database, xử lí dữ liệu -->
<?php

class ProductModel extends DB
{

    /* san pham vegetable từng trang */
    public function getVegetable($page)
    {
        $limit = 8;
        if (isset($page)) {
            $start = ($page - 1) * $limit;
        } else {
            $start = (1 - 1) * $limit;
        }

        return mysqli_query($this->conn, "SELECT * FROM sanpham WHERE IDDM = 1 LIMIT $start, $limit");
    }

    /* san pham fresh từng trang */
    public function getFresh($page)
    {
        $limit = 8;
        if (isset($page)) {
            $start = ($page - 1) * $limit;
        } else {
            $start = (1 - 1) * $limit;
        }

        return mysqli_query($this->conn, "SELECT * FROM sanpham WHERE IDDM = 2 LIMIT $start, $limit");
    }

    /* san pham fruit từng trang */
    public function getFruit($page)
    {
        $limit = 8;
        if (isset($page)) {
            $start = ($page - 1) * $limit;
        } else {
            $start = (1 - 1) * $limit;
        }

        return mysqli_query($this->conn, "SELECT * FROM sanpham WHERE IDDM = 3 LIMIT $start, $limit");
    }

    public function vegetable()
    {
        $vegetable = "SELECT *FROM sanpham WHERE IDDM = 1 LIMIT 8";
        return mysqli_query($this->conn, $vegetable);
    }

    public function fresh()
    {
        $fresh = "SELECT *FROM sanpham WHERE IDDM = 2 LIMIT 8";
        return mysqli_query($this->conn, $fresh);

    }
    public function fruit()
    {
        $fruit = "SELECT *FROM sanpham WHERE IDDM = 3 LIMIT 8";
        return mysqli_query($this->conn, $fruit);
    }
}

?>