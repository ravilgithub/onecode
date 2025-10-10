<?php
// https://laravel-news.com/creating-helpers
// Registered  on  composer.json autoload/files
// CLI composer dump

if (!function_exists('test')) {

    /**
     * @return \Illuminate\Contracts\Foundation\Application|mixed
     */
    function test(): mixed
    {
        return app('test');
    }
}

if (! function_exists('alert')) {
    function alert(String $msg, String $variant = 'success') : void
    {
        session()->flash('alert', $msg);
        session()->flash('alert-variant', $variant);
    }
}

/**
 * Имитация модели "Категории публикаций".
 */
if (! function_exists('getCategories')) {
    function getCategories(): array
    {
        return [
            __('Все категории'),
            __('Первая категория'),
            __('Вторая категория'),
            __('Третья категория'),
        ];
    }
}

/**
 * Имитация модели "Публикации".
 */
if (! function_exists('getPosts')) {
    function getPosts(): array
    {
        $post = (object) [
            'id'      => 1,
            'title'   => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum dolor sit amet <a href="https://yandex.ru">Yandex</a> consectetur adipisicing elit. Quibusdam, accusamus.',
            'category' => 1,
        ];

        return array_fill(0, 4, $post);
    }
}

/**
 * Если значение поля массив(name="delivery[date]"),
 * то функция вернёт массив состоящий из имени поля и имени параметра.
 *
 * Функция вернёт имя поля если оно не является массивом.
 */
if (! function_exists('separate_input_name')) {
    function separate_input_name(string $data) : string|array
    {
        $input = [];

        // Получить имя массива если это массив
        if ($open_pos = strpos($data, '[')) {
            $input['name'] = mb_substr($data, 0, $open_pos);

            // Получаем имя параметра если он есть
            if ( ($open_pos + 1) !== ($close_pos = strpos($data, ']')))
                $input['param'] = mb_substr($data, $open_pos + 1, $close_pos - 1 - $open_pos);
        }

        return $input ?: $data;
    }
}
