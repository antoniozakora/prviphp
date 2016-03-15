<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8">
</head>

<body>
<h1>Prvi PHP</h1>



<?php
echo('Vaše ime: ' . htmlspecialchars($_POST['ime']));

$select = '';
$rezultat = $_POST['broj1'] + $_POST['broj2'] + $_POST['broj3'];
echo('<br>' . $rezultat);
?>

<p>
    Ovo je odlomak
</p>
</body>
</html>