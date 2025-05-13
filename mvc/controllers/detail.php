<?php
class Detail extends Controller
{

    /* chi tiet san pham và sản phẩm liên quan */
    public function productDetail($idsp, $iddm)
    {

        /* sản phẩm chi tiết */
        $detail = $this->model("detailModel");
        $productDetail = $detail->productDetailShow($idsp);

        /* sản phẩm liên quan */
        $relatedModel = $this->model("detailModel");
        $relatedProduct = $relatedModel->relatedProduct($iddm);

        /* bình luận sản phẩm */
        $getComment = $this->model('CommentModel');
        $commentsData = $getComment->getComment($idsp);

        $this->view("detailView", ["productDetail" => $productDetail, "relatedProduct" => $relatedProduct, "commentsData" => $commentsData]);
    }

    /* comment san pham */
    public function addProductComment()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /* $username = mysqli_real_escape_string($conn, $_SESSION['TENTAIKHOAN']);
            $comment = mysqli_real_escape_string($conn, $_POST['comment']); */
            $username = $_SESSION['TENTAIKHOAN'];
            $comment = $_POST['comment'];
            $idsp = (int) $_POST['idsp'];
            $iddm = (int) $_POST['iddm'];

            $thoigian = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại

            $addComment = $this->model('CommentModel');
            $addComment->addComment($username, $comment, $idsp, $thoigian);

            header("location: " . BASE_URL . "detail/productDetail/$idsp/$iddm");

        }
    }

}
?>