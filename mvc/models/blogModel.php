<?php
class BlogModel extends DB
{

    /* giới thiệu các blog */
    public function blogInfo()
    {
        $sql = "SELECT * FROM blog LIMIT 4";
        return mysqli_query($this->conn, $sql);
    }

    /* xem tin chi tiết */
    public function detailBlog($id)
    {
        $sql = "SELECT * FROM blog WHERE ID = $id";
        return mysqli_query($this->conn, $sql);
    }

    /* hiển thị các bài port liên quan */
    public function relatedBlog($iddm)
    {
        $sql = "SELECT * FROM blog WHERE IDDM = $iddm LIMIT 3";
        return mysqli_query($this->conn, $sql);
    }

}
?>