<?php
// lees het config-bestand
require_once 'config.php';

$firstname = htmlentities($_POST["first_name"], ENT_QUOTES);
$lastname = htmlentities($_POST["last_name"], ENT_QUOTES);
$birthdate = htmlentities($_POST["birth_date"], ENT_QUOTES);
$gender = htmlentities($_POST["gender"], ENT_QUOTES);
$membersince = htmlentities($_POST["member_since"], ENT_QUOTES);

$result = mysqli_query($mysqli, "INSERT INTO leden (first_name, last_name, birth_date, gender, member_since) 
VALUES ('$firstname', '$lastname', '$birthdate', '$gender', '$membersince')");