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
        <?php
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
        ?>
        <h1>snack 2</h1>
        <form action="" method="GET">
            <label for="mail">mail</label>
            <input type="text" name="mail" id="mail">
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            <label for="age">age</label>
            <input type="text" name="age" id="age">
            <button>send</button>
        </form>
        <?php 
            if (strlen($name) > 3 && is_numeric($age) && preg_match('(@|.)', $mail) !== false) {
               echo 'accesso riuscito';
            }else {
                echo 'accesso negato';
            }
        ?>
    </section>
</body>
</html>