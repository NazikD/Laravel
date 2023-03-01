<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frame;


class PostController extends Controller
{
    public function index() // выводим данные из VIEW
    {
        echo 'This is POST';
        return view('posts');
    }

    public function index_2() // выводим произвольный текст
    {
        return 'Hello Nazar, this is INDEX_2 from Controller - PostController';
    }
    public function index_3() // выводим все данные из таблицы в виде коллекции
    {
        $first = Frame::all();
        foreach ($first as $firs) {
            dump($firs->Name);
        }
    }
    public function index_4() // выводим данные из таблицы по ID, и указываем конкретное значение
    {
        $first = Frame::find(1);
        dd($first->Name);
    }
    public function index_5() // выводим условные данные
    {
        $first = Frame::where('Password', 456)->get();
        foreach ($first as $first) {
            dump($first->Name);
        }
    }




    public function create()
    {
        // добавляем конкретные атрибуты в БД
        Frame::create([
            'Name' => 'Nazar',
            'Password' => 777,
        ]);
    }

    public function create_2()
    {
        // добавляем массив данных в БД
        $postArr = [
            [
                'Name' => 'Lena',
                'Password' => 1295,
            ],
            [
                'Name' => 'Sergei',
                'Password' => 1255,
            ],
            [
                'Name' => 'Igor',
                'Password' => 7799,
            ],
        ];
        foreach ($postArr as $item) {
            Frame::create($item);
        }
    }

    public function update() //обновляем данные
    {
        $post = Frame::find(6);
        $post->update([
            'Name' => 'Sergei',
            'Password' => 1010,
        ]);
    }
    public function delete() // удаляем данные 
    {
        $post = Frame::find(4);
        $post->delete([]);
    }
}
