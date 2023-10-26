<?php
function test_odd($var)
  {
  return($var & 1);
  }

$a=array(1,3,2,3,4);
print_r(array_filter($a,"test_odd"));
?>