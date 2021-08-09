<?php

$file_list = [];

function addlist($fileName){
    global $file_list;
    $add = $fileName. ".php";
    array_push($file_list, $add);
}

addlist("function");
var_dump($file_list);

addlist("hello");
var_dump($file_list);

?>