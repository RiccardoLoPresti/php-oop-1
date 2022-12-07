<?php

require_once './models/Movie.php';
require_once './models/Genre.php';

$movie1 = new Movie('Terminator','120\'','1984', new Genre('Azione'));
$movie1->setPoster('https://pad.mymovies.it/filmclub/2001/01/087/locandina.jpg');
//var_dump($movie1);

$movie2 = new Movie('Step Up', '130\'', '2006', new Genre('Drammatico','Danza', 'Commedia'));
$movie2->setPoster('https://mr.comingsoon.it/imgdb/locandine/big/539.jpg');
//var_dump($movie2);

$movie_list= [$movie1, $movie2];
//var_dump($movie_list);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie oop</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-start">

            <h1 class="fw-bold my-3">Movie List</h1>

            <div class="col custom-col my-5">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th scope="col">Titolo</th>
                            <th scope="col">Locandina</th>
                            <th scope="col">Durata</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Anno</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($movie_list as $movie) : ?>
                            <tr>
                                <td><?php echo $movie->title ?></td>
                                <td>
                                    <img src="<?php echo $movie->getPoster() ?>" alt="<?php echo $movie->title ?>">
                                </td>
                                <td><?php echo $movie->length ?></td>
                                <td>
                                    <?php foreach($movie->genre as $prova) :?>
                                        <ul>
                                            <li>
                                                <?php echo $prova ?? 'n/d' ?>
                                            </li>
                                        </ul>
                                    <?php endforeach;?>
                                </td>
                                <td><?php echo $movie->year ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                    +Add Films
                </button>


                <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Film:</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="php.index">

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Titolo:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Immagine:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Durata:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Genere:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Anno:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>