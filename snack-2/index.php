<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e 
una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato”. -->

<?php 
    $user_name = $_GET["name"];
    $user_mail = $_GET["mail"];
    $user_age = $_GET["age"];

    // Verify User Name
    $verify_user_name = false;
    if(strlen($user_name) >= 3) {
        $verify_user_name = true;
    }

    // Verify User Mail
    $verify_user_mail = false;
    if(strpos($user_mail, '@') !== false && strpos($user_mail, '.') !== false) {
        $verify_user_mail = true;
    }

    // Verify User Age
    $verify_user_age = false;
    if(is_numeric($user_age)) {
        $verify_user_age = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-2</title>
</head>
<body>
    <main>

        <h1>Accedi</h1>
        <?php if( $verify_user_name && $verify_user_mail && $verify_user_age ) {?>
            <h2>ACCESSO RIUSCITO</h2>
        <?php } else {?>
            <h2>ACCESSO NEGATO</h2>
        <?php } ?>

        <h4>Instruction: ?name=YourName&mail=YourMail&age=YourAge</h4>

        
    </main>
</body>
</html>