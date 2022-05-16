<?php

// with integer
// function funcTest($box_one, $box_two, $box_three = 0, $box_four){
//     echo $box_one + $box_two * $box_three - $box_four;
// }

// return funcTest(box_four: 6, box_one: 1, box_two: 3);

// with string
function funcTest($box_one = "", $box_two = "ayam", $box_three = "", $box_four = "sapi"){
    echo $box_one .' '. $box_two .' '. $box_three .' '. $box_four;
}

return funcTest(box_three: 'kerbau', box_one: 'ikan');