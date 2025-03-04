<x-forms.form action="{{ route('blog.index') }}">
    <div class="row">
        <x-forms.form-item class="col-md-4 mb-4">
            <x-forms.inputs.text
                name="search"
                value="{{ request('search') }}"
                placeholder="{{ __('Поиск') }}"
                autofocus
                single
                required
            />
        </x-forms.form-item>

        <x-forms.form-item class="col-md-4 mb-4">
            <x-forms.inputs.select
                name="category"
                value="{{ request('category') }}"
                :options="$categories"
                single
                required
            />
        </x-forms.form-item>

        <x-forms.form-item class="col-md-4 mb-4">
            <x-button class="w-100">
                {{ __('Применить') }}
            </x-button>
        </x-forms.form-item>
    </div>
</x-forms.form>
