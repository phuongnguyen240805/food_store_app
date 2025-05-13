<?php
class CommentsModel extends DB
{
    public function comments()
    {
        $sql = "SELECT * FROM binhluan";
        return mysqli_query($this->conn, $sql);

    }
    public function deleteComment($id)
    {
        $sql = "DELETE FROM binhluan WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}


?>