<?php

    $var = "stringa";
    $var = 10;
    $array = [55,2,44];

    $stringa2 = $var."qwerty";


//    if($var===10.0){
//
//    }
//    else
//        echo "no";
//
//    for($i=0;$i<10;$i++){
//        echo "<br>riga".$i;
//    }

    foreach($array as $riga){
        echo $chiave." ".$riga."<br />";
    }
    echo $array[2];

    function somma($valore1,$valore2){
        return $valore1+$valore2;
    }
    echo somma(10,20);

    class animale{        /**
         * @return string
         */
        public function getNome()
        {
            return strtoupper($this->nome);
        }

        /**
         * @param string $nome
         */
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        protected $nome = "";

        /**
         * @return mixed
         */
        public function getSpecie()
        {
            return $this->specie;
        }

        /**
         * @param mixed $specie
         */
        public function setSpecie($specie)
        {
            $this->specie = $specie;
        }
        public $specie;

        public function presentazione(){
            return "io sono ".$this->getNome()." della razza ".$this->getSpecie();
        }
    }


    $cane = new Animale();
    $cane->setNome("pippo");
    $cane->setSpecie("cane");

    echo $cane->presentazione();
    echo $cane->presentazione();
    echo $cane->presentazione();
