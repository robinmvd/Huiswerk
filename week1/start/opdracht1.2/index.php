<?php
$hours = date('G');

//periode is nacht bij de uren
// 00, 01, 02, 03, 04, 05
if ($hours < 6)
{
    $period = 'nacht';
}
//periode is morgen bij de uren
//06, 07, 08, 09, 10, 11
elseif ($hours < 12)
{
    $period = 'morgen';
}
//periode is middag bij de uren
// 12, 13, 14, 15, 16, 17
elseif ( $hours < 18)
{
    $period = 'middag';
}
else
    //periode is avond bij de uren
    //18, 19, 20, 21, 22, 23
{
    $period = 'avond';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmeren 2 - Week 1 - Opdracht 1.2</title>
</head>
<body>
<h1>Opdracht 1.2</h1>
<hr/>

<h2>Begroeting op basis van het moment van de dag</h2>
<p>
    <?= 'Goede' . $period ?>
</p>
</body>
</html>
