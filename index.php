<?php
$par = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci quae culpa ipsam necessitatibus impedit dolorum dolorem quisquam quos porro iure sequi qui suscipit ratione, consectetur voluptatibus enim in blanditiis nisi?";
$lenPar = strlen($par);
$badword = $_GET['bad'];
$newPar = str_replace($badword, "***", $par);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <p><?= $par ?></p>
    <h2>Lunghezza paragrafo: <?= $lenPar ?></h2>
    <h3>Parola da censurare: <?= $badword ?></h3>
    <h1>Paragrafo censurato:</h1>
    <p><?= $newPar ?></p>
</body>

</html>