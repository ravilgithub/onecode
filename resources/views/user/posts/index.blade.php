@extends('layouts.base')

@section('page.title', __('Мои посты'))

@section('content')

    <section class="posts">

        <x-container>

            <x-on-line>

                @if (empty($posts))
                    <x-title class="h2 my-4">{{ __('Нет постов') }}</x-title>
                @else
                    <x-title class="h2 my-4">{{ __('Список постов!') }}</x-title>
                @endif

                <x-link to="user.posts.create" class="btn btn-outline-primary" role="button">
                    {{ __('Создать пост') }}
                </x-link>

            </x-on-line>

            @if (!empty($posts))

                <div class="row">

                    @foreach ($posts as $post)

                        <article class="col-sm-12 mb-4 post">
                            <h2 class="h5 mb-1">

                                <x-link to="user.posts.show" :params="[$post->id]">
                                    {{ $post->title }}
                                </x-link>

                            </h2>

                            <div class="content">

                                <small class="d-block text-muted">
                                    {{ now()->format('d m Y H:i:s') }}
                                </small>

                            </div>
                        </article>

                    @endforeach

                </div>

            @endif

        </x-container>

    </section>

@endsection
