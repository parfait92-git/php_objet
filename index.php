<?php
require_once "api/listClient.php";
$apiClient = new ApiListClient();
$data = json_decode($apiClient->run(), true);
$arr = array();
foreach ($data as $key => $value) {
    for($i=0; $i < count($value); $i++) {
        $arr = array(
            "nom" => $value[$i]["nom"],
            "prenom" => $value[$i]["prenom"]
        );
        echo "<br>" . $value[$i]["nom"] . "<br>";
    }
    var_dump($arr);
    
}

?>