<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>hotel</title>
</head>
<body>
    <h1>Php hotel</h1>
    <div>
        <form method="get">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="parking" id="ParkingYes">
                <label class="form-check-label" for="ParkingYes">
                    si
                </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

    <div>
            <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <?php
            for( $i = 0; $i < count($hotels ); $i++ ) {
                $parkingAvailable = true;
                if(isset($_GET['parking'])&& $_GET['parking']==1 && $hotels[$i]['parking'] ==false){
                    $parkingAvailable = false;
                }
                if (!$parkingAvailable) {
                    continue;
                }
            ?>
            <tbody>
            <tr>
            <th scope="row"><?php echo $i+1; ?></th>
            <td><?php echo $hotels[ $i ]['name']; ?></td>
            <td><?php echo $hotels[ $i ]['description']; ?></td>
            <td><?php echo $hotels[ $i ]['parking'] ? 'Yes' : 'No'; ?></td>
            <td><?php echo $hotels[ $i ]['vote']; ?></td>
            <td><?php echo $hotels[ $i ]['distance_to_center']; ?></td>
            </tr>
        </tbody>
            <?php
            }
            ?>
        </table>
    </div>

   
</body>
</html>