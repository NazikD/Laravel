<!-- страница создания комментариев -->


<div>
    <div>
        <form action="{{ route ('post.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="Name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="text" name="Password" class="form-control" id="pass">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>