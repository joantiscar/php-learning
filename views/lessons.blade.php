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

<h1>Lessons</h1>
<p>Les meves assignatures son:</p>
<br>
<ul>
<?php foreach ($lessons as $lesson) :?>
    <li>
                             <?= $lesson->name; ?>
           </li>
    <?php endforeach;?>
</ul>


</body>
</html>