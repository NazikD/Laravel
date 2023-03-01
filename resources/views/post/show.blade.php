<!-- Страница с постом, где указана подробная информация -->

<div>
    <div>{{$post->id}}. {{$post->Name}} {{$post->Password}}</div>
    <!-- позволяет вернутся на главную страницу всех постов -->
    <div><a href="{{route ('post.index')}}">Back</a></div>
    <!-- позволяет отредактировать пост. В значение пути прописан ID, взятый из GET запроса -->
    <div><a href="{{route ('post.edit', $post->id)}}">Edit</a></div>

    <form action="{{route ('post.delete', $post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Delete">
    </form>
</div>