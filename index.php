<?php
require_once 'classes/pdo.php';
$nom = "Aristant";
$myPdo = new MyPDO();
if($myPdo->resultat != null) {
    foreach($myPdo->resultat as $item) {  
        echo "<br>". $item->nom."  ".$item->prenom."<br>";
    }
}

echo "Hello $nom";

?>