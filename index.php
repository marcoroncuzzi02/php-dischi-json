<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
</head>
<body>

    <header>
        <h1>Discogs</h1>
    </header>

    <?php
        $dischi=[
            [
                'titolo' => 'ciao',
                'artista' => 'ciao',
                'cover' => 'ciao',
                'anno' => 'ciao',
                'genere' => 'ciao'
            ],
            [
                'titolo' => 'ciao',
                'artista' => 'ciao',
                'cover' => 'ciao',
                'anno' => 'ciao',
                'genere' => 'ciao'
            ],
            [
                'titolo' => 'ciao',
                'artista' => 'ciao',
                'cover' => 'ciao',
                'anno' => 'ciao',
                'genere' => 'ciao'
            ],
            [
                'titolo' => 'ciao',
                'artista' => 'ciao',
                'cover' => 'ciao',
                'anno' => 'ciao',
                'genere' => 'ciao'
            ]
        ] 
                
        $json_string= json_encode($dischi)
    ?>
</body>
</html>