@if ($errors->any())
    <ul
        class="alert mb-3 py-2 small alert-danger"
        role="alert"
    >
        @foreach ($errors->all() as $msg)
            <li class="list-unstyled">
                {{ $msg }}
            </li>
        @endforeach
    </ul>
@endif
