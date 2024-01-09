@extends('layouts.base')

@section('page.title', 'Создать пост')

@section('content')

    <section class="create-post">

        <x-container>

            <x-link to="user.posts.index">
                {{ __('Назад') }}
            </x-link>

            <x-title>{{ __('Создать пост') }}</x-title>

            <x-post.form class="my-form" action="{{ route('user.posts.store') }}" />

        </x-container>

    </section>

@endsection
