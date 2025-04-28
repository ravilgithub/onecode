@extends('layouts.base')

@section('page.title', __('Форма правил валидации'))

@section('content')

    <section class="validation-rules">

        <x-container>

            <x-on-line>

                <x-title class="h2 my-4">{{ __('Форма правила валидации') }}</x-title>

                <x-link to="validation.rules.index">
                    {{ __('Назад') }}
                </x-link>

            </x-on-line>

            <x-post.form class="my-form" action="{{ route('validation.rules.store') }}" />

        </x-container>

    </section>

@endsection
