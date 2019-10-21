<?php


namespace App\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        $array = [
            [
                'id' => '1',
                'book' => 'Война и мир',
                'author' => 'Л.Н. Толстой',
            ],
            [
                'id' => '2',
                'book' => 'Преступление и наказание',
                'author' => 'Ф.М. Достоевский',
            ],
            [
                'id' => '3',
                'book' => 'Мастер и маргарита',
                'author' => 'М.А. Булгаков',
            ],
        ];

        return view('index', [
            'array' => $array
        ]);
    }

    public function parameter()
    {
        $parameters = [];
        foreach ($_GET as $k => $v) {
            if (preg_match('/^[a]\d+$/', $k) && $v) {
                $parameters[$k] = $v;
            }
        }
        return view('parameter', [
            'parameters' => $parameters
        ]);
    }
}
