<?php
// lees het config-bestand
require_once 'config.php';

// lees het ID uit de URL
$id = $_POST['id'];

// Verwijder het lid
$result = mysqli_query($mysqli, "DELETE FROM leden WHERE id = $id");

		