<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Responsive Login and Signup Form </title>

    <!-- Favicon -->
    <link href="/workspace/minimart/public/img/logo/icons8-supermarket-64.png" rel="icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/workspace/minimart/public/css/accRegister.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>
<style>

</style>

<body>
    <?php
    if (isset($data["actionResult"])) {
        if ($data["actionResult"] == true) {
            if (isset($_POST['submit'])) {
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
                            <p>Đăng ký tài khoản thành công</p>
                        </div>
                        <div class="modal__footer">
                            <button><a href="<?php echo BASE_URL . "login/accLogin" ?>">Đến trang đăng ký</a></button>
                            <button><a href="<?php echo BASE_URL . "Home/" ?>">Trở về trang chủ</a></button>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
    ?>

    <section class="container forms register">
        <div class="form login">
            <div class="form-content">
                <header>Signup</header>
                <form action="accRegister" method="POST" class="form-login">
                    <div class="field input-field form-groud">
                        <input type="text" name="tenKh" placeholder="Họ và tên" class="input" id="fullname" required>
                        <span class="span-input"></span>
                    </div>

                    <div class="field input-field form-groud">
                        <input type="text" name="tenTk" placeholder="Tên tài khoản" class="input username" required>
                        <span class="span-input"></span>
                    </div>

                    <div class="field input-field form-groud">
                        <input type="email" name="email" placeholder="Email" class="input" id="email" required>
                        <span class="span-input"></span>
                    </div>

                    <div class="field input-field form-groud">
                        <input type="password" name="matkhau" placeholder="Password" class="input password" required>
                        <i class='bx bx-hide eye-icon'></i>
                        <span class="span-input"></span>
                    </div>

                    <div class="field input-field form-groud">
                        <input type="password" placeholder="Confirm password" class="input password"
                            id="password-confirmation" required>
                        <i class='bx bx-hide eye-icon'></i>
                        <span class="span-input"></span>
                    </div>

                    <div class="field button-field">
                        <button type="submit">Signup</button>
                        <!-- <input type="submit" value="Signup"> -->
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="<?php echo BASE_URL ?>login/accLogin"
                            class="link login-link">Login</a></span>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="/workspace/minimart/public/js/accRegister.js"></script>

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


        const modal = document.querySelector(".modal");

        modal.onclick = (e) => {
            if (e.target == e.currentTarget) {
                modal.classList.add("hide");
            }
        };
    </script>


</body>

</html>