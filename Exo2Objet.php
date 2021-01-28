<?php
    class personnage{
        Private $_Pseudo;
        Private $_Vie;
        public function __construct($newVie){
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
    $perso1 = newPersonnage();
    $perso1->stat();
    ?>
</body>
</html>