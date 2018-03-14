<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');

if (isset($_REQUEST['id'])) {

    $id = $_GET['id'];
    $record = $dbh->prepare('SELECT * FROM radars WHERE id = :id');
    $record->bindParam(':id', $id);
    $record->execute();

    if ($record = $record->fetch()) { ?>

        <html>
        <body>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <div class=container>
            <div class="col-5">

            <form action="taisyti.php?id=<?= $id ?>" method="post">
                <p class="h4 text-center mb-4">Taisyti automobilio duomenis kurio ID <?php echo $id ?></p>

                <label  class="grey-text">Date</label>
                <input type="text" value="<?= $record['date'] ?>" name="date" class="form-control">

                <br>

                <label class="grey-text">Number</label>
                <input type="text" value="<?= $record['number'] ?>" name="number" class="form-control">

                <br>

                <label for="defaultFormRegisterConfirmEx" class="grey-text">Distance</label>
                <input type="text" value="<?= $record['distance'] ?>" name="distance" class="form-control">

                <br>

                <label class="grey-text">Time</label>
                <input type="text" value="<?= $record['time'] ?>" name="time" class="form-control">

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-warning">Taisyti</button>
                </div>
            </form>
            </div>
        </div>


<!--        <h1>Taisyti automobilio duomenis kurio ID --><?php //echo $id ?><!-- </h1>-->
<!--        <form method="post">-->
<!--            <p>Greičio fiksavimo data <input type="text" name="date"/></p>-->
<!--            <p>Automobilio numeris <input type="text" name="number"/></p>-->
<!--            <p>Nuvažiuotas atstumas metrais <input type="text" name="distance"/></p>-->
<!--            <p>Sugaištas laikas sekundėmis <input type="text" name="time"/></p>-->
<!--            <button type="submit"> Taisyti</button>-->
<!--        </form>-->

        </body>
        </html>


        <?php
    } else {
        echo 'Tokio ID nera';
    }
}

?>


<?php

if (isset($_POST['date']) && isset($_POST['number']) && isset($_POST['distance']) && isset($_POST['time']) && isset($_GET['id'])) {

    $id = $_GET ['id'];


    $autoDB = $dbh->prepare('UPDATE radars SET date = :date, number = :number, distance = :distance, time = :time WHERE id = :id');

    $autoDB->bindParam(':date', $_POST['date']);
    $autoDB->bindParam(':number', $_POST['number']);
    $autoDB->bindParam(':distance', $_POST['distance']);
    $autoDB->bindParam(':time', $_POST['time']);
    $autoDB->bindParam(':id', $id);

    $autoDB->execute();

    header('Location: ../pamok9/pamok9.php');
    exit;

}


