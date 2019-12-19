<?php

include "config.php";
?>

<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <title>Ledenbeheer</title>
</head>

<body>
<div class="wrapper">
<h1>Ledenbeheer</h1>
<br>
    <!-- Modal button toevoegen -->
<button id="toevoegen" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalToevoegen">Lid toevoegen</button>
<br/><br/>
    <table class="table table-hover table-fixed" id="toonLijst">
        <tr class='tr thead-dark'>
        <th>ID</th>
        <th>Geboortedatum</th>
        <th>Naam</th>
        <th>Achternaam</th>
        <th>Geslacht</th>
        <th>Lid sinds</th>
        <th>Bewerken</th>
        <th>Verwijderen</th>
    </table>
    <!-- <Modal popup toevoegen -->
<div class="modal fade" id="modalToevoegen" tabindex="-1" role="dialog" aria-labelledby="modalToevoegen-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalToevoegen-label">Lid toevoegen</h5>
                <p id="errorTekst"></p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form>
                        <label>
                            <input type="radio" name="gender" id="gender" value="M" checked="checked"> Man</label>
                        <label>
                            <input type="radio" name="gender" id="gender" value="F">
                            Vrouw</label>

                    <p><label for="first_name">Voornaam:</label>
                        <input type="text" name="first_name" id="first_name" required="required"></p>

                    <p><label for="last_name">Achternaam:</label>
                        <input type="text" name="last_name" id="last_name" required="required"></p>

                    <p><label for="birth_date">Geboortedatum:</label>
                        <input type="date" name="birth_date"id="birth_date" required="required"></p>

                    <p><label for="member_since">Lid sinds:</label>
                        <input type="date"name="member_since" id="member_since" required="required"></p>
                        </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                <input id="lid-toevoegen" type="submit" value="Opslaan" data-dismiss="modal" class="btn btn-primary">
            </div>
        </div>
    </div>
    <!-- Einde modal -->
</div>

 <!-- <Modal popup verwijderen -->
 <div class="modal fade" id="modalVerwijderen" tabindex="-1" role="dialog" aria-labelledby="modalVerwijderen" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerwijderen-label">Lid verwijderen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Weet je zeker dat je dit lid wil verwijderen?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Terug</button>
                <input id="lid-verwijderen" type="submit" value="Verwijderen" data-dismiss="modal" class="btn btn-danger">
            </div>
        </div>
    </div>
    <!-- Einde modal -->
</div>

    <div class="modal fade" id="modalBewerken" tabindex="-1" role="dialog" aria-labelledby="modalBewerken" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalBewerken-label">Lid bewerken</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <p id="errorText"></p>
                <div id="wijzigform" class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <input id="lid-bewerken" data-dismiss="modal" type="submit" value="Opslaan" class="btn btn-primary">
                </div>
            </div>
        </div>
<!-- Einde wrapper -->
</div>