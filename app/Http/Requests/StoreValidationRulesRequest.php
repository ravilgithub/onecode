<?php

namespace App\Http\Requests;

use Closure;
use App\Rules\Phone;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreValidationRulesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            // 'first_name' => ['required', 'string', 'min:2', 'max:255'],
            // 'last_name' => ['nullable', 'string', 'min:2', 'max:255'],
            // 'age' => ['required', 'integer', 'min:18', 'max:65'],
            // 'amount' => ['required', 'numeric', 'min:0', 'max:1000'],
            // 'gender' => ['required', 'string', 'in:male,female'],
            // 'zip' => ['required', 'digits:6'],
            // 'subscription' => ['nullable', 'boolean'], // true/false/1/0/'1'/'0'
            // 'agreement' => ['accepted'], // 'yes'/'on'/'1'/1/true/'true'
            // 'current_password' => ['required', 'string', 'confirmed', Password::min(8)->letters()->mixedCase()->numbers()->symbols()],
            // 'email' => ['required', 'string', 'email', 'max:255', /* 'exists:users' */],
            // 'content' => ['required', 'string'],
            // 'website' => ['nullable', 'string', 'url', 'max:255'],
            // 'uuid' => ['nullable', 'string', 'uuid', 'max:36'],
            // 'ip' => ['nullable', 'string', 'ip'],
            // 'phone' => ['required', 'string', new Phone],
            'category' => ['required', 'array'],


            // Array - Date + Time
            // 'date' => ['nullable', 'string', 'date'],
            // 'time' => ['nullable', 'string', 'date_format:H:i'],


            // Array - Services
            // 'services' => ['required', 'array', 'size:2'],
            // 'services.*' => ['required', 'string', 'max:5'],


            // Array - Delivery
            // 'delivery' => ['required', 'array', 'size:2'],
            // 'delivery.date' => ['required', 'string', 'date_format:Y-m-d'],
            // 'delivery.time' => ['required', 'string', 'date_format:H:i'],


            // Указания начала и окончания рекламной акции
            /* 'event_start_date' => ['nullable', 'string', 'date', 'after_or_equal:today'],
            'event_end_date' => ['nullable', 'string', 'date', 'after:event_start_date'], */


            // Для проверки файла(картинки) раскомментировать правила 'file' => ... и закомментировать всё остальное.
            // 'file' => ['sometimes', 'file', 'image', 'mimes:jpeg,webp', 'max:1024'],
            // 'file' => ['nullable', File::types(['jpg', 'jpeg', 'webp'])->max(1024)],
            // 'file' => ['nullable', File::image()->max(1024)],


            // Callback
            /* 'secret' => ['required', 'string', function (string $attribute, mixed $value, Closure $fail) {
                if ($value !== env('SECRET'))
                    $fail(__('Ключ не верный'));
            }], */


            // Абстрактные примеры

            // Exists
            // 'country_id' => ['nullable', 'number', 'min:1', 'exists:country,id'],
            // 'country_id' => ['nullable', 'number', 'min:1', Rule::exists('countries, id')->where('active', true)],


            // Unique
            // 'phone' => ['required', 'string', 'unique:users,phone'],


            // $user = $request->user;
            // 'phone' => ['required', 'string', new Phone, Rule::unique('users', 'phone')->ignore($user->id)],

        ];
    }
}
