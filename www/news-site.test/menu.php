<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-start justify-content-start justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-start mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
            </ul>

            <?php if ($_COOKIE["user"] == 'Да'): ?>
                <div class="text-end">
                    <button onclick="document.location='publication/news.php'" type="button" class="btn btn-outline-light me-2">
                        Предложить новость
                    </button>
                    <button onclick="document.location='../registration-form/validation-form/exit.php'" type="button"
                            class="btn btn-warning">Выход
                    </button>
                </div>
            <?php else: ?>
                <div class="text-end">
                    <button onclick="document.location='registration-form/login.php'" type="button"
                            class="btn btn-outline-light me-2">Войти
                    </button>
                    <button onclick="document.location='registration-form/register.php'" type="button"
                            class="btn btn-warning">Регистрация
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>