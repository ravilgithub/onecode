@extends('layouts.base')

@section('page.title', $post->title)

@section('content')

    <section class="post">

        <x-container>

            <div class="d-flex justify-content-between my-4">

                <x-link to="user.posts.index">
                    {{ __('Назад') }}
                </x-link>

                <x-link to="user.posts.edit" :params="[$post->id]" class="btn btn-outline-primary" role="button">
                    {{ __('Изменить') }}
                </x-link>

            </div>

            <x-title class="pb-4 border-bottom">{{ $post->title }}</x-title>

            <div class="content">
                {!! $post->content !!}
            </div>

        </x-container>

    </section>

@endsection
