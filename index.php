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
            $name = $_GET['name'] ?? '';
            $mail = $_GET['mail'] ?? '';
            $age = $_GET['age'] ?? '';
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


    <section id="snack-3">
        <?php
            $arr_random = [];
            while (count($arr_random) < 15) {
                $number = rand(0, 30);
                if (!in_array($number, $arr_random)) {
                    $arr_random[] = $number;
                };
            };
        ?>
        <h1>snack 3</h1>
        <ul>
            <?php for ($_i=0; $_i < count($arr_random); $_i++) { 
               echo '<li>' . $arr_random[$_i] . '</li>';
            };
            ?>
        </ul>
    </section>


    <section id="snack-4">
        <?php
            $para = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam reprehenderit minima voluptatum quod. Cum ipsum excepturi deleniti fugiat, ratione explicabo maxime optio dignissimos placeat quisquam, quia, autem similique consequatur laboriosam.
            Alias praesentium eum enim omnis possimus voluptatibus quasi veniam a excepturi esse, ipsum corporis itaque quaerat quo numquam id deserunt perferendis at earum amet eius eveniet. Architecto sed officia sapiente.
            Labore illo aspernatur blanditiis non! Rem consequuntur soluta libero suscipit ullam non, corporis quod fugiat id. Quas odio distinctio assumenda aperiam velit porro debitis necessitatibus facilis omnis quasi, nesciunt itaque.
            Consequatur laboriosam sunt pariatur dicta quis nemo quaerat. Tempore dolorum nulla, laboriosam quos totam saepe sed quas ipsum corrupti rem ratione illum aperiam repellat, minima accusantium doloremque? Eligendi, repudiandae quae?
            Eius corrupti omnis quas. Quas laborum similique ullam possimus ad velit, aliquam nobis. Dolorem recusandae natus numquam quibusdam error sit doloremque distinctio explicabo et quod, enim, minima nihil inventore blanditiis!';

            $arr_para = explode('.', $para);
        ?>
        <h1>snack 4</h1>
        <?php
            echo "<h3>full paragraph:</h3> $para";
            for ($_i=0; $_i < count($arr_para); $_i++) { 
                echo '<h3> section ' . ($_i + 1) . '</h3>';
                echo '<p>' . $arr_para[$_i] . '</p>';
            };
        ?>
    </section>
</body>
</html>

