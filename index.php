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
        <h1>Discogs</h1>
    </header>

    <?php
                
        $string = file_get_contents('./dischi.json');

        $dischi = json_decode($string);

        var_dump($dischi);

    ?>

    <main>
        <div class="container text-center">
            <div class="row mt-2">
                <?php
                    foreach($dischi as $disco) {
                        echo "<div class='col'> $disco </div>";
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>