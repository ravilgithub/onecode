@extends('layouts.base')

@section('page.title', __('Проверенные данные формы правил валидации'))

@section('content')

    <section class="posts">

        <x-container>

            <x-on-line>

                @if (empty($fields))
                    <x-title class="h2 my-4">{{ __('Нет данных формы правил валидации') }}</x-title>
                @else
                    <x-title class="h2 my-4">{{ __('Проверенные данные формы правил валидации') }}</x-title>
                @endif

                <x-link to="validation.rules.create" class="btn btn-outline-primary" role="button">
                    {{ __('К форме правил валидации') }}
                </x-link>

            </x-on-line>

            @if (!empty($fields))

                <div class="row">
                    <article class="col-sm-12 mb-4 post">
                        <div class="content">
                            <dl>

                                @foreach ($fields as $field => $value)
                                    <dt>Поле: {{ $field }}</dt>

                                    @if (is_array($value))
                                        <dd><pre>Значение: {{ collect($value) }}</pre></dd>
                                    @else
                                        <dd>Значение: {{ $value }}</dd>
                                    @endif

                                @endforeach

                            </dl>
                        </div>
                    </article>
                </div>

            @endif

        </x-container>

    </section>

@endsection
