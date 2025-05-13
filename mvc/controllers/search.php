<?php
class Search extends Controller {

     /* tim kiem san pham va phan trang */
     public function searchProduct()
     {
         if (isset($_SERVER['REQUEST_METHOD']) == "POST") {
 
             $search = isset($_POST['search']) ? $_POST['search'] : "";
 
             $page = isset($_POST['page']) ? $_POST['page'] : 1;
 
             /* san pham tim kiem */
             $searchProduct = $this->model("searchModel");
             $getSearch = $searchProduct->getSearch($search, $page);
 
             /* phan trang trang tim kiem */
             $searchPage = $this->model("pageModel");
             $numPage = $searchPage->searchPage($search);
 
             $this->view("searchView", ["resultSearch" => $getSearch, "numPage" => $numPage]);
         }
     }

}
?>