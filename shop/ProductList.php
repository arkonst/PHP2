<?php
include "Monitor.php";
include "Notebook.php";

$mon1 = new Monitor('Мониторы', 'img/mon1.jpg', 'Монитор Samsung', 'Отличный монитор', '13.3', '5000');
$mon2 = new Monitor('Мониторы', 'img/mon1.jpg', 'Монитор Philips', 'Просто изумительнейший монитор', '19', '10000');
$mon3 = new Monitor('Мониторы', 'img/mon1.jpg', 'Монитор Asus', 'Просто изумительнейший монитор', '23', '15000');
$mon4 = new Monitor('Мониторы', 'img/mon1.jpg', 'Монитор LG', 'Просто изумительнейший монитор', '26', '12000');
$note1 = new Notebook('Ноутбуки', 'img/note.jpg', 'Ноутбук Samsung', 'Отличный ноутбук', 'Intel', '5000');
$note2 = new Notebook('Ноутбуки', 'img/note.jpg', 'Ноутбук Philips', 'Просто изумительнейший ноутбук', 'AMD', '10000');
$note3 = new Notebook('Ноутбуки', 'img/note.jpg', 'Ноутбук Asus', 'Просто изумительнейший ноутбук', 'Intel', '15000');
$note4 = new Notebook('Ноутбуки', 'img/note.jpg', 'Ноутбук LG', 'Просто изумительнейший ноутбук', 'AMD', '12000');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<div class="product-list">
<?php

$mon1->addToList();
$mon2->addToList();
$mon3->addToList();
$mon4->addToList();
$note1->addToList();
$note2->addToList();
$note3->addToList();
$note4->addToList();

?>
</div>

</body>
</html>