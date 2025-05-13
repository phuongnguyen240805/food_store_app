<?php

// http://localhost/workspace/minimart/Home/intro/

class admin extends Controller
{
   public function homeadmin()
   {
      $ht = $this->model("allModel");
      $totaluser = $ht->hienthi();
      $htdm = $ht->hienthidm();
      $htsp = $ht->hienthisp();
      $this->view('adminHeader', ["hienthi" => $totaluser, "hienthidm" => $htdm, "hienthisp" => $htsp, "view" => "homeadmin"]);
   }

   public function users()
   {
      $ht = $this->model("usersModel");
      $usersview = $ht->usersview();
      $this->view('adminHeader', ["tableusersView" => $usersview, "view" => "users"]);
   }

   //XÓA KHÁCH HÀNG
   public function deleteUser($id)
   {
      $model = $this->model("usersModel");
      if ($model->deleteUser($id)) {
         header("Location: " . BASE_URL . "/admin/users"); // Điều hướng sau khi xóa thành công
         exit();

      } else {
         echo "Lỗi xóa Khách hàng.";
      }
   }

   public function categories()
   {
      $ht = $this->model("categoriesModel");
      $categories = $ht->Categories();
      $this->view('adminHeader', ["categoriesdata" => $categories, "view" => "categories"]);
   }
   // Thêm danh mục mới
   public function add_Category()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $tendm = $_POST['c_name'];
         $category = $this->model('categoriesModel');
         //   $category -> add_category($tendm);
         // $this->view("categories");
         // header("Location: /admin/categories");
         if ($category->add_category($tendm)) {
            header("Location: " . BASE_URL . "/admin/categories"); // Điều hướng sau khi thêm thành công
            exit();
         } else {
            echo "Lỗi khi thêm danh mục mới.";
         }
      }
   }


   //Xóa danh mục
   public function deleteCategory($id)
   {
      $model = $this->model("categoriesModel");
      if ($model->deleteCategory($id)) {
         header("Location: " . BASE_URL . "/admin/categories"); // Điều hướng sau khi xóa thành công
         exit();

      } else {
         echo "Lỗi xóa danh mục.";
      }
   }
   //Xóa sản phẩm
   public function deleteProduct($idsp, $iddm = null)
   {
      $model = $this->model("productsModel");
      if ($model->deleteProduct($idsp)) {
         if ($iddm) {
            header("Location: " . BASE_URL . "/admin/products");
         } else {
            header("Location: " . BASE_URL . "/admin/products");
         }
         exit();
      } else {
      }
   }

   //Hien thi san pham
   public function products($iddm = null)
   {
      $ht = $this->model("productsModel");
      $nameCategory = $ht->getNameCategory();
      $name2Category = $ht->getNameCategory();
      $listproducts = $ht->getproducts($iddm);
      $this->view('adminHeader', ["listproducts" => $listproducts, "name2Category" => $name2Category, "nameCategory" => $nameCategory, "view" => "products"]);
   }




   //SỬA DANH MỤC
   public function edit_Category()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $id = $_POST['id'];
         $tendm = $_POST['c_name'];
         $category = $this->model('categoriesModel');
         if ($category->editCategory($id, $tendm)) {
            header("Location: " . BASE_URL . "/admin/categories"); // Điều hướng sau khi sửa thành công
            exit();
         } else {
            echo "Lỗi khi sửa danh mục.";
         }
      }
   }
   //SỬA SẢN PHẨM 
   public function editProduct($idsp)
   {
      $ht = $this->model("productsModel");
      $product = $ht->getProductById($idsp);  // Lấy thông tin sản phẩm dựa vào ID
      $categories = $ht->getNameCategory();   // Lấy danh sách các danh mục

      // Hiển thị form sửa sản phẩm
      $this->view('adminHeader', ["product" => $product, "categories" => $categories, "view" => "editProduct"]);
   }


   //THÊM SẢN PHẨM MỚI
   public function add_Product()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $tensp = $_POST['p_name'];
         $soluong = $_POST['p_number'];
         $giamoi = $_POST['p_pricenew'];
         $giagoc = $_POST['p_priceold'];
         $category = $_POST['category'];

         // Xử lý upload file
         if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            // Đường dẫn thư mục uploads
            $targetDir = "public/uploads/";

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($targetDir)) {
               mkdir($targetDir, 0777, true);
            }

            // Lấy tên file và mã hóa
            $fileName = basename($_FILES['file']['name']);
            $fileName = time() . '_' . urlencode($fileName); // Thêm timestamp để tránh trùng tên

            // Đường dẫn đầy đủ
            $targetFilePath = $targetDir . $fileName;

            // Kiểm tra định dạng file
            $imageFileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');

            if (in_array($imageFileType, $allowTypes)) {
               // Upload file
               if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
                  $hinhanh = $fileName;
               } else {
                  echo "<script>alert('Xin lỗi, đã xảy ra lỗi khi tải file lên.')</script>";
                  return;
               }
            } else {
               echo "<script>alert('Chỉ cho phép tải lên các file JPG, JPEG, PNG & GIF.')</script>";
               return;
            }
         } else {
            echo "<script>alert('Vui lòng chọn file để tải lên.')</script>";
            return;
         }

         $addProduct = $this->model('productsModel');
         if ($addProduct->addProduct($tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category)) {
            echo "<script>alert('Thêm sản phẩm thành công!')
            window.location.href='" . BASE_URL . "/admin/products';</script>";
            /* header("Location: " . BASE_URL . "/admin/products"); */
            exit();
         } else {
            echo "<script>alert('Lỗi thêm sản phẩm mới')</script>";
         }
      }
   }


   /* sửa sảm phẩm */
   public function updateProduct()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $idsp = $_POST['idsp'];
         $tensp = $_POST['p_name'];
         $soluong = $_POST['p_number'];
         $giamoi = $_POST['p_pricenew'];
         $giagoc = $_POST['p_priceold'];
         $category = $_POST['category'];

         // Lấy tên ảnh cũ từ form
         $hinhanh = basename($_POST['current_image']);

         // Kiểm tra nếu có file ảnh mới được upload
         if (!empty($_FILES['file']['name'])) {
            // Thư mục lưu ảnh upload
            $upload_path = 'public/uploads/';

            // Tạo thư mục nếu chưa tồn tại
            if (!file_exists($upload_path)) {
               mkdir($upload_path, 0777, true);
            }

            // Tạo tên file unique để tránh trùng lặp
            $filename = time() . '_' . basename($_FILES['file']['name']);
            // Loại bỏ ký tự đặc biệt trong tên file
            $filename = preg_replace('/[^a-zA-Z0-9\-\_\.]/', '', $filename);

            // Đường dẫn đầy đủ của file
            $target_file = $upload_path . $filename;

            // Kiểm tra định dạng file
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowedTypes = array('jpg', 'jpeg', 'png', 'gif');

            if (in_array($imageFileType, $allowedTypes)) {
               // Upload file mới
               if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                  // Xóa file ảnh cũ nếu tồn tại
                  $old_file = $upload_path . $hinhanh;
                  if (file_exists($old_file) && !empty($hinhanh)) {
                     unlink($old_file);
                  }
                  // Cập nhật tên ảnh mới
                  $hinhanh = $filename;
               } else {
                  echo "<script>
                       alert('Có lỗi xảy ra khi upload file!');
                       window.location.href='" . BASE_URL . "/admin/products';
                   </script>";
                  return;
               }
            } else {
               echo "<script>
                   alert('Chỉ chấp nhận file ảnh có định dạng: jpg, jpeg, png, gif');
                   window.location.href='" . BASE_URL . "/admin/products';
               </script>";
               return;
            }
         }

         // Cập nhật sản phẩm vào database
         $updateProduct = $this->model('productsModel');
         if ($updateProduct->updateProduct($idsp, $tensp, $soluong, $giamoi, $giagoc, $hinhanh, $category)) {
            echo "<script>
               alert('Đã cập nhập sản phẩm thành công!');
               window.location.href='" . BASE_URL . "/admin/products';
               </script>";
            /* header("Location: " . BASE_URL . "/admin/products"); */
         } else {
            echo "<script>
               alert('Có lỗi xảy ra khi cập nhật sản phẩm!');
               window.location.href='" . BASE_URL . "/admin/products';
           </script>";
         }
      }
   }

   //THỐNG KÊ
   public function statistical()
   {
      //gọi model
      $statisticalM = $this->model('statisticalModel');
      $statisticalD = $statisticalM->statistical();
      //truyền dữ liệu sang view
      $this->view('adminHeader', ["statisticalD" => $statisticalD, "view" => "statistical"]);
   }

   //FIX TÌM KIẾM
   public function searchProduct()
   {
      $searchKeyword = isset($_POST['search_keyword']) ? $_POST['search_keyword'] : '';

      // Lấy danh sách sản phẩm được lọc theo từ khóa tìm kiếm
      $ht = $this->model("productsModel");
      $listproducts = $ht->searchProducts($searchKeyword);

      // Lấy danh mục cho các modal - Sửa tên model từ categoryModel thành categoriesModel
      $categoryModel = $this->model("categoriesModel");
      $nameCategory = $categoryModel->Categories();  // Sửa tên function theo model
      $name2Category = $categoryModel->Categories(); // Truy vấn thứ hai cho modal chỉnh sửa

      // Truyền tất cả dữ liệu cần thiết đến view
      $this->view('adminHeader', [
         "listproducts" => $listproducts,
         "nameCategory" => $nameCategory,
         "name2Category" => $name2Category,
         "view" => "products"
      ]);
   }


   //HIỂN THỊ LOGIN ADMIN


   public function loginadmin()
   {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         $username = trim($_POST['username']);
         $password = trim($_POST['password']);

         // Kiểm tra đăng nhập
         $adminModel = $this->model("AdminModel");

         if ($adminModel->checkAdmin($username, $password)) {
            session_start();
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_username'] = $username;

            header('Location: ' . BASE_URL . 'admin/homeadmin');
            exit();
         }

         // Đăng nhập thất bại
         $this->view('adLogin', ["error_message" => "Tên đăng nhập hoặc mật khẩu không đúng. Vui lòng nhập lại!"]);
      } else {
         // Hiển thị form login
         $this->view('adLogin');
      }
   }


   /* trạng thái đơn hàng */
   public function updatestatus()
   {
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $id = $_POST['id'];
         $trangthai = $_POST['trangthai'];

         $ht = $this->model("adordersModel");
         $ht->updateOrderStatus($id, $trangthai);

         // Redirect back to the orders page
         header("Location: " . BASE_URL . "admin/adorders");
         exit();
      }
   }


   /* chi tiết đơn hàng */
   public function ordersdetail($id)
   {
      $ht = $this->model("ordersdetailModel");
      $orderInfo = $ht->getOrderInfo($id);
      $dataordersdetail = $ht->ordersdetail($id);

      $this->view('adminHeader', [
         "dataordersdetail" => $dataordersdetail,
         "orderInfo" => $orderInfo,
         "view" => "ordersdetail"
      ]);
   }

   /* đơn hàng */
   public function adorders()
   {
      $ht = $this->model("adordersModel");
      $dataorders = $ht->adorders();
      $this->view('adminHeader', ["dataorders" => $dataorders, "view" => "orders"]);
   }

   public function comments()
   {
      $ht = $this->model("commentsModel");
      $commentsview = $ht->comments();
      $this->view('adminHeader', ["commentsview" => $commentsview, "view" => "comments"]);
   }

   //XÓA BÌNH LUẬN
   public function deleteComments($id)
   {
      $model = $this->model("commentsModel");
      if ($model->deleteComment($id)) {
         header("Location: " . BASE_URL . "admin/comments"); // Điều hướng sau khi xóa thành công
         exit();
      } else {
         echo "Lỗi xóa Khách hàng.";
      }
   }

}

?>