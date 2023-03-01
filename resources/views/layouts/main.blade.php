<!-- злавная страница с указанием всей необходимой информации -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <!-- навигация между VIEW по маршруту -->
            <nav>
                <ul>
                    <li><a href="{{route('main.index')}}">Main</a></li>
                    <li><a href="{{route('post.index')}}">Posts</a></li>
                    <li><a href="{{route('content.index')}}">Content</a></li>
                    <li><a href="{{route('about.index')}}">About</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- выводит значение из VIEW, в соответствии с указанным маршрутом -->
    <div>
        @yield('content')
    </div>
</body>

</html>