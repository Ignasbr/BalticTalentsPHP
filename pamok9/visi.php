<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

foreach ($dbh->query('SELECT number, count(1) AS kiekis, MAX(distance/time*3600) AS max_greitis FROM radars GROUP BY number') as $row) {
    $automobiliai[] = $row;
}

?>

<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <h2>Visi automobiliai esantys "Radars" duomenu bazeje</h2>

    <form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Kiekis</th>
                <th>Max greitis</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($automobiliai as $automobilis) { ?>
                <tr>
                    <td><?= $automobilis['number'] ?></td>
                    <td><?= $automobilis['kiekis'] ?></td>
                    <td><?= $automobilis['max_greitis'] ?></td>

                </tr>
            <?php }; ?>
            </tbody>
        </table>
    </form>
</div>

<div class="col-12 text-center">
    <a type="button" href="pamok9.php" class="btn btn-primary">
        Atgal
    </a>
</div>

</body>
</html>
