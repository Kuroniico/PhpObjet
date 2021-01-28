<?php
    class Personnage{
        private $_Pseudo;
        private $_Vie;
        private $_Attaque;

        public function __construct($Vie,$Pseudo){
            $this->_Pseudo=$Pseudo;
            $this->_Vie=$Vie
        }
        public function Attaquer($PersoAttaque,$Attaque){
            echo "<p>".$this->getPseudo()." attaque ".$Attaque." de point de force sur ".$PersoAttaque->_Pseudo."</p>";
            $PersoAttaque->SePrendreDegat($Attaque);
            echo "<p>".$PersoAttaque->_Pseudo." a maintenant ".$PersoAttaque->getLaVie()."</p>";
        }
        public function SePrendreDegat($Attaque){
            $this->_Vie = $this->_Vie - $Attaque;
        }
        public function getPseudo(){
            return $this->_Pseudo;
        }
        public function getLaVie(){
            return $this->_Vie;
        }
    }
?>