<?php
class Movie{
    public $nome;
    public $durata;
    public $type;
    public $regista;

    public function __construct($nome,$durata,$type,$regista,)
    {
        $this->nome = $nome;
        $this->setDurata($durata);
        $this->type = $type;
        $this->regista = $regista;

    }

    public function setDurata($durata)
    {
        if (is_integer($durata) && $durata >= 0) {
			$this->durata = $durata;
		}
		return $durata;
    }
}


$Simpson = new Movie('Simpson', 120, 'cartone', 'Serena Dont');
$Avatar = new Movie('Avatar', 150, 'fantascienza', 'Tom Derk');

echo 


var_dump($Simpson);
var_dump($Avatar);

?>