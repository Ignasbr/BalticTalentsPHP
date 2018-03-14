<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');


foreach ($dbh->query('SELECT a.id, a.date, a.number, a.distance, a.time, a.driverid, d.name, d.city FROM radars a LEFT JOIN drivers d ON a.driverid = d.id WHERE d.id is null AND a.date >= NOW() - INTERVAL 4 MONTH ') as $row) {
    $automobiliai[] = $row;
}
?>

<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">


    <form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Number</th>
                <th>Distance</th>
                <th>Time</th>
                <th>Driver Id</th>
                <th>Name</th>
                <th>City</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($automobiliai as $automobilis) { ?>
                <tr>
                    <td><?= $automobilis['id'] ?></td>
                    <td><?= $automobilis['date'] ?></td>
                    <td><?= $automobilis['number'] ?></td>
                    <td><?= $automobilis['distance'] ?></td>
                    <td><?= $automobilis['time'] ?></td>
                    <td><?= $automobilis['driverid'] ?></td>
                    <td><?= $automobilis['name'] ?></td>
                    <td><?= $automobilis['city'] ?></td>
                </tr>
            <?php }; ?>
            </tbody>
        </table>
    </form>
</div>

</body>
</html>
