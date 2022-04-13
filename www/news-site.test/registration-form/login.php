<?php require_once "../header.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1">
    <title> Авторизация </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous">
    </script>
    <script>

        (function () {
            "use strict";
            window.addEventListener("load", function () {
                var forms = document.getElementsByClassName("needs-validation");
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener(
                        "submit",
                        function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        }, false);
                });
            }, false);
        })();

    </script>

</head>
<body class="modal modal-signin position-static d-block bg-dark py-5 text-center" tabindex="-1" role="dialog"
      id="modalSignin">
    <form class="form-signin needs-validation" novalidate method="post" action="validation-form/auth.php">

        <!-- Front Side -->
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-5 shadow">

                <!-- Header -->
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h2 class="fw-bold mb-0">Авторизация</h2>
                    <button onclick="document.location='/'" type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>

                <?php if (!isset($_COOKIE["user"]) && isset($_SESSION['errMsg'])): ?>
                    <div class="alert alert-danger" role="alert"> <?php echo $_SESSION['errMsg']; ?> </div>
                <?php endif; ?>

                <!-- Authorization Form -->
                <div class="form-group">
                    <div class="modal-body p-5 pt-0">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control rounded-4" id="username" name="username"
                                   placeholder="Введите имя пользователя"
                                   minlength="4" maxlength="20" 
                                   pattern="^[a-zA-Z0-9]+$" required>
                            <label for="username">Имя пользователя</label>
                            <div class="invalid-feedback">
                                Неверное имя пользователя.
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-4" id="password" name="password"
                                       placeholder="Пароль" required>
                                <label for="password">Пароль</label>
                                <div class="invalid-feedback">
                                    Введите пароль.
                                </div>
                            </div>

                            <!-- Triggering button -->
                            <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">Войти</button>
                            <small>
                                <p class="regtext">Еще не зарегистрированы? <a href="register.php">Регистрация</a></p>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
