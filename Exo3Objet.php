<?php
    class personnage{
        Private $_Pseudo;
        Private $_Vie;
        public function __construct($newVie,$pseudo){
            $this->_Pseudo=$pseudo;
            $this->_Vie=$newVie;
        }
        public function stat(){
            echo "Je m'appelle'.$this->_Pseudo.' et j'ai '.$this->_Vie.'";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $laVie=250;
        $perso1 = newPersonnage($laVie,"Saucisse");
        $perso1->stat();
    ?>
</body>
</html>