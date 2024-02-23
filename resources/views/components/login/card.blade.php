<x-card class="mt-5">
    <x-slot:title>
        <x-on-line>
            <h4 class="card-title">
                {{ __('Login') }}
            </h4>

            <x-link to="register" class="mb-1 card-link link-primary">
                {{ __('Registration') }}
            </x-link>
        </x-on-line>
    </x-slot>

    <x-forms.form action="{{ route('login.store') }}" method="POST">
        <x-forms.form-item class="mb-3">
            <x-forms.inputs.email label="{{ __('Email') }}" required autofocus />
        </x-forms.form-item>

        <x-forms.form-item class="mb-3">
            <x-forms.inputs.password label="{{ __('Password') }}" required />
        </x-forms.form-item>

        <x-forms.form-item class="mb-3 form-check">
            <x-forms.inputs.checkbox label="{{ __('Remember me') }}" name="remember" checked />
        </x-forms.form-item>

        <x-button>
            {{ __('Войти') }}
        </x-button>
    </x-forms.form>
</x-card>
