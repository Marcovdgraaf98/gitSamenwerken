// Data uitlezen
$(document).ready(function() {
  toon();

  // Lid toevoegen
  $("#lid-toevoegen").click(function () {
    var gender = $("#gender").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
    var birth_date = $("#birth_date").val();
    var member_since = $("#member_since").val();
    $.ajax({
      url: "lid_nieuw_verwerk.php",
      method: "POST",
      data: {
        gender: gender,
        first_name: first_name,
        last_name: last_name,
        birth_date: birth_date,
        member_since: member_since
      }
    }).done(function () {
      toon();
      $("#gender").val('');
      $("#first_name").val('');
      $("#last_name").val('');
      $("#birth_date").val('');
      $("#member_since").val('');
    })
  });

  // Lid bewerken
  $(document).on("click", ".bewerken", function () {
    var id = $(this).data("id");
    var firstname = $(this).data("firstname");
    var lastname = $(this).data("lastname");
    var birthdate = $(this).data("birthdate");
    var gender = $(this).data("gender");
    var membersince = $(this).data("membersince");
    $("#modalBewerken-label").html(id);

    var output = "<form>";

    output += "<input id='id' name='id' type='hidden' value='" + id +"' disabled></p>";

    output += "<p><label for='first_name'>Voornaam:</label>";
    output += "<input id='firstname' name='firstname' type='text' value='" + firstname +"'></p>";

    output += "<p><label for='last_name'>Achternaam:</label>";
    output += "<input id='lastname' name='lastname' type='text' value='" + lastname +"'></p>";

    output += "<p><label for='birth_date'>Geboortedatum:</label>";
    output += "<input id='birthdate' name='birthdate' type='date' value='" + birthdate +"'></p>";

    output += "<p><label for='gender'>Geslacht (M/F):</label>";
    output += "<input id='gender1' name='gender1' type='text' value='" + gender +"'></p>";

    output += "<p><label for='member_since'>Lid sinds:</label>";
    output += "<input id='membersince' name='membersince' type='date' value='" + membersince +"'></p>";

    output += "</form>";

    $("#wijzigform").html(output);

  });

    $("#lid-bewerken").click(function () {
      var id = $("#id").val();
      var gender = $("#gender1").val();
      var first_name = $("#firstname").val();
      var last_name = $("#lastname").val();
      var birth_date = $("#birthdate").val();
      var member_since = $("#membersince").val();

        $.ajax({
          url: "lid_bewerk_verwerk.php",
          method: "POST",
          data: {
            id: id,
            gender: gender,
            first_name: first_name,
            last_name: last_name,
            birth_date: birth_date,
            member_since: member_since
          }
        })
            .done(function () {
                toon();
            });
      });
    // einde lid bewerken

  // Lid verwijderen
  $(document).on("click", ".verwijder", function () {
    var id = $(this).data("id");
    $("#modalVerwijderen-label").html(id);

    $(document).on("click", "#lid-verwijderen", function () {
      $.ajax({
        url: "lid_verwijder.php",
        method: "POST",
        data: {id: id}
      })
          .done(function () {
          $('.rij').remove();
          toon();
        });
      });
    });
});
// einde document.ready

  // Data uitlees functie
  function toon() {
    $.getJSON("ajax.php").done(function(data) {
      let tr = data;
      for (let i = 0; i < data.length; i++) {
        tr = $("<tr class='rij'>");
        tr.append("<td>" + data[i].id + "</td>");
        tr.append("<td>" + data[i].birth_date + "</td>");
        tr.append("<td>" + data[i].first_name + "</td>");
        tr.append("<td>" + data[i].last_name + "</td>");
        tr.append("<td>" + data[i].gender + "</td>");
        tr.append("<td>" + data[i].member_since + "</td>");
        tr.append("<td><button data-id='"+ data[i].id +"' data-firstname='" + data[i].first_name + "' data-lastname='" + data[i].last_name +  "' data-birthdate='" + data[i].birth_date + "' data-gender='" + data[i].gender + "' data-membersince='" + data[i].member_since + "' class='btn btn-primary bewerken' data-toggle='modal' data-target='#modalBewerken'>Bewerk</button></td>");
        tr.append("<td><button data-id='"+ data[i].id +"' class='btn btn-danger verwijder' data-toggle='modal' data-target='#modalVerwijderen'>Verwijder</button></td>");
        $("#toonLijst").append(tr);
      }
    });
  }


