@props([
    'put' => false,
    'categories' => [],
])

@if ($errors->any())
    <div class="alert alert-danger" role="danger">
        <ul>
            @foreach ($errors->all() as $err_msg)
                <li>{{ $err_msg }}</li>
            @endforeach
        </ul>
    </div>
@endif


{{--
    Для проверки файла(картинки):
        1. Добавить атрибут формы:
            enctype="multipart/form-data"
        2. Раскомментировать вызов шаблона(в этом файле):
            <x-forms.inputs.file
        3. Внеси изменения указанные в файлах:

--}}

<x-forms.form {{ $attributes }} method="POST">
{{-- <x-forms.form {{ $attributes }} method="POST" enctype="multipart/form-data"> --}}
    @if ($put)
        @method('PUT')
    @endif

    {{-- require|string|min:2|max:255 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('First name') }}" name="first_name" autofocus />
    </x-forms.form-item> --}}


    {{-- nullable|string|min:2|max:255 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('Last name') }}" name="last_name" />
    </x-forms.form-item> --}}


    {{-- require|integer|min:18|max:65 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.number label="{{ __('Age') }}" name="age" value="18" min="18" max="65" step="1" />
    </x-forms.form-item> --}}


    {{-- require|numeric|min:0|max:1000 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.number label="{{ __('Amount') }}" name="amount" min="0" max="1000" step="0.01" />
    </x-forms.form-item> --}}


    {{-- required|string|in:male,female --}}
    {{-- <fieldset class="form-group border mb-4 p-3">
        <legend class="w-auto px-2">Gender</legend>
        <x-forms.form-item class="form-check mb-2">
            <x-forms.inputs.radio label="{{ __('Male') }}" name="gender" value="male" />
        </x-forms.form-item>
        <x-forms.form-item class="form-check mb-2">
            <x-forms.inputs.radio label="{{ __('Female') }}" name="gender" value="female" />
        </x-forms.form-item>
    </fieldset> --}}


    {{-- require|digits:6 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('Zip') }}" name="zip" pattern="\d{6}" placeholder="123456" />
    </x-forms.form-item> --}}


    {{-- nullable|boolean --}}
    {{-- <x-forms.form-item class="mb-3 form-check">
        <x-forms.inputs.checkbox label="{{ __('Subscribe') }}" name="subscription" value="1" />
    </x-forms.form-item> --}}


    {{-- accepted --}}
    {{-- <x-forms.form-item class="mb-3 form-check">
        <x-forms.inputs.checkbox label="{{ __('Agreement') }}" name="agreement" />
    </x-forms.form-item> --}}


    {{-- required|confirmed|min:8|letters|mixedCase|numbers|symbols --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.password label="{{ __('Password') }}" />
    </x-forms.form-item>
    <x-forms.form-item class="mb-3">
        <x-forms.inputs.password label="{{ __('Repeat password') }}" name="current_password_confirmation" />
    </x-forms.form-item> --}}


    {{-- required|string|email --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.email label="{{ __('Email') }}" />
    </x-forms.form-item> --}}


    {{-- nullable|string|url --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.url name="website"/>
    </x-forms.form-item> --}}


    {{-- nullable|string|uuid --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('UUID') }}" name="uuid" />
    </x-forms.form-item> --}}


    {{-- nullable|string|ip --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('IP') }}" name="ip" />
    </x-forms.form-item> --}}


    {{-- nullable|file|image|max:1024 --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.file label="{{ __('File') }}" name="file" accept="image/*" size="1024" />
    </x-forms.form-item> --}}


    {{-- nullable|string|date --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.date label="{{ __('Date') }}" name="date" />
    </x-forms.form-item> --}}


    {{-- nullable|string|date --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.time label="{{ __('Time') }}" name="time" />
    </x-forms.form-item> --}}


    {{-- Указания начала и окончания рекламной акции --}}
    {{-- nullable|string|date|{after_or_equal|after:start-date} --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.date label="{{ __('Event start date') }}" name="event_start_date" required autofocus />
    </x-forms.form-item>
    <x-forms.form-item class="mb-3">
        <x-forms.inputs.date label="{{ __('Event end date') }}" name="event_end_date" required />
    </x-forms.form-item> --}}


    {{-- required|string|new Phone --}}
    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.tel label="{{ __('Phone') }}" name="phone" />
    </x-forms.form-item> --}}


    {{-- required|array|size:2 --}}
    {{-- services.* required|string|max:5 --}}
    {{-- <fieldset class="form-group border mb-4 p-3">
        <legend class="w-auto px-2">Services</legend>
        @foreach ($categories as $value => $label)
            <x-forms.form-item class="form-check mb-2">
                <x-forms.inputs.checkbox label="{{ __($label) }}" name="services[]" value="{{ $value }}" />
            </x-forms.form-item>
        @endforeach
    </fieldset> --}}


    {{-- <fieldset class="form-group border mb-4 p-3">
        <legend class="w-auto px-2">Delivery</legend>
        <x-forms.form-item class="form-check mb-2">
            <x-forms.inputs.date label="{{ __('Date') }}" name="delivery[date]" />
        </x-forms.form-item>
        <x-forms.form-item class="form-check mb-2">
            <x-forms.inputs.time label="{{ __('Time') }}" name="delivery[time]" />
        </x-forms.form-item>
    </fieldset> --}}


    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.text label="{{ __('Secret') }}" name="secret" value="secret" />
    </x-forms.form-item> --}}


    {{-- <x-forms.form-item class="mb-3">
        <x-forms.inputs.trix label="{{ __('Content') }}" autofocus />
    </x-forms.form-item> --}}


    <x-forms.form-item class="col-md-4 mb-4">
        <x-forms.inputs.select
            name="category"
            value="{{ request('category') }}"
            :options="$categories"
        />
    </x-forms.form-item>


    {{-- <x-forms.form-item class="mb-3 form-check">
        <x-forms.inputs.checkbox label="{{ __('С условиями ознакомлен') }}" name="rules" />
    </x-forms.form-item> --}}


    <x-button>
        {{ $put ? __('Изменить пост') : __('Создать пост') }}
    </x-button>
</x-forms.form>
