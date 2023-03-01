<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frame;

class MyPlaceController extends Controller
{
    // public function index()
    // {
    //     $frames = Frame::all();
    //     return view('posts', compact('frames'));
    // }





    // задача проекта, создать страницу с постами. на главной странице должна быть кнопка создание нового поста.
    // Информацию о посте можно видеть на другой страницу. Там же можно вернутся на главную страницу, или изменить содержимое поста, а также удалить данный пост

    public function index() // выводит все данные из таблицы 
    {
        $frames = Frame::all();
        return view('post.index', compact('frames'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store() // производит валидацию поста и создание 
    {
        $data = request()->validate([
            'Name' => 'string',
            'Password' => 'string',
        ]);
        Frame::create($data); //создает в БД пост
        return redirect()->route('post.index'); // после создания ссылается на главную страницу поста
    }



    public function show(Frame $post) // принимает значение и проверяет наличие данного поста. В случае ошибки возвращает 404
    {
        return view('post.show', compact('post'));
    }

    public function edit(Frame $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Frame $post) // производит валидацию поста и одновление 
    {
        $data = request()->validate([
            'Name' => 'string',
            'Password' => 'string',
        ]);
        $post->update($data); // создает данный пост
        return redirect()->route('post.show', $post->id); // после создания ссылается на страницу поста
    }






    public function index_1()
    {
        return 'Hello Nazar, this is INDEX from Controller MyPlaceController';
    }
    public function index_2()
    {
        return 'Hello Nazar, this is INDEX_2 from Controller MyPlaceController';
    }
    public function dBase()
    {
        $frame = Frame::find(2);
        dd($frame);
        // dd($frame->Name);
    }
}
