<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Data Max Books</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway|ZCOOL+QingKe+HuangYou&amp;display=swap"
        rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    </link>

    <link rel="stylesheet" href="{{ URL::to('css/main.css')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand offset-md-2" href="{{ route('welcome') }}">
        <img src="{{ URL::to('img/book.png')}}" width="30" height="30"
                class="d-inline-block align-top" alt="">
            Data Max Books
        </a>
    </nav>
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card-deck">
                <div class="card">
                    <p class='card-header text-mute b'>ISBN: 1293203393594 <span class="badge badge-info">1</span></p>
                    <img src="{{ URL::to('img/book.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Things fall apart</h5>
                        <p class="card-text">Chinua Achebe.</p>
                    </div>
                    <div class="controls card-body">
                        <button type="button" class="btn btn-outline-info btn-sm">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Mac-Millian</small>
                        <small class='pubdate text-muted'>&copy; Jan, 1997.</small>
                    </div>
                </div>
                <div class="card">
                    <p class='card-header text-mute b'>ISBN: 1293553393594 <span class="badge badge-info">2</span></p>
                    <img src="{{ URL::to('img/book.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Half of a yellow sun</h5>
                        <p class="card-text">Chimananada Adichie</p>
                    </div>
                    <div class="controls card-body">
                        <button type="button" class="btn btn-outline-info btn-sm">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Lantern</small>
                        <small class='pubdate text-muted'>&copy; May, 2006.</small>
                    </div>
                </div>
                <div class="card">
                    <p class='card-header text-mute b'>ISBN: 103393594 <span class="badge badge-info">3</span></p>
                    <img src="{{ URL::to('img/book.jfif')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">a Game of Thrones</h5>
                        <p class="card-text">John Sumacha</p>
                    </div>
                    <div class="controls card-body">
                        <button type="button" class="btn btn-outline-info btn-sm">Edit</button>
                        <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Acme Books</small>
                        <small class='pubdate text-muted'>&copy; May, 2016.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
