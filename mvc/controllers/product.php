<?php
class Product extends Controller // kế thừa từ Controller
{
    /* lay san pham */
    function sanpham()
    {
        $products = $this->model("productModel");
        $getProduct = $products->getProducts();
        $this->view("productView", ["product" => $getProduct]);
    }

    /* lay vegetable va phan trang */
    public function vegetable()
    {

        $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;

        $productModel = $this->model("productModel");
        $vegetable = $productModel->getVegetable($page);

        $pageModel = $this->model("pageModel");
        $vegetablePage = $pageModel->vegetablePage();

        $this->view("productView", ["vegetable" => $vegetable, "vegetablePage" => $vegetablePage, "view" => "vegetableView"]);

        include '' . BASE_URL . 'views/productView.php';
    }

    /* lay fresh va phan trang */
    public function fresh()
    {
        $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;

        $productModel = $this->model("productModel");
        $fresh = $productModel->getFresh($page);

        $pageModel = $this->model("pageModel");
        $freshPage = $pageModel->freshPage();

        $this->view("productView", ["fresh" => $fresh, "freshPage" => $freshPage, "view" => "freshView"]);

        include '' . BASE_URL . 'views/productView.php';
    }
    /* lay fruit va phan trang */
    public function fruit()
    {
        $page = isset($_POST['page']) ? (int) $_POST['page'] : 1;

        $productModel = $this->model("productModel");
        $fruit = $productModel->getFruit($page);

        $pageModel = $this->model("pageModel");
        $fruitPage = $pageModel->fruitPage();

        $this->view("productView", ["fruit" => $fruit, "fruitPage" => $fruitPage, "view" => "fruitView"]);

        include '' . BASE_URL . 'views/productView.php';
    }
}

?>