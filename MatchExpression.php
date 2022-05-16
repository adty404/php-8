<?php

// $transportation = "";
// $result = "";

// switch ($transportation) {
//     case "Mobil":
//     case "Motor":
//     case "Bus":
//         $result = "Transportasi Darat";
//         break;
//     case "Kapal" :
//         $result = "Transportasi Laut";
//         break;
//     case "Pesawat":
//         $result = "Transportasi Udara";
//         break;
//     default:
//         $result = "Mohon maaf, Jenis transportasi yang anda masukan tidak dikenal.";
// }

// echo $result;

// -----------------------------------------------------------------------------------

// $transportation = "Kapal";
// $result = match($transportation){
//     "Mobil", "Motor", "Bus" => "Transportasi Darat",
//     "Kapal" => "Transportasi Laut",
//     "Pesawat" => "Transportasi Udara",
//     default => "Mohon maaf, Jenis transportasi yang anda masukan tidak dikenal.",
// };

// echo $result;

// -----------------------------------------------------------------------------------

// $total_baggage = 10;

// $result = match(true){
//     $total_baggage >= 50 => "Bagasi kena charge IDR 250.000",
//     $total_baggage >= 35 => "Bagasi kena charge IDR 230.000",
//     $total_baggage >= 30 => "Bagasi kena charge IDR 200.000",
//     $total_baggage >= 25 => "Bagasi kena charge IDR 100.000",
//     default => "Bagasi anda tidak kena charge",
// };

// echo $result;

// -----------------------------------------------------------------------------------

$word = "tokopedia";

$result = match(true){
    str_contains($word, "tokopedia") => "Anda memasukan kata kunci tokopedia",
    str_contains($word, "gojek") => "Anda memasukan kata kunci gojek",
    str_contains($word, "grab") => "Anda memasukan kata kunci grab",
    str_contains($word, "bukalapak") => "Anda memasukan kata kunci bukalapak",
    default => "Mohon maaf, kata kunci yang anda masukan tidak dikenal.",
};

echo $result;
