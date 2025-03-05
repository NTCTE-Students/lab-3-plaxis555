<?php

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}



$fruits2= array("lemon", "orange", "banana", "apple");
ksort($fruits2);
foreach ($fruits2 as $key=> $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

?>