<?php

$cars=array("BMW","VOLVO","MUSTANG","GTR");

print_r($cars);

echo "<br/>";

if(in_array("MUSTANG",$cars))
{
	echo "Match Found!";
}
else
{
	echo "Match Not Found!";
}

?>