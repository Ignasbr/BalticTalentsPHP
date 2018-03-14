<?php
$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

$page = max([1, $_GET ['page']]);
$limit = 10;
$offset = ($page - 1) * $limit;
$number = $_GET['number'];

if (!empty($_GET['edit'])) {
    header('Location: ../pamok10/taisyti.php?id=' .  $_GET['edit'] );
    exit;
} elseif (!empty($_GET['delete'])) {
    $id = $_GET['delete'];
    $record = $dbh->prepare('DELETE FROM radars WHERE id = :id');
    $record->bindParam(':id', $id);
    $record->execute();
}



foreach ($dbh->query('SELECT * from radars WHERE number like \'%' . $number . '%\' LIMIT 10 OFFSET ' . $offset) as $row) {
    $automobiliai[] = $row;
}
?>

<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <h2>"Radars" duomenu baze</h2>

    <a type="button" href="visi.php" class="btn btn-info col-4">Visi automobiliai</a>
    <a type="button" href="period.php" class="btn btn-info col-4">Filtruoti pagal data</a>


    <div class="col-sm-6 col-sm-offset-3">
        <div id="imaginary_container">
            <div class="input-group stylish-input-group">
                <input type="text" class="form-control"  placeholder="Search" >
                <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
            </div>
        </div>
    </div>

    <form>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Number</th>
                <th>Distance</th>
                <th>Time</th>
                <th>Edit</th>
                <th>Delete</th>

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
                    <td>
                        <button type=“submit" class="btn btn-warning" name="edit" value="<?= $automobilis['id'] ?>">
                            Edit
                        </button>
                    </td>
                    <td>
                        <button type=“submit" class="btn btn-danger" name="delete" value="<?= $automobilis['id'] ?>">
                            Trinti
                        </button>
                    </td>
                </tr>
            <?php }; ?>
            </tbody>
        </table>
    </form>
</div>

<div class="col-12 text-center">
    <button type="button" class="btn btn-primary " onclick="window.location.href='?page=<?php echo $page - 1 ?>'">
        Atgal
    </button>
    <button type="button" class="btn btn-primary " onclick="window.location.href='?page=<?php echo $page + 1 ?>'">
        Pirmyn
    </button>
</div>

</body>
</html>
