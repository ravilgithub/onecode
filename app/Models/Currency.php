<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    /**
     * Если первичный ключ не число.
     */
    public $incrementing = false;

    /**
     * Поля доступные для заполнения.
     */
    protected $fillable = [
        'id',
        'name',
        'price',
        'active',
        'active_at',
        'sort',
    ];

    /**
     * Исключает из выборки указанные поля.
     *
     * Что-бы увидеть результат, надо привести результат
     * выборки из базы данных к массиву или json'у.
     */
    protected $hidden = [
        'name',
    ];

    /**
     * Приведение данных к указанному типу, как при добавлении,
     * так и при полученных из БД.
     *
     * Что-бы увидеть результат, надо привести результат
     * выборки из базы данных к массиву или json'у.
     */
    protected $casts = [
        'price'     => 'decimal:2', // 2 знака после запятой
        'active'    => 'boolean',
        'active_at' => 'datetime:d-m-Y H:i:s',
        'sort'      => 'integer',
    ];
}
