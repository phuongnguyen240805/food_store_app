<?php
class Client extends Controller
{

    /* hiển thị thông tin khách hàng */
    public function infoClient($idKh)
    {
        $clientModel = $this->model('clientModel');
        $client = $clientModel->getInfo($idKh);

        $this->view('clientView', ['client' => $client]);
    }

    /* hiển thị sửa thông tin */
     public function updateInfo($idkh)
     {
         if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
             if (!empty($_POST['tenTk']) && !empty($_POST['matkhau'])) {
                 $tenTk = $_POST['tenTk'];
                 $matkhau = $_POST['matkhau'];
                 $email = $_POST['email'];
             } else {
                 echo "ko lay duoc du lieu";
             }
         } else {
             echo "ko gui dc post";
         }

         $clientModel = $this->model("clientModel");
         $clientModel->updateInfo($idkh, $tenTk, $matkhau, $email);

         $this->view('clientView');
     }

}
?>