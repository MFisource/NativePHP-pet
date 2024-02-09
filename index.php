<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                                <!--register form-->
                <form action="register.php" method="post">
                    <h2 class="mb-4">Регистрация</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Логин" name="login">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Повторите пароль" name="passrepeat">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">

                                <!-- login form-->
                <form action="login.php" method="post">
                    <h2 class="mb-4">Вход</h2>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Логин" name="login">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" placeholder="Пароль" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
