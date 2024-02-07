

<?php
// ESERCIZIO 1 Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array
// $numbers = [12, 23, 56, 67, 44, 66, 70];

// $counter = 0;

// $totale = 0;

// foreach($numbers as $numbero) {
//     if($numbero % 2 == 0) {
//         $totale += $numbero;
//         $counter++;
//     }
// }
// echo $totale / $counter;

// ESERCIZIO 3 Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".



// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo"HACKADEMY\n";
//     } elseif ($i % 3 == 0) {
//         echo"PHP\n";
//     } elseif ($i % 5 == 0) {
//         echo"JAVASCRIPT\n";
//     } else {
//         echo $i . "\n";
//     }
// }

// ESERCIZIO 2 Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere es. 

// $users = 

// [ 

// 	['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'], 

// ];        output: "Buongiorno Sig. Davide Cariola"<?php

$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    // Aggiungi qui altri utenti per testare lo script
];

foreach ($users as $user) {
    $greeting = "Buongiorno";
    
    if ($user['gender'] == 'M') {
        $greeting .= " Sig.";
    } elseif ($user['gender'] == 'F') {
        $greeting .= " Sig.ra";
    }

    $greeting .= " " . $user['name'] . " " . $user['surname'];

    echo $greeting . "\n"; // Stampa il messaggio di saluto
}
print_r($greeting);
?>

