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
    //$numHotels = count($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lista Hotel</title>
</head>
<body>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $numHotels = count($hotels); // count() tiene conto del numero di lementi all'interno dell'array senza di esso non funzionerebbe
                    for ($i = 0; $i < $numHotels; $i++) {
                        echo "<tr>";
                        echo "<td>{$hotels[$i]['name']}</td>";
                        echo "<td>{$hotels[$i]['description']}</td>";
                        echo "<td>" . §($hotels[$i]['parking'] ? 'Disponibile' : 'Non disponibile') . "</td>"; // se parking è true ritorna disponibile altrimenti non disponibile
                        echo "<td>{$hotels[$i]['vote']}</td>";
                        echo "<td>{$hotels[$i]['distance_to_center']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>
