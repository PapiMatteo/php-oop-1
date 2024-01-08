<?php

require_once __DIR__ . "/Models/Movie.php";

$movies = [
    new Movie('Lord of the rings', 'Fantasy', [8 , 9 , 9, 10]),
    new Movie('The Expendables', 'Action', [7 , 8 , 9 , 7]),
    new Movie('Tropic Thunder', 'Comedy', [8 , 8 , 9 , 7])
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php foreach($movies as $movie) { ?>
            <li>
                <?php echo $movie->title . ' ' . $movie->genre . ' ' . $movie->get_average_votes() ?>
            </li>
        <?php } ?>
    </ul>
    
</body>
</html>