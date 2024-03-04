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
if  (isset($_POST['submit'])) {
  extract($_POST);

  include 'db_connect.php';

  if ($conn) {
    $sql = "INSERT INTO medikamenten_daten
      (medikamenten_name, 
      medikamenten_beschreibung, 
      medikamenten_einnahme, 
      medikamenten_preis) VALUES 
      ('$medikamenten_name', '$medikamenten_beschreibung', '$medikamenten_einnahme', '$medikamenten_preis')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "<h1>Neues Medikament zur Liste Hinzugefügt ✅</h1>";
    } else {
      echo "<br><h2>Fehler beim Hinzufügen des neuen Patienten in die Datenbank!</h2>";
    }
  }
}
?>
<p>weitere :</p>
<div class="menu_item">
    <a href="db_medikamenten_liste.php">medikamenten Liste</a>
</div>
<div class="menu_item">
    <a href="db_medikamenten_neu.php">medikamenten +</a>
</div>

</section>

</body>
</html>

