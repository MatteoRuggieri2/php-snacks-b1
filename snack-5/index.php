<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo 
gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    // Usare queste 2 variabili per rendere il codice sottostante più chiaro.
    $teachers = $db['teacher'];      
    $pm = $db['pm'];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <div class="wrapper">

            <!-- TEACHERS -->
            <div class="teachers">
                <?php for($i = 0; $i < count($db['teachers']); $i++) { ?>
                    <?php $this_teacher = $db['teachers'][$i]; ?>
                    <div>
                        <?php echo $this_teacher['name'] ?> <?php echo $this_teacher['lastname'] ?>
                    </div>
                <?php } ?>
            </div>

            <!-- PM -->
            <div class="pm">
                <?php for($i = 0; $i < count($db['pm']); $i++) { ?>
                    <?php $this_pm = $db['pm'][$i]; ?>
                    <div>
                        <?php echo $this_pm['name'] ?> <?php echo $this_pm['lastname'] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>