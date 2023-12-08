@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <section class="post">

        <x-container>

            <x-link to="blog.index" class="d-block my-4">
                {{ __('Назад') }}
            </x-link>

            <x-title>{{ $post->title }}</x-title>

            <div class="content">
                {!! $post->content !!}
            </div>

        </x-container>

    </section>

@endsection
