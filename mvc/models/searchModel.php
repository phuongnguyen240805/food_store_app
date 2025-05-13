<?php
class SearchModel extends DB
{
    public function getSearch($search, $page)
    {
        // Tách các từ từ input
        $keywords = explode(' ', $search);

        $likeClauses = [];

        foreach ($keywords as $keyword) {
            $likeClauses[] = "TENSP LIKE '%" . $this->conn->real_escape_string($keyword) . "%'";
        }

        // Ghép các câu LIKE lại thành một chuỗi
        $limit = 8;
        $start = ($page - 1) * $limit;
        $sql = "SELECT * FROM sanpham WHERE " . implode(' OR ', $likeClauses) . "LIMIT $start, $limit";
        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return $result;
        } else {
            return "khong tim thay san phâm";
        }
    }
}
?>