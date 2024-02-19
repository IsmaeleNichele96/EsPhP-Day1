<?php

// -Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

// $numeri = [1,2,5,9,10,6];
// $somma = 0;
// $counter = 0;

// foreach($numeri as $numero){
//     if($numero % 2 == 0){
//         $somma = $numero + $somma;
//         $counter++;
//     }
// };

// echo $somma / $counter;


// -Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
// $users = [ ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'], ];

// $users = [
//     ['name' => 'Ismaele', 'surname' => 'Nichele', 'gender' => 'M'],
//     ['name' => 'Elvis', 'surname' => 'Ciubotaru', 'gender' => 'M'],
//     ['name' => 'Martina', 'surname' => 'Petucco', 'gender' => 'F']
// ];

// foreach($users as $user){
//     if($user['gender'] === 'M'){
//         echo 'Buongiorno sig '. $user['name']. ' '. $user['surname'] . "\n";
//     }else{
//         echo 'Buongiorno sig.na '. $user['name']. ' ' . $user['surname']. "\n";
//     }
// };


// 

// **ESERCIZI PHP 1**

// -Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".



// for ($i=1; $i <= 100; $i++){
//     $counter = "";
    
//     if ($i % 3 == 0) {
//         $counter = "PHP";
        
//     } else if ($i % 5 == 0){
//         $counter = "Javascript";
        
//     }else if($i % 5 == 0 && $i % 3 == 0){
//         $counter = "Hacademy";
        
//     }
//         echo $counter . "\n";

// }


for ($numero = 1; $numero <= 100; $numero++) {
    if ($numero % 3 == 0 && $numero % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($numero % 3 == 0) {
        echo "PHP\n"; 
    } elseif ($numero % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $numero . "\n"; 
    }
}
?>