@props([
    'class' => 'col-12',
])

<div class="container">

    {{-- x-slot:before --}}
    @isset($before)

        {{ $before }}

    @endisset


    <div class="row">
        <div class="{{$class}}">

            {{ $slot }}

        </div>
    </div>


    {{-- x-slot:after --}}
    @isset($after)

        {{ $after }}

    @endisset

</div>
