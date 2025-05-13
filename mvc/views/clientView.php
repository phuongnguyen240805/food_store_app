<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/workspace/minimart/public/css/client.css" type="text/css">
</head>
<style>
    .fkIi86 {
        margin-top: 157px;
        background: #fff;
        border-radius: .125rem;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .13);
        box-sizing: border-box;
        flex-grow: 1;
        margin-left: 1.6875rem;
        min-width: 0;
        position: relative;
        width: 1200px;
    }
</style>

<body>
    <?php
    include('./public/html/header.php');
    ?>
    <div class="fkIi86">
        <div class="CAysXD" role="main">
            <div style="display: contents;">
                <div class="utB99K">
                    <div class="SFztPl">
                        <h1 class="BVrKV_">Hồ sơ của tôi</h1>
                        <div class="QcW5xy">Quản lý thông tin hồ sơ để bảo mật tài khoản</div>
                    </div>
                    <div class="RCnc9v">

                        <?php
                        while ($row = mysqli_fetch_array($data['client'])) {
                            ?>

                            <form style="display: flex;"
                                action="<?php echo BASE_URL . 'client/updateInfo/' . $row['IDKH'] ?>" method="post">

                                <!-- thông tin khách hàng -->
                                <div class="HrBg9Q">

                                    <table class="bQkdAY">
                                        <!-- tên khách hàng -->
                                        <tr>
                                            <td class="f1ZOv_"><label>Tên khách hàng</label></td>
                                            <td class="o6L4e0">
                                                <div class="e_Vt__">
                                                    <div class="PBfYlq"><?php echo $row['TENKH'] ?></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- tên đăng nhập -->
                                        <tr>
                                            <td class="f1ZOv_"><label>Tên đăng nhập</label></td>
                                            <td class="o6L4e0">
                                                <div>
                                                    <div class="NGoa5Z"><input type="text" placeholder="" class="kKnR04"
                                                            value="<?php echo $row['TENTAIKHOAN'] ?>" name="tenTk"></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- email -->
                                        <tr>
                                            <td class="f1ZOv_"><label>Email</label></td>
                                            <td class="o6L4e0">
                                                <div class="e_Vt__">
                                                    <input type="text" placeholder="" class="kKnR04"
                                                        value="<?php echo $row['EMAIL'] ?>" name="email">
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="f1ZOv_"><label>Mật khẩu</label></td>
                                            <td class="o6L4e0">
                                                <div class="e_Vt__">
                                                    <input type="text" placeholder="" class="kKnR04"
                                                        value="<?php echo $row['MATKHAU'] ?>" name="matkhau">
                                                </div>
                                            </td>
                                        </tr>

                                        <!--  <tr>
                                            <td class="f1ZOv_"><label></label></td>
                                            <td class="o6L4e0"><button type="button"
                                                    class="btn btn-solid-primary btn--m btn--inline"
                                                    aria-disabled="false">Lưu</button></td>
                                        </tr> -->

                                    </table>

                                </div>

                                <!-- ảnh -->
                                <div class="nv7bOz">

                                    <div class="TJWfNh">
                                        <div class="nMPYiw" role="header">
                                            <div class="gQ6nuc"><img src="<?php echo $row['IMG'] ?>" alt=""></div>
                                        </div>
                                        <input class="XbWdh7" type="file" accept=".jpg,.jpeg,.png" name="image">
                                        <button type="button" class="btn btn-light btn--m btn--inline">Chọn ảnh</button>
                                        <div class="T_8sqN">
                                            <div class="JIExfq">Dụng lượng file tối đa 1 MB</div>
                                            <div class="JIExfq">Định dạng:.JPEG, .PNG</div>
                                        </div>
                                    </div>
                                </div>
                                <td class="o6L4e0"><button type="submit" class="btn btn-solid-primary btn--m btn--inline"
                                        aria-disabled="false">Lưu</button></td>

                            </form>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('./public/html/footer.php');
    ?>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['themsp'])) {
    // Kiểm tra xem file có được gửi lên không
    if (isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {
        $target_dir = "hinhanh/";
        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
        $uploadOk = 1;

        // Kiểm tra file có phải là hình ảnh
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File là hình ảnh - " . $check["mime"] . ".";
        } else {
            echo "Không phải hình ảnh.";
            $uploadOk = 0;
        }

        // Kiểm tra kích thước file
        if ($_FILES["fileToUpload"]["size"] > 1024 * 1024) {
            echo "Xin lỗi dung lượng quá lớn (Nhỏ hơn 1MB).";
            $uploadOk = 0;
        }

        // Kiểm tra định dạng file
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
            echo "Xin lỗi chỉ JPG, JPEG, PNG & GIF mới được cho phép.";
            $uploadOk = 0;
        }

        // Đổi tên file
        $newFileName = uniqid() . '.' . $imageFileType;
        $target_file = $target_dir . $newFileName;

        // Nếu tất cả điều kiện đều OK, tiến hành upload
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "file " . htmlspecialchars($newFileName) . " cập nhật thành công.";

                // Lưu thông tin vào cơ sở dữ liệu
                $tenspmoi = $_POST['tsp'];
                $sl = $_POST['sl'];
                $gc = $_POST['gia'];
                $loai = $_POST['loai'];
                $giacu = 1000;
                $conn = mysqli_connect('localhost', 'root', '', 'minimart');
                $sql = "INSERT INTO sanpham (TENSP, SOLUONG, GIASP, GIACU, IMG, IDDM) VALUES ('$tenspmoi', '$sl', '$gc', '$giacu', '$newFileName', '$loai')";
                if (mysqli_query($conn, $sql)) {
                    echo "Thêm sản phẩm thành công.";
                } else {
                    echo "Lỗi: " . mysqli_error($conn);
                }
                mysqli_close($conn);
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, your file was not uploaded.";
        }
    } else {
        echo "No file uploaded or file upload failed.";
    }
}
?>