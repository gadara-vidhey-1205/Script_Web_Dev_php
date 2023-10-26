<?php

$a=array("Apple","Banana","Orange");
echo array_shift($a);
echo"<br/>";
print_r($a);
echo"<br/>";


$b=array("a"=>"red","b"=>"green");
array_unshift($b,"blue");
echo"<br/>";

print_r($b);
?>