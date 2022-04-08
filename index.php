<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section id="snack-1">
        <?php
            $arr_partite = [
                [
                    'casa' => [
                        'squadra' => 'olimpia milano',
                        'punti' => 90,
                    ],
                    'ospite' => [
                        'squadra' => 'virtus',
                        'punti' => 75,
                    ],
                ],
                [
                    'casa' => [
                        'squadra' => 'varese',
                        'punti' => 55,
                    ],
                    'ospite' => [
                        'squadra' => 'polisportiva dinamo',
                        'punti' => 63,
                    ],
                ],
                [
                    'casa' => [
                        'squadra' => 'fortitudo pallacanestro',
                        'punti' => 105,
                    ],
                    'ospite' => [
                        'squadra' => 'auxilium',
                        'punti' => 94,
                    ],
                ],
            ];
        ?>
        <h1>snack 1</h1>
        <ul>
            <?php
                for ($_i=0; $_i < count($arr_partite); $_i++) { 
                    echo '<li>' 
                    . $arr_partite[$_i]['casa']['squadra'] . ' - ' . $arr_partite[$_i]['ospite']['squadra']
                    . ' | '
                    .$arr_partite[$_i]['casa']['punti'] . ' - ' . $arr_partite[$_i]['ospite']['punti']
                    . '</li>';
                }
            ?>
        </ul>
    </section>
    <section id="snack-2">
        
    </section>
</body>
</html>