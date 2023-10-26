<?php

$integer=array("25","48","52","66","5","16","18","20");
sort($integer);
foreach($integer as $key=>$value)
{
	echo "integer[$key]=>$value";
	echo "<br/>";
}
?>