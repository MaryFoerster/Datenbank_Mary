<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'head.php'
  ?>
  <title>Neuer Patient</title>
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
    $sql = "INSERT INTO wda_arzt_kunden
      (kunden_vorname, 
      kunden_nachname, 
      kunden_ort, 
      kunden_strasse, 
      kunden_telefon,
      kunden_email) VALUES 
      ('$kunden_vorname', '$kunden_nachname', '$kunden_ort', '$kunden_strasse', '$kunden_telefon', '$kunden_email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
      echo "<h1>Neuer Patient wurde in der Datenbank erfasst ✅</h1>";
    } else {
      echo "<br><h2>Fehler beim Hinzufügen des neuen Patienten in die Datenbank‼️</h2>";
    }
  }
}
?>
<p>weitere :</p>
<div class="menu_item">
    <a href="db_patienten_liste.php">Patienten Liste</a>
</div>
<div class="menu_item">
    <a href="db_patienten_neu.php">Patienten +</a>
</div>


</section>

</body>
</html>

