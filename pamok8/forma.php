<HTML>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 ">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Greicio fiksavimo data ir laikas</label>
                    <input name="date" type="text" class="form-control" id="formGroupExampleInput" placeholder="2016-12-31 23:15:25">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Automobilio numeris</label>
                    <input name="number" type="text" class="form-control" id="formGroupExampleInput2" placeholder="ABC 001">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nuvaziuotas atstumas (m)</label>
                    <input name="distance" type="text" class="form-control" id="formGroupExampleInput2" placeholder="5000 m">
                </div>
            <div class="form-group">
                    <label for="formGroupExampleInput2">Sugaistas laikas (s)</label>
                    <input name="time" type="text" class="form-control" id="formGroupExampleInput2" placeholder="100000 s">
                </div>
            </form>
            <button type="submit" class="btn btn-danger">Testi</button>
        </div>
    </div>
</div>
</div>
</body>
</HTML>

<?php

if (isset($_REQUEST['date'], $_REQUEST['number'], $_REQUEST['distance'], $_REQUEST['time'])){
    $_SESSION['automobiliai'][] = $_POST['number'];
}