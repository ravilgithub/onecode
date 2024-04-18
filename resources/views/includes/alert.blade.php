@if ($msg = session('alert'))
    <div
        class="alert mb-0 py-2 rounded-0 text-center small alert-{{ session('alert-variant', 'success') }}"
        role="alert"
    >
        {{ __($msg) }}
    </div>
@endif
