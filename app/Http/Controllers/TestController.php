<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * [test description]
     *
     * @param Request $request [$request description]
     *
     * @return string [string] [return description]
     */
    public function index(Request $request): string
    {
        // dd($request);
        // return $request->all();
        return response()->json(['test_json' => 'test_json_text']);
    }


    /**
     * [create description]
     *
     * @param Request $request [$request description]
     *
     * @return string [string] [return description]
     */
    public function store(Request $request): string
    {
        // dd($request->input('age'));
        return response()->json($request->input('email'));
        // return $request->all();
    }


    /**
     * Метод обработчика по умолчанию.
     *
     * @param Request $request [$request description]
     *
     * @return string [string] [return description]
     */
    public function __invoke(Request $request): string
    {
        return response()->json($request->all('name'));
    }
}
