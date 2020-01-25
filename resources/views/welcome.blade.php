<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Max Books</title>
    <link rel="shortcut icon" href="{{ URL::to('img/book.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway|ZCOOL+QingKe+HuangYou&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::to('css/main.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </link>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{URL::to('js/main.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand offset-md-1" href="{{ route('welcome') }}">
            <img src="{{ URL::to('img/book.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            Data Max Books
        </a>
    </nav>
    <div class="row p41">
        <div class="col-md-10 offset-md-1">
            <div class="row row-cols-md-3" id="bookholder">
            </div>
        </div>

        <div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <p class="modal-title" id="staticBackdropLabel">Sure to Delete?</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger delmodalyes">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="staticBackdropLabel">Update Book Information</p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="p-3">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Book Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="authors">Authors</label>
                                <input type="text" class="form-control" id="authors">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="isbn">ISBN</label>
                                <input type="text" class="form-control" id="isbn">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="number_of_pages">Number of Pages</label>
                                <input type="number" class="form-control text-right" id="number_of_pages">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="release_date">Release Date</label>
                                <input type="date" class="form-control" id="release_date">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="publisher">Publisher</label>
                                <input type="text" class="form-control" id="publisher">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-success editmodalyes">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var booksUrl = '{{ route('booklists') }}';
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
