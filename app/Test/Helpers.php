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
