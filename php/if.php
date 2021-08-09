<?php 

/*演習1


function check($num){
if($num == 42){
    print("answer");
}
}

check(421);
*/

/*演習2*/

$even_num = [];
$odd_num = [];

function sort_number($num){
    global $even_num;
    global $odd_num;
    
    if($num %2 == 0){
        array_push($even_num, $num);
        print("even"."\n");
        var_dump($even_num);
    } else{
        array_push($odd_num, $num);
        print("odd"."\n");
        var_dump($odd_num);
    }
}

sort_number(3);

?>