<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media 
dei voti di ogni alunno. -->

<?php 
    
    $students_array = [
        [
            'name' => 'Luca',
            'lastname' => 'Rossi',
            'votes' => [6, 5, 8]
        ],
        [
            'name' => 'Giovanni',
            'lastname' => 'Verdi',
            'votes' => [9, 6, 8]
        ],
        [
            'name' => 'Alessio',
            'lastname' => 'Bianchi',
            'votes' => [8, 4, 8]
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-6</title>
</head>
<body>
    <main>
        <h1>Studenti</h1>
        <?php for($i = 0; $i < count($students_array); $i++) { ?>
            <h3>
                <?php echo $students_array[$i]['name'] ?>
                <?php echo $students_array[$i]['lastname'] ?>
                <span>| Media:</span>

                <!-- Faccio la media dei voti -->
                <?php 
                    $vote_average = ( array_sum($students_array[$i]['votes']) ) / count($students_array[$i]['votes'])
                ?>

                <!-- Arrotondo e stampo la media dei voti -->
                <?php echo number_format( $vote_average, 1 ) ?>
                
            </h3>
        <?php } ?>
    </main>
</body>
</html>