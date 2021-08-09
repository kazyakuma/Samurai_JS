<?php
/*
for($i = 1; $i <= 10; $i++){
    print("hello"."\n");
}

$animals = ["dog", "cat", "bird"];
foreach($animals as $animal){
    print($animal."\n");
}

*/

/*演習*/
for($i = 1; $i <=30; $i++){
    if($i % 3 == 0 && $i % 5 != 0){
        print("fizz"."\n");
    }
    if($i % 5 == 0 && $i % 3 != 0){
        print("Buzz"."\n");
    }
    if($i % 5 == 0 && $i % 3 == 0){
        print("fizzBuzz"."\n");
    }
    else{
        print($i."\n");
    }
}

?>