<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark"></body>
    <header>
        <nav class="bg-primary text-white p-4">
            <h1>Movies</h1>
        </nav>
    </header>
    <main>
        <div class="container bg-warning my-5 rounded">
            <div class="row p-5">

            <?php

            include 'movies.php';

            $lotr_fellowship = new Movie('The Lord of the Rings: The Fellowship of the Ring', 2001, 'Peter Jackson');
            $lotr_towers = new Movie('The Lord of the Rings: The Two Towers', 2002, 'Peter Jackson');
            $lotr_return = new Movie('The Lord of the Rings: The Return of the King', 2003, 'Peter Jackson');

            var_dump($lotr_fellowship);
            echo $lotr_fellowship->getYearDiff(2023);
            var_dump($lotr_towers);
            echo $lotr_towers->getYearDiff(2023);
            var_dump($lotr_return);
            echo $lotr_return->getYearDiff(2023);




            ?>

        </div>
    </main>
    <script src="vue.js"></script>
</body>
</html>