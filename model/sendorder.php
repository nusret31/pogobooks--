<?php


include '../controller/db_crud.php';

db_crud::connect();

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$ship = $_POST['ship'];
$pay = $_POST['pay'];


?>