<?php
class Cart extends Controller
{
    public function productCart()
    {
        $this->view("cartView");
    }

    /* them san pham vao gio hang */
    public function addCart()
    {

        if (isset($_SESSION['cart'])) {
            // sp da ton tai
            $avaliable = 0;
            foreach ($_SESSION['cart'] as $index => $idsp) {
                if ($_SESSION['cart'][$index]['IDSP'] == $_POST['product__id']) {
                    $avaliable++;
                    $_SESSION['cart'][$index]['SOLUONG'] += $_POST['product__quantity'];
                }
            }
            // sp da ton tai
            if ($avaliable == 0) {
                $item = array(
                    'IDSP' => $_POST['product__id'],
                    'TENSP' => $_POST['product__title'],
                    'GIASP' => $_POST['product__price'],
                    'IMG' => $_POST['product__img'],
                    'SOLUONG' => $_POST['product__quantity'],
                    'IDDM' => $_POST['product__idCategory']
                );
                $_SESSION['cart'][] = $item;
            }
        } else {
            $item = array(
                'IDSP' => $_POST['product__id'],
                'TENSP' => $_POST['product__title'],
                'GIASP' => $_POST['product__price'],
                'IMG' => $_POST['product__img'],
                'SOLUONG' => $_POST['product__quantity'],
                'IDDM' => $_POST['product__idCategory']
            );
            $_SESSION['cart'][] = $item;
        }

        $idKh = $_SESSION['IDKH'];
        $idSp = $_POST['product__id'];
        $soluong = $_POST['product__quantity'];
        $giaSp = $_POST['product__price'];

        $cartModel = $this->model('cartModel');
        $cartModel->addProductCart($idKh, $idSp, $soluong, $giaSp);

        $this->view("cartView");
    }

    /* xoa sp */
    public function deleteCart()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])) {
            $productId = $_POST['product_id'];

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $key => $item) {
                    if ($item['IDSP'] == $productId) {
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                        echo json_encode(['success' => true]);
                        exit;
                    }
                }
            }
        }
    }

    public function updateCart()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart'])) {
            $updatedCart = $_POST['cart'];

            error_log("Updated cart: " . print_r($updatedCart, true));

            $totalPay = 0;
            $updatedPrices = [];

            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as &$item) {
                    $productId = $item['IDSP'];
                    if (isset($updatedCart[$productId])) {
                        $newQuantity = max((int) $updatedCart[$productId], 1);
                        $item['SOLUONG'] = $newQuantity;

                        $itemTotal = $item['SOLUONG'] * $item['GIASP'];
                        $updatedPrices[$productId] = number_format($itemTotal, 0) . " vnđ";
                        $totalPay += $itemTotal;
                    }
                }

                header('Content-Type: application/json');
                echo json_encode([
                    'success' => true,
                    'updatedPrices' => $updatedPrices,
                    'totalPay' => number_format($totalPay, 0) . " vnđ"
                ]);
                return;
            }
        }
    }


    // product stock
    public function productOrder()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['products'])) {
            $name = $_POST['name'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $name = $_POST['name'];
            $products = $_POST['products'];

            $deletedProducts = [];
            $totalPrice = 0;
            foreach ($products as $productId => $productDetail) {

                unset($_SESSION['cart'][$productId]);
                /* $deletedProducts[] = $productId;  */
                array_push($deletedProducts, $productId);
                $quantity = $productDetail['quantity'];
                $price = $productDetail['price'];
                $totalPrice += $price;
                $this->model('cartModel')->updateProductStock($productId, $quantity);
            }
            $this->model('cartModel')->orders($name, $phone, $address, $totalPrice);
            $this->view('cartView');

            echo json_encode([
                'success' => true,
                'deletedProducts' => $deletedProducts
            ]);
            return;
        }
    }
}

?>