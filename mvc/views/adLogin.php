<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/workspace/minimart/public/css/reset.css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/admin.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập Admin</title>
    <style>
        .error-message {
            color: red;
            position: fixed;
            /* Hiển thị đè lên nội dung */
            top: 320px;
            /* Cách mép trên 20px */
            left: 50%;
            /* Căn giữa ngang */
            transform: translateX(-50%);
            /* Đảm bảo căn giữa */
            color: red;
            margin-top: 55px;
            /* text-align: center; */
            font-size: 14px;
            background-color: #ffe6e6;
            padding: 10px 30px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 9999;
            /* Hiển thị trên cùng */
            transition: opacity 2s ease, transform 2s ease;
            /* Hiệu ứng mờ và di chuyển */
        }

        .hidden {
            opacity: 0;
            /* Giảm độ mờ về 0 */
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <form action="<?php echo BASE_URL ?>/admin/loginadmin" method="POST" id="form-login">
            <h1 class="form-heading">ĐĂNG NHẬP ADMIN</h1>

            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" placeholder="Tên đăng nhập" name="username" required>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="Mật khẩu" name="password" required>
            </div>
            <?php if (isset($data['error_message'])): ?>
                <div class="error-message" id="error-message">
                    <?php echo htmlspecialchars($data['error_message']); ?>
                </div>
            <?php endif; ?>
            <input type="submit" value="Đăng nhập" class="form-submit">
        </form>
    </div>

    <script>
        // Ẩn thông báo dần sau 8 giây
        setTimeout(() => {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.classList.add('hidden'); // Thêm class để kích hoạt hiệu ứng
                setTimeout(() => errorMessage.style.display = 'none', 3000); // Sau khi mờ hẳn, ẩn đi
            }
        }, 2000);
    </script>
</body>

</html>