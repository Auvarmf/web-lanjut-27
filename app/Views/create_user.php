    <?= $this->extend('layouts/app') ?>

    <?= $this->section('content') ?>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", "sans-serif";
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(11, 14, 17);
        }

        .container {
            position: relative;
            max-width: 430px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .container .forms {
            width: 200%;
            display: flex;
            height: 440px;
            align-items: center;
            transition: height 0.4s ease;
        }

        .container .form {
            width: 50%;
            padding: 30px;
            border-radius: 12px;
            background: #fff;
            transition: margin-left 0.36s ease;
        }

        .container.active .login {
            margin-left: -50%;
            opacity: 0;
            transition: margin-left 0.36s ease, opacity 0.3s ease;
        }

        .container .signup {
            opacity: 0;
            transition: opacity 0.18s ease;
        }

        .container.active .signup {
            opacity: 1;
            transition: opacity 0.4s ease;
        }

        .container.active .forms {
            height: 600px;
        }

        .container .form .title {
            position: relative;
            font-size: 27px;
            font-weight: 600;
        }

        .form .title::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background-color: #FF9900;
            border-radius: 25px;
        }

        .form .input-field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 30px;
        }

        .input-field input {
            position: absolute;
            height: 100%;
            width: 100%;
            padding: 0 35px;
            border: none;
            outline: none;
            font-size: 16px;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid transparent;
            transition: border-bottom-color 0.4s ease;
        }

        .input-field input:is(:focus, :valid) {
            border-bottom-color: #4070f4;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 23px;
            transition: color 0.4s ease;
        }

        .input-field input:is(:focus, :valid)~i {
            color: #4070f4;
        }

        .input-field i.icon {
            left: 0;
        }

        .input-field i.showHidePw {
            right: 0;
            cursor: pointer;
            padding: 10px;
        }

        .form .checkbox-text {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .checkbox-text .checkbox-content {
            display: flex;
            align-items: center;
        }

        .checkbox-content input {
            margin: 0 8px -2px 4px;
            accent-color: #4070f4;
        }

        .form .text {
            color: #333;
            font-size: 14px;
        }

        .form a.text {
            color: #4070f4;
            text-decoration: none;
        }

        .form a {
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form .button {
            margin-top: 35px;
        }

        .form .button input {
            border: none;
            color: #eee;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: #0e171d;
            cursor: pointer;
            transition: all 0.6s ease;
        }

        .button input:hover {
            background-color: #FF9900;
            color: #0e171d;
        }

        .form .login-signup {
            margin-top: 30px;
            text-align: center;
        }

        .loginpg {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-image: url(<?= base_url('/img/bgcontactblur.jpg'); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>

    <!-- Form Create User Start -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="<?= base_url('/user/store'); ?>" method="POST">
                    <div class="col-md-15 mt-3 position-relative">
                        <input type="text" placeholder="Enter your name" name="nama" id="validationTooltip01" class="form-control <?= (empty(validation_show_error('nama'))) ? '' : 'is-invalid' ?>" value='<?= old('nama'); ?>'>
                        <div class='invalid-feedback'><?= validation_show_error('nama'); ?></div>
                    </div>

                    <div class="col-md-15 mt-3 position-relative">
                        <input type="text" placeholder="Enter your npm" name="npm" id="validationTooltip01" class="form-control <?= (empty(validation_show_error('npm'))) ? '' : 'is-invalid' ?>" value='<?= old('npm'); ?>'>
                        <div class='invalid-feedback'><?= validation_show_error('npm'); ?></div>
                    </div>

                    <div class="col-md-15 mt-3 position-relative">
                        <select class="form-select" type="text" name="kelas" id="validationTooltip04" class="form-select <?= (empty(validation_show_error('kelas'))) ? '' : 'is-invalid' ?>">
                            <option selected hidden value="<?= old('kelas'); ?>">Pilih Kelas</option>
                            <?php
                            foreach ($kelas as $item) {
                            ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['nama_kelas'] ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class='invalid-feedback'><?= validation_show_error('kelas'); ?></div><br>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Submit" name="login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Don't have an account?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <div class="form signup">
                <span class="title">Registration</span>

                <form action="Program_exe/register_exe.php" method="POST">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your username" name="resuser" required>
                        <i class="uil uil-user"></i>
                    </div>

                    <div class="input-field">
                        <input type="password" placeholder="Create a password" name="respass" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirm a password" name="respass" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="signCheck">
                            <label for="signCheck" class="text">I accept all terms & conditions</label>
                        </div>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Register">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already have an account?
                        <a href="#" class="text login-link">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        const container = document.querySelector(".container"),
            pwShowHide = document.querySelectorAll(".showHidePw"),
            pwFields = document.querySelectorAll(".password"),
            signup = document.querySelector(".signup-link"),
            login = document.querySelector(".login-link");

        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                pwFields.forEach(pwField => {
                    if (pwField.type === "password") {
                        pwField.type = "text";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye-slash", "uil-eye");
                        })
                    } else {
                        pwField.type = "password";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye", "uil-eye-slash");
                        })
                    }
                })
            })
        })

        signup.addEventListener("click", () => {
            container.classList.add("active");
        })

        login.addEventListener("click", () => {
            container.classList.remove("active");
        })
    </script>
    <!-- Form Create User End -->
    <?= $this->endSection('content') ?>