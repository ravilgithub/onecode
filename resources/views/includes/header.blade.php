<header class="py-3 border-bottom">
    <div class="container d-flex justify-content-between">
        <ul class="d-flex list-unstyled mb-0">
            <li>
                <a href="{{ route('home') }}">
                    Главная
                </a>
            </li>

            <li class="ms-3">
                <a href="{{ route('blog.index') }}">
                    Блог
                </a>
            </li>
        </ul>

        <ul class="d-flex list-unstyled mb-0">
            <li>
                <a href="{{ route('login') }}">
                    Вход
                </a>
            </li>

            <li class="ms-3">
                <a href="{{ route('register') }}">
                    Регистрация
                </a>
            </li>
        </ul>
    </div>
</header>
