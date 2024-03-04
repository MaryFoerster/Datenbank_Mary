<!DOCTYPE html>
<html lang="en">
<head>
<?php
  include 'head.php'
  ?>
  <title>Arztpraxis Patienten</title>
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

    <h2>Patienten Liste</h2>


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
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Ort</th>
        <th>Straße</th>
        <th>Telefon</th>
        <th>E-mail</th>
      </tr>

  <?php

  include 'db_connect.php';
    if ($conn) {
        $sql = "SELECT * FROM wda_arzt_kunden;";

        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ( $row = mysqli_fetch_assoc($result)) {
            extract($row);

            echo '<tr>';
            echo '<td>' . $kunden_vorname . '</td>';
            echo '<td>' . $kunden_nachname . '</td>';
            echo '<td>' . $kunden_ort . '</td>';
            echo '<td>' . $kunden_strasse . '</td>';
            echo '<td>' . $kunden_telefon . '</td>';
            echo '<td>' . $Kunden_email . '</td>';
            echo '</tr>';
          }
        }
    }

  ?>
  </table>

  </section>

</body>
</html>