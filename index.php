<!DOCTIPE html>
<html>
<head>
        <title>PRVI PHP</title>
        <meta charset="utf-8">
</head>

<body>
<h1>Zaky je najbolji</h1>
<form>
    Prvi broj: <br>
    <input type="text" name="broj1"><br>
    Drugi broj: <br>
    <input type="text" name="broj2"><br>
    <br>
    <input type="submit" values="Izračunaj">



</form>
<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, još ćemo dodati<br>');

    echo(date('d.m.Y.'));

    $rezultat = $_GET['broj1'] + $_GET['broj2'];
    echo('<br>Rezultat: ' . $rezultat);
?>
<p>
    Ovo je odlomak
</p>
</body>
</html>