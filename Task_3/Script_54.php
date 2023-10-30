<?php
$a = array(
  array(
    'id' => 001,
    'first_name' => 'Gadara',
    'last_name' => 'Vidhey',
  ),
  array(
    'id' => 002,
    'first_name' => 'Gautam',
    'last_name' => 'Rahul',
  ),
  array(
    'id' => 003,
    'first_name' => 'Jogi',
    'last_name' => 'Vatsal',
  )
);

$last_names = array_column($a, 'last_name', 'id');
print_r($last_names);
?>