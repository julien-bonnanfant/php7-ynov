 <?php


 class voiture{
      public $vitesseMax = 300;
      public $hauteur = 1.20;
      public $longueur = 2;
      public $nbrdeportes = 5;
      public $degats = 0;
      public $positionX =0;
      public $positionY = 0;












      public function reculer(){
          $this->positionX-=10;
      }
      public function avancer(){
          $this->positionX+=10;
      }
      public function droite(){
           $this->positionY+=10;
      }
      public function gauche(){
          $this->positionY-=10;
      }
      public function accident(){
          $this->degats+=10;


      }
      public function derraper(){
}
      public function __construct(int $vitesseMax = 190){

      }

      }


$fordFiesta= New voiture();

$fordFiesta->avancer();
$fordFiesta->accident();
 ?>
