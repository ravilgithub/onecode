@extends('layouts.base')

@section('page.title', 'Страница блога')

@section('content')

    <section class="container text-start blog">

        @if (empty($posts))

            <article class="py-4 post empty">
                Нет постов
            </article>

        @else

            @foreach ($posts as $post)

                <article class="py-4 post">

                    <h2>
                        {{ $post->title }}
                    </h2>

                    <div class="content">
                        {!! $post->content !!}
                    </div>

                    <a href="{{ route('blog.show', $post->id) }}">
                        Читать...
                    </a>

                </article>

            @endforeach

        @endif

    </section>

@endsection
