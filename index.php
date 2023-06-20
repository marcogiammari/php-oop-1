<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    img {
        height: 20rem;
        object-fit: contain;
    }
</style>
<body class="bg-dark"></body>
    <main>
        <div class="container bg-dark border border-warning">
            <div class="row text-center p-5">
                <h2 class="text-white">My Movies</h2>
            </div>
            <div class="row justify-content-center p-5 gap-2">

            <?php include 'db.php' ?>

            <?php foreach ($movies as $movie) { ?>

                <div class="col-auto d-flex flex-column justify-content-center align-items-center text-center bg-warning rounded p-4">
                    <h5><?php echo $movie->title ?></h5>
                    <p>
                        <?php 
                            foreach ($movie->genre as $value) {
                                echo $value.' ';
                            }
                            echo $movie->year;
                        ?>
                    </p>
                    <img class="rounded" src="<?php echo $movie->info->thumb ?>" alt="$movie->title">
                    <p>
                        <p><?php echo $movie->director ?></p>
                        <p><?php echo $movie->info->length.' minutes' ?></p>
                        <p><?php echo 'Language: ' . $movie->info->language ?></p>
                    </p>
                    <p><?php echo $movie->getYearDiff(2023) ?></p>
                </div>

            <?php } ?>          

        </div>
    </main>
    <script src="vue.js"></script>
</body>
</html>