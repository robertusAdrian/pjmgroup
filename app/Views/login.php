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
    <form action="/home/cek_login" method="post" class="login-form">
        <h1>Sign In</h1>
        <div class="textForm">
            <input type="text" id="username" name="username" required>
            <div class="placeholder">Username</div>
        </div>

        <div class="textForm">
            <input type="password" id="password" name="password" required>
            <div class="placeholder">Password </div>
            <div class="show-password fas fa-eye-slash"></div>
        </div>

        <div class="checkbox">
            <input type="checkbox">
            <div class="fas fa-check"></div>
            Stay signed in
        </div>

        <button class="btn fas fa-arrow-right" disabled></button>
        <a href="/register">Create Account</a>
    </form>

    <script>
        let fields = document.querySelectorAll(".textForm input");
        let btn = document.querySelector(".btn");

        function check() {
            if (fields[0].value != "" && fields[1].value != "") {
                btn.disabled = false;
            } else {
                btn.disabled = true;
            }
        }
        fields[0].addEventListener("keyup", check);
        fields[1].addEventListener("keyup", check);

        document.querySelector(".show-password").addEventListener("click",
            function() {
                if (this.classList[2] == "fa-eye-slash") {
                    this.classList.remove("fa-eye-slash");
                    this.classList.add("fa-eye");
                    fields[1].type = "text";
                } else {
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                    fields[1].type = "password";
                }
            })
    </script>

</body>

</html>