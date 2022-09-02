<?php 
    require_once __DIR__ . '/classes/Movie.php';

    $movies = [];
    $movies[] = new Movie("Io sono leggenda", "azione", 2007);

    // var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>
<body>
    <h1>Movies</h1>
    <ol>
        <?php foreach ($movies as $movie) { ?>
            <li>
                <?php echo $movie->getTitle() . ' - ' . $movie->getGenre() . ' - ' . $movie->getPublishDate(); ?>
            </li>
        <?php } ?>
    </ol>
</body>
</html>