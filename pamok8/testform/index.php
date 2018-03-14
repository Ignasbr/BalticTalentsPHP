
<form method="post">
 <p>Greičio fiksavimo data <input type="text" name="date" /></p>
 <p>Automobilio numeris <input type="text" name="number" /></p>
 <p>Nuvažiuotas atstumas metrais <input type="text" name="distance" /></p>
 <p>Sugaištas laikas sekundėmis <input type="text" name="time" /></p>
 <p><input type="submit" /></p>
</form>

Greičio fiksavimo data <?php echo ($_POST['date']); ?> <br>
Automobilio numeris <?php echo $_POST['number']; ?> <br>
Nuvažiuotas atstumas metrais <?php echo ($_POST['distance']); ?> <br>
Sugaištas laikas sekundėmis <?php echo ($_POST['time']); ?>

<?php

$dbh = new PDO('mysql:host=localhost;dbname=radars', 'root', 'root');
$autoDB = $dbh->prepare('INSERT INTO radars (date, number, distance, time)VALUES (:date , :number, :distance, :time);');

$autoDB->bindParam(':date' ,$_POST['date']);
$autoDB->bindParam(':number' ,$_POST['number']);
$autoDB->bindParam(':distance' ,$_POST['distance']);
$autoDB->bindParam(':time' ,$_POST['time']);

$autoDB->execute();