<?php
require_once 'database.php';
 
 class MyPDO {
    private $serveur;
    private $baseDeDonnees;
    private $utilisateur;
    private $motDePasse;
    private $db;
    public $resultat;
    public function __construct() {
        $this->serveur = 'localhost'; // Généralement 'localhost' pour un serveur local
$this->baseDeDonnees = 'mycompany';
$this->utilisateur = 'root';
$this->motDePasse = '';
$this->db = new DataBase($this->serveur, $this->baseDeDonnees, $this->utilisateur, $this->motDePasse);
 $this->resultat = $this->db->select("SELECT * FROM clients");
}
    }
   

?>