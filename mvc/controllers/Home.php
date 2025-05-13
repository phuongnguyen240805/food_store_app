<?php

// http://localhost/workspace/minimart/Home/intro/

class Home extends Controller
{
    // intro product(gioi han 8)
    public function intro()
    {
        $products = $this->model("productModel");
        $vegetable = $products->vegetable();
        $fresh = $products->fresh();
        $fruit = $products->fruit();
        $this->view("homeView", ["vegetable" => $vegetable, "fresh" => $fresh, "fruit" => $fruit]);
    }

}

?>