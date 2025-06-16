<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>

    <header>
        <h1 class="text-center">DISCOGS</h1>
    </header>

    <hr>

    <?php
                
        $string = file_get_contents('./dischi.json');

        $dischi = json_decode($string);

        // var_dump($dischi);

    ?>

    <main>
        <div class="container text-center">
            <div class="row mt-2 row-cols-1 row-cols-md-3 g-3">
                <?php
                    foreach($dischi as $disco) {
                        echo "
                        <div class='col-3 '>
                            <div class='card h-100'>
                                <img src='{$disco->cover}' class='img-fluid object-fit-cover' style='height: 300px; width: 100%;' alt='{$disco->titolo}'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$disco->titolo}</h5>
                                    <p class='card-text'>
                                        Artista: {$disco->artista}<br>
                                        Anno: {$disco->anno}<br>
                                        Genere: {$disco->genere}
                                    </p>
                                </div>
                            </div>
                        </div>
                        ";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>