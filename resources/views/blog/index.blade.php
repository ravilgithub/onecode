@extends('layouts.base')

@section('page.title', __('Блог'))

@section('content')

    <section class="blog">

        <x-container>

            @if (empty($posts))

                <x-title class="h2 my-4">{{ __('Нет постов') }}</x-title>

            @else

                <x-title class="h2 my-4">{{ __('Список постов!') }}</x-title>

                @include('blog.filter')

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
