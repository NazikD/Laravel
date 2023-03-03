<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        // $category = Category::find(1);

        return view('post.index', compact('frames'));


        //обращение к связанным таблицам (Frame and Category)
        // $ukrainian = Frame::where('category_id', $category->id)->get();
        // dd($category->Country);
        // dd($category->posts);
    }

    public function create()
    {
        $categories = Category::all();
        // dd($categories);
        return view('post.create', compact('categories'));
    }

    public function store() // производит валидацию поста и создание 
    {
        $data = request()->validate([
            'Name' => 'string',
            'Password' => 'string',
            'category_id' => '',
        ]);
        Frame::create($data); //создает в БД пост
        return redirect()->route('post.index'); // после создания ссылается на главную страницу поста
    }



    public function show(Frame $post) // принимает значение и проверяет наличие данного поста. В случае ошибки возвращает 404
    {
        $categories = Category::all();
        return view('post.show', compact('post', 'categories'));
    }

    public function edit(Frame $post)
    {
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
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

    public function destroy(Frame $post)
    {
        $post->delete();
        return redirect()->route('post.index');
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
