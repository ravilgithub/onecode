@extends('layouts.base')

@section('page.title', 'Создать пост')

@section('content')

    <section class="create-post">

        <x-container>

            <x-on-line>

                <x-title>{{ __('Создать пост') }}</x-title>

                <x-link to="user.posts.index">
                    {{ __('Назад') }}
                </x-link>

            </x-on-line>

            <x-post.form class="my-form" action="{{ route('user.posts.store') }}" />

        </x-container>

    </section>

@endsection
