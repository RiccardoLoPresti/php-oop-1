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
    </div>
  </div>
  </div>
</div>
</body>
</html>