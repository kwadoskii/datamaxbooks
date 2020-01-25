var bookid = null;

$(document).ready(function () {
    getbooks();
});

$(document).on('click', '.delbtn', function (e) {
    e.preventDefault();
    $('#deleteModal').modal('show');
    let bookId = e.target.parentNode.dataset['id'];

    $(document).on('click', '.delmodalyes', function (e) {
        e.preventDefault();
        $.ajax({
            method: 'DELETE',
            url: document.URL + 'api/v1/books/' + bookId,
        }).done(function (response) {
            getbooks();
            $('#deleteModal').modal('hide');
        });
    });
});

$(document).on('click', '.editbtn', function (e) {
    e.preventDefault();
    $('#editModal').modal('show');
    bookid = e.target.parentNode.dataset['id'];

    $.ajax({
        method: 'GET',
        url: document.URL + 'api/v1/books/' + bookid,
    }).done(function (response) {
        $('#name').val(response.data.name);
        $('#authors').val(response.data.authors);
        $('#isbn').val(response.data.isbn);
        $('#number_of_pages').val(response.data.number_of_pages);
        $('#release_date').val(response.data.release_date);
        $('#publisher').val(response.data.publisher);
        $('#country').val(response.data.country);
    });

});

$(document).on('click', '.editmodalyes', function (e) {
    e.preventDefault();
    $.ajax({
        method: 'PATCH',
        url: document.URL + '/api/v1/books/' + bookid,
        data: {
            name: $('#name').val(),
            authors: $('#authors').val(),
            isbn: $('#isbn').val(),
            number_of_pages: $('#number_of_pages').val(),
            release_date: $('#release_date').val(),
            publisher: $('#publisher').val(),
            country: $('#country').val()
        }
    }).done(function () {
        getbooks();
        $('#editModal').modal('hide');
        bookid = null;
    });
});

function getbooks() {
    $.ajax({
        method: 'GET',
        url: booksUrl,
    }).done(function (response) {
        let books = response.data.book.slice(0, 10);
        i = 1;
        books = books.reduce((acc, { id, isbn, name, authors, release_date, publisher }) => acc +=
            `<div class="col-md-4 mb-4">
                <div class="card">
                    <p class='card-header text-mute b'>ISBN: ${isbn} <span class="badge badge-info">${i++}</span></p>
                    <img src="img/book.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">${name}</h5>
                        <p class="card-text">${authors[0]}</p>
                    </div>
                    <div class="controls card-body" data-id='${id}'>
                        <button type="button" class="btn btn-outline-info btn-sm editbtn">Update</button>
                        <button type="button" class="btn btn-outline-danger btn-sm delbtn">Delete</button>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">${publisher}</small>
                        <small class='pubdate text-muted'>&copy; ${release_date}</small>
                    </div>
                </div>
            </div>`, ``);

        $('#bookholder').html(books);
    });
}
