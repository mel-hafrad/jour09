
<?php

$bdd = mysqli_connect("localhost", "root", "root", "jour08");
$requete = "SELECT nom, prenom, naissance FROM etudiants WHERE sexe <> 'Homme';"; 

$query = mysqli_query($bdd, $requete);

$i=0;

echo "<table>" ;
while ($result = mysqli_fetch_assoc($query)){
  if ($i == 0){
    foreach ($result as $key => $value){
      echo "<th>$key</th>";
    }
    $i++;
  }
  echo "<tr>";
  foreach ($result as $key => $value) {
    echo "<td>$value</td>";
  }
  echo "</tr>";
}

echo "</table>";

 ?>