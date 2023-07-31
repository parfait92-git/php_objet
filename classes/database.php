<?php 


class DataBase {

    private $bdd;
    public function __construct($serveur, $baseDeDonnees, $utilisateur, $motDePasse) {
        try {
            $this->bdd =  new PDO("mysql:host=$serveur;dbname=$baseDeDonnees", $utilisateur, $motDePasse);
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion reussi";
        } catch (\Throwable $th) {
            echo "Erreur de connection: ".$th->getmessage();
        }
    }

    public function select($requete) {
        try {
            $stmt = $this->bdd->query($requete);
            $stmt->execute();
            // return $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        } catch (PDOException $e) {
            echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
        }
    }

}


?>