<?php
require_once 'database.php'; 
 class MyPDO {
    private $serveur;
    private $baseDeDonnees;
    private $utilisateur;
    private $motDePasse;
    private $db;
    public $resultat;

    public function __construct($req) {
    $this->serveur = 'localhost'; // Généralement 'localhost' pour un serveur local
    $this->baseDeDonnees = 'mycompagny';
    $this->utilisateur = 'root';
    $this->motDePasse = '';
    $this->db = new DataBase($this->serveur, $this->baseDeDonnees, $this->utilisateur, $this->motDePasse);
    $this->resultat = $this->db->select($req);
    }
     
}     

?>