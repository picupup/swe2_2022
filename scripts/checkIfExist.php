<?php
function checkIfExist($array, $datenbankVerbindung){
    // Sucht nach selber Adresse wie angegeben
    // mysqli_affected_rows zählt, wie viele Zeilen gefunden wurden
    // Wenn 0 Zeilen gefunden wurde, kann die neue Adresse angelegt werden, andernfalls wird die ID der vorhandenen Adresse gespeichert.
      $sql1 = "SELECT * FROM itc_adresse WHERE strasse='$array[strasse]' and hausnr='$array[hausnummer]' and plz='$array[postleitzahl]' and ort='$array[ort]'";
      $result = mysqli_query($datenbankVerbindung, $sql1);
      $affected = mysqli_affected_rows($datenbankVerbindung);
      
      if($affected == 0){
          $datenbankVerbindung -> query("INSERT INTO itc_adresse(strasse, hausnr, plz, ort) VALUES ('$array[strasse]', '$array[hausnummer]', '$array[postleitzahl]', '$array[ort]')");
          $adressId = mysqli_insert_id($datenbankVerbindung);
      } else{
          while($row = mysqli_fetch_assoc($result)){
            $adressId = $row['id'];
          } 
      }

    // Nachdem geprüft wurde, ob der Kunde bereits im System ist, wird der Kunde angelegt und mit der vorher ermittelten Adress-ID versehen
    // mysqli_affected_rows zählt, wie viele Zeilen gefunden wurden

      $sql2 = "SELECT * FROM itc_kunden WHERE vorname='$array[vorname]' and nachname='$array[name]' and gbdatum='$array[geburtsdatum]'";
      $result2 = mysqli_query($datenbankVerbindung, $sql2);
      $affected2 = mysqli_affected_rows($datenbankVerbindung);

      if($affected2 == 0){
        $datenbankVerbindung -> query("INSERT INTO itc_kunden(vorname, nachname, geschlecht, gbdatum, art, adresse) VALUES ('$array[vorname]', '$array[name]', '$array[geschlecht]', '$array[geburtsdatum]', '$array[privatGesch]', '$adressId')"); 
        $kundenId = mysqli_insert_id($datenbankVerbindung);
      } else {
        echo "Sie kennen wir schon!"."<br><br>";
        while($row = mysqli_fetch_assoc($result2)){
          $kundenId = $row['id'];
        } 
      }
      return array($kundenId, $adressId);
    }
    ?>