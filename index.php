<?php
session_start();
require_once ('Personnage.php');
require_once ('fight.php');

$player1 = new Personnage('Nabil', 50, 20, 1, 'Fermier');
$player2 = new FireMage('Ziad', 100, 10, 1, 'FireMage');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Document</title>
    </head>
    <body class="bg-gray-400 w-fit mx-auto text-center p-4">
        <style>
            .red{
                color:blue;
            }
            .green{
                color:greenyellow
            };
        </style>
        <div class="flex gap-10 mb-4 justify-center">
            <div class="fixed border p-4 h-fit right-36">
            <?php $player1->toString(); ?>
            </div>
            <div class="fixed border p-4 h-fit left-36">
            <?php $player2->toString(); ?>
            </div>
        </div>
        <?php fight($player1, $player2); ?>
    </body>
</html>
