<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->

<?php 
    $numbers_array = [];

    while(count($numbers_array) < 15) {
        $casual_number = rand(1, 100);
        if(!in_array($casual_number, $numbers_array)) {
            $numbers_array[] = $casual_number;
        }
    }
?>