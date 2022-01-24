<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e 
una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti 
“Accesso negato”. -->

<?php 
    $user_name = $_GET["name"];
    $user_mail = $_GET["mail"];
    $user_age = $_GET["age"];

    var_dump($user_name);
    var_dump($user_mail);
    var_dump($user_age);

?>

