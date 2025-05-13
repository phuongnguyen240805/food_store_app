const forms = document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

        pwFields.forEach(password => {
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })

    })
})

/* links.forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault(); //preventing form submit
        forms.classList.toggle("show-signup");
    })
}) */


// validator form 
// Đối tượng `Validator`
function Validator(options) {
    var selectorRules = {};

    function getParent(input, selector) {
        while (input.parentElement) {
            /* vòng lặp chỉ chạy khi tìm thấy thẻ cha của input element */
            if (input.parentElement.matches(selector)) {
                /* nếu tìm đc thẻ cha thì return và kết thúc vòng lặp */
                return input.parentElement;
            }
            input = input.parentElement;
            /* còn ko tìm đc thì cho input element bằng thẻ cha */
        }
    }

    // hàm thực hiện thông báo lỗi (validate)
    function validate(inputElement, rule) {
        var errorElement = getParent(inputElement, options.formGroup).querySelector(
            options.errorSelector
        );
        /*  var errorMessage; */

        // Lấy ra các rules của selector
        var rules = selectorRules[rule.selector];

        // Lặp qua từng rule & kiểm tra
        for (var i = 0; i < rules.length; i++) {
            var errorMessage = rules[i](inputElement.value);

            if (errorMessage) break;
        }

        if (errorMessage) {
            errorElement.innerText = errorMessage;
            getParent(inputElement, options.formGroup).classList.remove("success");
            getParent(inputElement, options.formGroup).classList.add("invalid");
        } else {
            errorElement.innerText = "";
            getParent(inputElement, options.formGroup).classList.remove("invalid");
            getParent(inputElement, options.formGroup).classList.add("success");
        }
    }

    // Lấy element của form cần thông báo lỗi (validate)
    var formElement = document.querySelector(options.formLogin);

    if (formElement) {
        // khi submit form thì bỏ đi hành vi mặc định của button submit
        formElement.onsubmit = function () {
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);

                validate(inputElement, rule); // validata tat ca inputElement
            });
        };

        // Lặp qua các rules va xu li
        options.rules.forEach(function (rule) {
            // Lưu lại các rules trong mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElement = formElement.querySelector(rule.selector);

            if (inputElement) {
                // Xử lí trường hợp blur khỏi input
                inputElement.onblur = function () {
                    // value: inputElement.value
                    // test function: rules.test
                    validate(inputElement, rule);
                };

                // Xử lí mỗi khi người nhập vào input
                inputElement.oninput = function () {
                    var errorElement = getParent(
                        inputElement,
                        options.formGroup
                    ).querySelector(options.errorSelector);
                    errorElement.innerText = "";
                    getParent(inputElement, options.formGroup).classList.remove(
                        "invalid"
                    );
                };
            }
        });
    }

}


// Định nghĩa các rules
Validator.isRequire = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.trim() ? undefined : message || "Vui lòng nhập trường này";
        },
    };
};

// rules user:
Validator.isUser = function (selector) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^[0-9A-Za-z]{6,16}$/; // username to 6 char from 16 char
            return regex.test(value) ? undefined : "Tên tài khoản không hợp lệ";
        }
    };
};

// rules Email:
Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value)
                ? undefined
                : message || "Trường này phải là email";
        },
    };
};

// rules password:
Validator.minLengt = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.length >= min
                ? undefined
                : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        },
    };
};

// rules password confirmation:
Validator.isConfirmed = function (selector, getConfirmation, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.trim() == getConfirmation()
                ? undefined
                : message || "Mật khẩu xác nhập không chính xác";
        },
    };
};
