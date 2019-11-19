<?php
$data = file_get_contents('data/pizza.json');

//json jd array
$reni = json_decode($data, true);
// var_dump($menu["menu"]["0"]["deskripsi"]);
$reni = $reni["menu"];
// echo $reni[0]["nama"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>API</title>
</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <img src="img/logo.png" width="100">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">All Menu</a>
                <a class="nav-item nav-link" href="#">Pizza</a>
                <a class="nav-item nav-link" href="#">Makanan</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>All Menu</h1>
        </div>
    </div>
</div>
<div class="row">
    <?php foreach ($reni as $row) : ?>
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="img/menu/<?= $row["gambar"] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $row["nama"] ?></h5>
                    <p class="card-text"><?= $row["deskripsi"] ?></p>
                    <h5 class="card-title">Rp. <?= $row["harga"] ?></h5>
                    <a href="#" class="btn btn-primary">Pesan Sekarang</a>

                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>