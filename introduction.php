<?php
class Employe {

    public $nom;
    public $prenom;
    private $age;

    public function __construct($prenom, $nom, $age)
    {   
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
     
    }

    public function setAge() 
    {
        $this->age = $age; 
    
    } 

    public function getAge()
    {

        return $this->age;
    }

    public function presentation() {
        var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans");

    }




}

$employe1 = new Employe("Diallo","Seydina", 23);


$employe2 = new Employe("Malek", "Julien", 22);

$employe3 = new Employe("Diouf", "Fleur", 52);




$employe1->presentation();
$employe2->presentation();
$employe3->presentation();

