<header class="bg-body-tertiary">

    <x-container>

        <nav class="navbar navbar-expand-md">
            <x-link to="home" class="navbar-brand">
                {{ __(config('app.name')) }}
            </x-link>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav mb-2 mb-md-0">
                    <li class="nav-item">
                        <x-link to="home" class="nav-link" area="true">
                            {{ __('Главная') }}
                        </x-link>
                    </li>

                    <li class="nav-item">
                        <x-link to="blog.index" class="nav-link" area="true" base="blog*">
                            {{ __('Блог') }}
                        </x-link>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <x-link to="login" class="nav-link" area="true">
                            {{ __('Вход') }}
                        </x-link>
                    </li>

                    <li class="nav-item">
                        <x-link to="register" class="nav-link pe-0" area="true">
                            {{ __('Регистрация') }}
                        </x-link>
                    </li>
                </ul>
            </div>
        </nav>

    </x-container>

</header>
