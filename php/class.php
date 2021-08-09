<?php

class Car{
    static $class_name = "Car";
    
    function init(){
        $this -> name = "";
    }
    
    public function show(){
        print($this -> name."\n");
    }
}

#Carのインスタンス作成
$car = new Car();
#Carのインスタンス変数nameにセダンという文字列を格納
$car -> name = "セダン";
#Carのメソッドであるshow()を実行する
$car -> show();
#Car暮らす内にあるクラス変数$class_nameをターミナルに表示
print(Car:: $class_name);

?>