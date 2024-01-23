@extends('layouts.base')

@section('page.title', __('Страница блога'))

@section('content')

    <section class="blog">

        <x-container>

            @if (empty($posts))

                <x-title>{{ __('Нет постов') }}</x-title>

            @else

                <x-title>{{ __('Список постов!') }}</x-title>

                <div class="row">

                    @foreach ($posts as $post)

                        <article class="col-sm-6 mb-4 post">

                            <x-post.card :post="$post" to="blog.show" />

                        </article>

                    @endforeach

                </div>

            @endif

        </x-container>

    </section>

@endsection
