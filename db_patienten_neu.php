<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'head.php'
  ?>
  <title>Arztpraxis neue Patienten</title>
</head>
<body>

<div class="mobil">
      <h1>Keine Mobil ansicht Verfügbar</h1>
      <img src="img/logo.png" alt="">
</div>

<section>
<h6>Arzt Verwaltung</h6><img src="img/logo.png" alt="">

  <?php
  include 'arzt_menu.php'
  ?>

  <h2>Neuen Patienten erfassen</h2>


  <form method="POST" action="db_patient_insert.php">
          <div class="form_box">
            <div class="list_box">
                <label for="">Vorname</label>
                <input id="kunden_vorname" placeholder="Vorname" type="text" name="kunden_vorname" required="">
                <label for="">Nachname</label>
                <input id="kunden_nachname" placeholder="Nachname" type="text" name="kunden_nachname" required="">
                <label for="">Ort</label>
                <input id="kunden_ort" placeholder="Ort" type="text" name="kunden_ort" required="">
            </div>
            <div class="list_box">
                  <label for="">Straße</label>
                  <input id="kunden_strasse" placeholder="Straße" type="text" name="kunden_strasse" required="">
                  <label for="">Telefon</label>
                  <input id="kunden_telefon" placeholder="Telefon" type="text" name="kunden_telefon" required="">
                  <label for="">e-mail</label>
                  <input id="Kunden_email" placeholder="e-mail" type="email" name="Kunden_email" required="">
            </div>
          </div>
        <button class="subBtn" typ="submit" type="submit" name="submit" id="submit">Patient Hinzufügen</button>
  </form>
  </section>


</body>
</html>