<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'head.php'
  ?>
  <title>Medikamenten Liste</title>
</head>
<body>

<div class="mobil">
      <h1>Keine Mobil ansicht Verfügbar</h1>
      <img src="img/logo.png" alt="">
</div>

<section>
<h6>Arzt Verwaltung</h6><img src="img/logo.png" alt="">
  <?php
  include 'arzt_menu.php';
  ?>

    <h2>Medikamenten Liste</h2>

    <div class="search">
      <!-- Load icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- The form -->
      <form class="example" action="action_page.php">
        <input type="text" placeholder="Suche.." name="search"><button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>

  <table>
    <tr>
      <th>Name</th>
      <th>Beschreibung</th>
      <th>Einnahme</th>
      <th>Preis</th>
    </tr>


<?php

include 'db_connect.php';
  if ($conn) {
      $sql = "SELECT * FROM medikamenten_daten;";

      $result = mysqli_query($conn, $sql);

      if ($result) {
        while ( $row = mysqli_fetch_assoc($result)) {
          extract($row);

          echo '<tr>';
          echo '<td>' . $medikamenten_name . '</td>';
          echo '<td>' . $medikamenten_beschreibung . '</td>';
          echo '<td>' . $medikamenten_einnahme . '</td>';
          echo '<td>' . $medikamenten_preis . '</td>';
          echo '</tr>';
        }
      }
  }

?>
</table>
</section>

</body>
</html>