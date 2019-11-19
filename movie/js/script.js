function searchMovie() {
    $('#movies').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',
        data: {
            'apikey': '34250492',
            's': $('#search-input').val()

        },
        success: function (rest) {
            // console.log(rest);
            if (rest.Response == "True") {
                let movie = rest.Search;
                // console.log(movie);
                $.each(movie, function (i, data) {
                    $('#movies').append(`
                    <div class="col-md-3">
                    <div class="card">
                    <img src="` + data.Poster + `" class="card-img-top">
                     <div class="card-body">
                    <h5 class="card-title">` + data.Title + `</h5>
                    <h6 class="card-subtitle mb-2 text-muted">` + data.Year + `</h6>
                    <a href="#" class="card-link see-detail"  data-toggle="modal" data-target="#exampleModal" data-id="` + data.imdbID + `">See Details</a>
                   </div>
                    </div>
                    </div>
                    `)
                });
                $('#search-input').val('');

            } else {
                // $('#movies').html('<h1>movie not found!</h1>')

                $('#movies').html(`
                <div class="col">

                <h1 class="text-center">` + rest.Error + `</h1>
                
                `)

            }
        }


    });
}

$('#search-button').on('click', function () {
    searchMovie();

});

$('#search-input').on('keyup', function (e) {
    if (e.keyCode === 13) {
        searchMovie();
    }
});

//event banding
$('#movies').on('click', '.see-detail', function () {
    // console.log($(this).data('id'));

    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apikey': '34250492',
            'i': $(this).data('id')

        },
        success: function (result) {
            if (result.Response == "True") {
                $('.modal-body').html(`
                <div class="container-fluid mb-3">
                <div class="row">
                <div class="col-md-4">
                  <img src="` + result.Poster + `" class="img-fluid">
                  </div>
                


                <div class="col-md-8">
                <ul class="list-group">
                <li class="list-group-item"><h3>` + result.Title + `</h3></li>
                <li class="list-group-item">Released :` + result.Released + `</li>
                <li class="list-group-item">` + result.Genre + `</li>
                <li class="list-group-item">` + result.Actors + `</li>
                <li class="list-group-item">` + result.Plot + `</li>
                

               
              </ul>
                 </div>
                </div>
                </div>
               
                
                `);
            }

        }
    })


});