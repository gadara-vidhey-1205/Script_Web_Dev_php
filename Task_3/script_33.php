<?php

$a=array("FORD"=>"MUSTANG","LAMBORGHINI"=>"HURACAN");

print_r($a);

echo "<br/>";

if (array_key_exists("LAMBORGHINI",$a))
{
	echo " Key Exists!";
}
else
{
	echo "Key Not Exists!";
}

?>