<!-- отображает основную страницу с комментариями -->


<div>
    <div>
        <!-- ссылается на страницу создания -->
        <a href="{{ route('post.create') }}">Add one</a>
    </div>
    @foreach($frames as $post)
    <!-- Каждый пост является ссылкой, ссылающейся на страницу с постом -->
    <div><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->Name}}</a></div>
    @endforeach
</div>