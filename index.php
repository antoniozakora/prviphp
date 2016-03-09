<!DOCTIPE html>
<html>
<head>
        <title>PRVI PHP</title>
        <meta charset="utf-8">
</head>

<body>
<h1>Zaky je najbolji</h1>

<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, još ćemo dodati<br>');

    echo(date('d.m.Y.'));

    $ocjena = 5;
    echo('<br>Vaša ocjena je: ' . $ocjena);
    $nova_var = 166.8;
    echo('<br>' . $nova_var);
?>
<p>
    Ovo je odlomak
</p>
</body>
</html>