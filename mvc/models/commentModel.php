<?php
class CommentModel extends DB
{

    /* get comment */
    function getComment($idsp)
    {
        /*  $sql = 'SELECT * FROM binhluan ORDER BY thoigian DESC';
         $stmt = $this->conn->prepare($sql);
         return $stmt->result(); */
        $sql = "SELECT * FROM binhluan WHERE idsp = $idsp ORDER BY thoigian DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    /* add comment */
    function addComment($username, $comment, $idsp, $thoigian)
    {
        $sql = "INSERT INTO binhluan (username, comment, idsp, thoigian) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssis', $username, $comment, $idsp, $thoigian);
        return $stmt->execute();
    }

}
?>