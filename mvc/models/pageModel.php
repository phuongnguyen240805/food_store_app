<?php
class PageModel extends DB
{

    /* vegetable page */
    public function vegetablePage()
    {
        $sql_phone = "SELECT count(IDSP) as total FROM sanpham WHERE IDDM=1";
        $result = mysqli_query($this->conn, $sql_phone);
        $row = mysqli_fetch_array($result);
        $limit = 8;

        $page_num = ceil($row['total'] / $limit);
        return $page_num;
    }

    /* fresh page */
    public function freshPage()
    {
        $sql_phone = "SELECT count(IDSP) as total FROM sanpham WHERE IDDM=2";
        $result = mysqli_query($this->conn, $sql_phone);
        $row = mysqli_fetch_array($result);
        $limit = 8;

        $page_num = ceil($row['total'] / $limit);
        return $page_num;
    }

    /* fruit page */
    public function fruitPage()
    {
        $sql_phone = "SELECT count(IDSP) as total FROM sanpham WHERE IDDM=3";
        $result = mysqli_query($this->conn, $sql_phone);
        $row = mysqli_fetch_array($result);
        $limit = 8;

        $page_num = ceil($row['total'] / $limit);
        return $page_num;
    }

    /* phân trang trang tim kiếm */
    public function searchPage($valueInput)
    {
        $keywords = explode(' ', $valueInput);
        $likeClauses = [];

        foreach ($keywords as $keyword) {
            // Thêm điều kiện LIKE
            $likeClauses[] = "TENSP LIKE '%" . $this->conn->real_escape_string($keyword) . "%'";
        }

        $sql = "SELECT count(IDSP) as total FROM sanpham WHERE " . implode(' OR ', $likeClauses);

        $result = mysqli_query($this->conn, $sql);

        // Kiểm tra xem truy vấn có thành công không
        if ($result === false) {
            echo $result;
        }

        $row = mysqli_fetch_assoc($result);

        if ($row === null) {
            return 0;
        }

        $limit = 8; // Số sản phẩm mỗi trang
        $page_num = ceil($row['total'] / $limit); // Tính số trang
        return $page_num;
    }

}
?>