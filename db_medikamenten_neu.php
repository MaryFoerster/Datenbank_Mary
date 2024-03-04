<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'head.php'
  ?>
  <title>Neue Medikamente</title>
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

  <h2>Neue Medikamente erfassen</h2>


  <form method="POST" action="db_medikamenten_insert.php">
       <div class="form_box">
            <div class="list_box">
              <label for="">Name</label>
              <input id="medikamenten_name" placeholder="Name" type="text" name="medikamenten_name" required="">
              <label for="">Beschreibung</label>
              <input id="medikamenten_beschreibung" placeholder="Beschreibung" type="text" name="medikamenten_beschreibung" required="">
              <label for="">Einnahme</label>
              <input id="medikamenten_einnahme" placeholder="Einnahme" type="text" name="medikamenten_einnahme" required="">
              <label for="">Preis</label>
              <input id="medikamenten_preis" placeholder="Preis" type="text" name="medikamenten_preis" required="">
            </div>
        </div>
              <button class="subBtn" typ="submit" type="submit" name="submit" id="submit">Medikament Hinzufügen</button>
  </form>

</section>

</body>
</html>