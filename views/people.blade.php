<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav>
    <li><a href="tasks">Tasques</a></li>
    <li><a href="lessons">Lessons</a></li>
    <li><a href="people">People</a></li>
    <li><a href="contact">Contacte</a></li>
    <li><a href="about">Sobre nosaltres</a></li>
</nav>
<h1>Persones</h1>
<p>Les persones de la base de dades son:</p>
<br>
<ul>
<?php foreach ($people as $person) :?>
    <li>
       <?= $person->name; ?> <?= $person->DNI; ?>

    </li>
    <?php endforeach;?>
</ul>


</body>
</html>