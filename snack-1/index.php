<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
    $basketMatches = [
        [
            'homeTeam' => 'Trieste',
            'visitingTeam' => 'Venezia',
            'homeTeamScore' => '113',
            'visitingTeamScore' => '117'
        ],
        [
            'homeTeam' => 'Pesaro',
            'visitingTeam' => 'rimini',
            'homeTeamScore' => '105',
            'visitingTeamScore' => '114'
        ],
        [
            'homeTeam' => 'Lecce',
            'visitingTeam' => 'Pescara',
            'homeTeamScore' => '91',
            'visitingTeamScore' => '113'
        ]
        ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-1</title>
</head>
<body>
    <main>

        <h1>Risultati partite di basket</h1>
        <?php for ( $i = 0; $i < count($basketMatches); $i++ ) {?>
            <div>

                <!-- Matches -->
                <h3>

                    <!-- Basket Teams -->
                    <span>
                        <?php echo $basketMatches[$i]['homeTeam']; ?> - <?php echo $basketMatches[$i]['visitingTeam']; ?>
                    </span>
                    
                    <span> | </span>

                    <!-- Score -->
                    <span>
                        <?php echo $basketMatches[$i]['homeTeamScore']; ?>-<?php echo $basketMatches[$i]['visitingTeamScore']; ?>
                    </span>
                </h3>

            </div>
        <?php } ?>
        
    </main>
</body>
</html>