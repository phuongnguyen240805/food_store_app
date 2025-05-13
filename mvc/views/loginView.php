<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>
    <base href="<?php echo BASE_URL ?>">

    <!-- Favicon -->
    <link href="/workspace/minimart/public/img/logo/icons8-supermarket-64.png" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/accRegister.css">
    <link rel="stylesheet" href="/workspace/minimart/public/css/notify.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>
    .container {
        max-height: 100vh;
        width: 100%;
        overflow: hidden;
        background-image: url(http://localhost/workspace/minimart/public/img/carousel-1.jpg);
    }
</style>

<body>
    <?php
    if (isset($data["resultCheck"])) {
        if ($data["resultCheck"] == false) {
            if (!empty($_POST['tenTk']) && !empty($_POST['matkhau'])) {
                ?>

                <!-- notify -->
                <div class="modal">
                    <div class="modal__inner">
                        <div class="modal__header">
                            <p>Thông báo</p>
                            <!-- <i class="fas fa-times"></i> -->
                        </div>
                        <div class="modal__body">
                            <h2>Thông báo</h2>
                            <p>Đăng nhập tài khoản không thành công, tài khoản hoặc mật khẩu không đúng</p>
                        </div>
                        <div class="modal__footer">
                            <button>Close</button>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
    ?>

    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="<?php echo BASE_URL ?>login/accLogin" class="form-login" method="POST">
                    <div class="field input-field form-groud">
                        <input type="text" placeholder="Tên tài khoản" class="input username" name="tenTk" required>
                        <span class="span-input"></span>
                    </div>

                    <div class="field input-field form-groud">
                        <input type="password" placeholder="Password" class="input password" name="matkhau" required>
                        <i class='bx bx-hide eye-icon'></i>
                        <span class="span-input"></span>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="submit" class="submitLogin">Login</button>
                        <!--  <input type="submit" name="submit" class="submitLogin" value="Login"> -->
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="<?php echo BASE_URL . 'register/accRegister' ?>"
                            class="link signup-link">Signup</a></span>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="/workspace/minimart/public/js/accRegister.js"></script>
    <!--  <script src="/workspace/minimart/public/js/notifys.js"></script> -->
    <script>

        Validator({
            formLogin: ".form-login",
            formGroup: ".form-groud",
            errorSelector: ".span-input",
            loginSubmit: ".submitLogin",
            rules: [
                // fullname
                Validator.isRequire("#fullname"),

                // usernmae
                Validator.isRequire(".username"),
                Validator.isUser(".username"),

                // email
                Validator.isRequire("#email"),
                Validator.isEmail("#email"),

                // password
                Validator.isRequire(".password"),
                Validator.minLengt(".password", 6),

                // password confirmation
                Validator.isRequire("#password-confirmation"),
                Validator.isConfirmed("#password-confirmation", () => {
                    return document.querySelector(".password").value.trim();
                }),

            ]
        })


        /* thông báo đăng nhập thất bại */
        document.addEventListener('DOMContentLoaded', function() {
            const btnClose2 = document.querySelector(".modal__footer");
            const modal = document.querySelector(".modal");
    
            btnClose2.addEventListener('click', function () {
                modal.classList.add("hide");
            })
    
            modal.addEventListener('click', function (e) {
                if (e.target == e.currentTarget) {
                    modal.classList.add("hide");
                }
            })
        })
    </script>

</body>

</html>