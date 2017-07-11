
<?php
 

 // Déclaration des classes, signatures des méthodes, en cours de travail sur l'héritage entre les classes

  class Fenetre
  {
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() { }
    public function lancerPartie() {}
    public function creerJoueur() {}
    public function rejouerPartie () {}

    }
     class TicTacToe
  {
    // Attributs
    public $fenetreDeJeu = new Fenetre();
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

     class ControleurDeJeu
  {
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() {}
    public checkVictoire() {}
    public ajouterMarque() {

    }
    private ajouterPoint() {

    }
    public play() {}

    }
    

      class PanneauGrille
  {
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

      class PanneauScore
  {
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

      class Joueur
  {
    // Attributs
    public $Nom;
    public $Score;
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

      class Partie
  {
    // Attributs
    public $plateauDeJeu = new Case(3,3);
    public int $x;
    public int $y;
    // Constantes
    // Méthodes 
    public function addAction() {}
    public function getAction() {}
    public function getActions() {}
    public function getGame() {}
    public function play() 
    public function __construct() {}
    }

       class Case
  {
    // Attributs
    public $contenu = new Marque();
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

     class Marque
  {
    // Attributs
    public var $character;
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

    class Croix {}
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

     class Rond {}
    // Attributs
    // Constantes
    // Méthodes  
    public function __construct() {}
    }

    class DataAccess implements ISavable {}
    // Attributs

    // Constantes
    // Méthodes  
    public function saveMove($nom, $game)
    public function __construct() {}
    //public function get_name(){

   interface ISavable {
   public function getGame();
}


   