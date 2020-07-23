<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/asset/css/login.css">
</head>

<body>
    <form action="/home/addUser" method="post" class="login-form">
        <?= csrf_field(); ?>
        <h1>Register Account</h1>
        <input type="hidden" id="level" name="level" value="2">
        <div class="textForm">
            <input type="text" id="username" name="username" autofocus value="<?= old('username'); ?>">
            <div class="placeholder is-invalid">Username</div>
        </div>
        <?= $validation->getError('username'); ?>
        <div class="textForm">
            <input type="email" id="email" name="email" value="<?= old('email'); ?>">
            <div class="placeholder">Email</div>
        </div>
        <?= $validation->getError('email'); ?>
        <div class="textForm">
            <input type="text" id="telepon" name="telepon" value="<?= old('telepon'); ?>">
            <div class="placeholder">Phone</div>
        </div>

        <div class="textForm">
            <input type="password" id="password" name="password" value="<?= old('password'); ?>">
            <div class="placeholder">Password </div>
            <div class="show-password fas fa-eye-slash"></div>
        </div>

        <button class="btn fas fa-arrow-right" disabled></button>
        <a href="/">Back Home</a>

    </form>

    <script>
        let fields = document.querySelectorAll(".textForm input");
        let btn = document.querySelector(".btn");

        function check() {
            if (fields[0].value != "" && fields[1].value != "" && fields[2].value != "" && fields[3].value != "") {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }
        fields[0].addEventListener("keyup", check);
        fields[1].addEventListener("keyup", check);
        fields[2].addEventListener("keyup", check);
        fields[3].addEventListener("keyup", check);

        document.querySelector(".show-password").addEventListener("click",
            function() {
                if (this.classList[2] == "fa-eye-slash") {
                    this.classList.remove("fa-eye-slash");
                    this.classList.add("fa-eye");
                    fields[3].type = "text";
                } else {
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                    fields[3].type = "password";
                }
            })
    </script>

</body>

</html>