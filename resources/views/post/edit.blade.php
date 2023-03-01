<!-- страница редакции коментария -->


<div>
    <div>
        <!-- после указания данных, форма ссылается на страницу update -->
        <form action="{{ route ('post.update', $post->id) }}" method="post">
            <!-- защита от подделки межсайтовых запросов -->
            @csrf
            <!-- указывает название метода согласно конвенции Laravel -->
            @method('patch')
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="Name" placeholder="Name" value="{{$post->Name}}">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="text" name="Password" class="form-control" id="pass" value="{{$post->Password}}">
            </div>
            <button type=" submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>