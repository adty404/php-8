<?php

// PROPERTY
// class Word{
//     public float|string $data;
// }

// $get_word = new Word();
// echo $get_word->data = 'tipe string ini adalah kalimat';


// PARAMETER/ARGUMENT
// function funcTest(float|string|int $data){
//     // echo $data;
//     if(is_int($data)){
//         echo 'ini int';
//     }else if(is_string($data)){
//         echo 'ini string';
//     }else if(is_float($data)){
//         echo 'ini float';
//     }else {
//         echo 'tipe data yang anda masukkan tidak dikenali';
//     }
// }

// funcTest('string');

// RETURN VALUE
function funcTest(float|string|int $data): float|string|int {
    // echo $data;
    if(is_int($data)){
        return 10;
    }else if(is_string($data)){
        return 'ini adalah return string';
    }else if(is_float($data)){
        return 1.5;
    }
}

var_dump(funcTest('ini string'));
var_dump(funcTest(50));
var_dump(funcTest(12.5));
