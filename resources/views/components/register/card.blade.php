<x-card class="mt-5">
    <x-slot:title>
        <h4 class="card-title">
            {{ __('Registration') }}
        </h4>

        <x-link to="login" class="mb-1 card-link link-primary">
            {{ __('Login') }}
        </x-link>
    </x-slot>

    <x-forms.form action="{{ route('register.store') }}" method="POST">
        <x-forms.form-item>
            <x-forms.inputs.email label="{{ __('Email') }}" autofocus required />
        </x-forms.form-item>

        <x-forms.form-item>
            <x-forms.inputs.password label="{{ __('Password') }}" required />
        </x-forms.form-item>

        <x-forms.form-item>
            <x-forms.inputs.password label="{{ __('Repeat password') }}" name="password_confirmation" required />
        </x-forms.form-item>

        <x-forms.form-item class="form-check">
            <x-forms.inputs.checkbox label="{{ __('С условиями ознокомлен') }}" name="rules" />
        </x-forms.form-item>

        <x-button>
            {{ __('Submit') }}
        </x-button>
    </x-forms.form>
</x-card>
