@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <section class="container text-start blog">
        <a href="{{route('blog.index')}}">
            Назад
        </a>

        <article class="py-4 post">

            <h2>
                {{ $post->title }}
            </h2>

            <div class="content">
                {!! $post->content !!}
            </div>

        </article>

    </section>

@endsection
