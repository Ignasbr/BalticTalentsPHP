<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

$limit = 5;
$page = $_GET['page']??1;
$offset = ($page - 1) * $limit;


$from = $_GET['from']??null;
$to = $_GET['to']??null;



$record = $dbh->prepare('SELECT number, count(1) AS kiekis, MAX(distance/time*3600) AS max_greitis, MIN(distance/time*3600) AS min_greitis, AVG(distance/time*3600) AS vid_greitis FROM radars WHERE date >= :from  and date <= :to GROUP BY number LIMIT 5 OFFSET ' . $offset);
$record->bindParam(':from', $from);
$record->bindParam(':to', $to);
$record->execute();



?>


<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<div class=container>
    <div class="col-5">
        <form>

            <label class="grey-text">Nuo</label>
            <input type="date" value="<?= $from ?>"  name="from" class="form-control">

            <br>

            <label class="grey-text">iki</label>
            <input type="date" value="<?= $to ?>" name="to" class="form-control">

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-warning">Rodyti</button>
            </div>
        </form>
    </div>
</div>

<div class="container">
    <h2>"Radars" duomenu baze pagal pasirinkta data</h2>




    <form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Number</th>
                <th>Kiekis</th>
                <th>Max grietis</th>
                <th>Min grietis</th>
                <th>Vid grietis</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($record as $automobilis) { ?>
                <tr>
                    <td><?= $automobilis['number'] ?></td>
                    <td><?= $automobilis['kiekis'] ?></td>
                    <td><?= $automobilis['max_greitis'] ?></td>
                    <td><?= $automobilis['min_greitis'] ?></td>
                    <td><?= $automobilis['vid_greitis'] ?></td>

                </tr>
            <?php }; ?>
            </tbody>
        </table>
    </form>
</div>

<div class="col-12 text-center">
    <button type="button" class="btn btn-primary " onclick="window.location.href='?4<?php echo http_build_query(array_merge($_GET, ['page' => $page - 1])) ?>'">
        Atgal
    </button>
    <button type="button" class="btn btn-primary " onclick="window.location.href='?<?php echo http_build_query(array_merge($_GET, ['page' => $page + 1])) ?>'">
        Pirmyn
    </button>
</div>

</body>
</html>