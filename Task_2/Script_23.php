<?php
$a=45;
$b=75;
$c=15;
echo "<font color='blue' size=7><b>";
if($a>$b && $a>$c )
{
    echo "$a is largest Number.";
}
elseif($b>$a && $b>$c)
{
    echo "$b is largest Number.";
}
else
{
    echo "$c is largest Number.";
}
echo "</b></font>";
?>
