<?php

include_once "DbConfig.php";
include_once "Crud.php";

$data_array = [
    'sku' => '123',
    'nname' => 'focs',
    'price' => 12,
    'ttype' => 'kos',
    'size' => 'none',
    'height' => 'none',
    'width' => 'none',
    'llength' => '5ft',
    'wweight' => 'none',
];

$crud = new Crud();

//$crud->create($data_array,'user_table');

//$result = $crud->update('SELECT * from user_table');

//var_dump($result);

//$crud->update("UPDATE user_table SET sku = 15");

//$crud->delete("DELETE from user_table WHERE sku=15");