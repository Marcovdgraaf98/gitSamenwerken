<?php

require_once 'config.php';

$id = htmlentities($_POST["id"], ENT_QUOTES);
$firstname = htmlentities($_POST["first_name"], ENT_QUOTES);
$lastname = htmlentities($_POST["last_name"], ENT_QUOTES);
$birthdate = htmlentities($_POST["birth_date"], ENT_QUOTES);
$gender = htmlentities($_POST["gender"], ENT_QUOTES);
$membersince = htmlentities($_POST["member_since"], ENT_QUOTES);


$query = "UPDATE leden
SET
birth_date = '$birthdate',
first_name = '$firstname',
last_name = '$lastname',
gender = '$gender',
member_since = '$membersince'
WHERE id = $id";



if (mysqli_query($mysqli, $query)) {

}
