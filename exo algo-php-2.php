
//************************** PHP 2******************************//
<br>
<br>
//exo 1 
<br>
<br>
<?php 
$texte="Mon texte en paramètre ";
// $couleur=phpdbg_color($texte, $red);

function convertirMajRouge($texte) {
    $texte=str_replace('è', 'e',$texte);
    $texte = strtoupper($texte); 
    echo "<p style='color: red'>$texte</p>";
};
convertirMajRouge($texte);
?>
<br>
<br>
//exo 2 
<br>
<br>
<?php
$capitales=array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
);
function  afficherTableHTML($array){
    echo "<table border = 1 > <th>Pays</th><th>Capital</th>";
    foreach ($array as $pays => $value) {
        $pays=strtoupper($pays);
        echo "<tbody><td>$pays</td><td>$value</td></tr></tbody>";
    }
    echo "</table>";
}

$pays=ksort($capitales);
afficherTableHTML($capitales);
?>

<br>
<br>
//exo 3
<br>
<br>
<?php

$link_adresse ="https://elan-formation.eu/accueil";
echo "<a href ='$link_adresse' >Site Elan</a>";
?>
<br>
<br>
//exo 4
<br>
<br>
<?php
$capitales=array(
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome",
    "Espagne" => "Madrid"
);

$link_adresse = "https://fr.wikipedia.org/wiki/";
function  afficherTableHTML2($array){
    echo "<table border = 1 > <th>Pays</th><th>Capital</th><th>Lien wiki</th>";
    foreach ($array as $pays => $value) {
        $pays=strtoupper($pays);
        echo "<tbody><tr><td>$pays</td><td>$value</td><td><a href ='https://fr.wikipedia.org/wiki/$value'>Lien</a></td></tr></tbody>";
    }

    echo "</table>";
}

$pays=ksort($capitales);
afficherTableHTML2($capitales);
?>

<br>
<br>
//exo 5
<br>
<br>
<?php
$nomsInput = array("Nom","Prénom","Ville");
function afficherInput($form){
    echo "<form";
    foreach($form as $value){
      echo "<p>$value<br><input type='text'</p>";
    }
    echo "<p><input type='submit' value='OK'></p></form>" ; 
}
afficherInput($nomsInput);
?>
<br>
<br>
//exo 6
<br>
<br>
<?php

$denomination = array("Monsieur","Madame","Mademoiselle");
function alimenterListeDeroulante($element){
    echo "<select name= dénomination>";
    foreach($element as $value){
    echo "<option valeur=$value<br>>$value</option>";
    }
    echo "</select>";
}

alimenterListeDeroulante($denomination);
?>
<br>
<br>
//exo 7
<br>
<br>
<?php

$choix=[
    "choix1" =>'',
    "choix2"=>'checked',
    "choix3" =>'',
];

function caseACocher($array){
    echo "<form>";
         foreach ($array as $key => $value ){
            echo "<input type='checkbox' ".$value.">$key<br>";
        }
       echo "</form>" ;
}
caseACocher($choix);
?>
<br>
<br>
//exo 8
<br>
<br>
<?php
$image="http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($n){   
    for ($i=1; $i <=4 ; $i++) { 
        echo "<img src=$n>";
    }
};
repeterImage($image);
?>

<br>
<br>
//exo 9
<br>
<br>
<?php
$denomination=[
    "Masculin"=>"Monsieur",
    "Féminin"=>"Madame",
    "Autre"=>"Mademoiselle"
];

function chooseRadio($array){
echo "<form>";
    foreach( $array as $key=>$value){
echo "<input type=radio value='.$value.'>$key<br>";
    }
echo "</form>";
}
chooseRadio($denomination);
?>

<br>
<br>
//exo 10
<br>
<br>
<?php
$info = array("Nom","Prénom","Adresse-mails","Ville","Sexe");
$metier = array( "Développeur Logiciel", "Designer web","Intégrateur" ,"Chef de projet");
function formulaire($form,$job){
    echo "<form";
    foreach($form as $value){
      echo "<p>$value<br><input type='text'</p><br></form>";
    }
    echo "<select name= dénomination>";
    foreach($job as $value){
    echo "<option valeur=$value<br>$value</option>";
    }
    echo "<p><input type='submit' value='OK'><br></p></select>";
} 
formulaire($info,$metier);

?>
<br>
<br>
//exo 11
<br>
<br>
<?php
$a=new DateTime();
function formaterDateFr($dates){
setlocale (LC_TIME, 'fr_FR','French');

}
formaterDateFr($a);
?>

<br>
<br>
//exo 12
<br>
<br>
<?php
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
function allEchoArray($array){
    if(is_array($array)){
    foreach($array as  $value){
            echo var_dump($value)."<br>";            
        }
    }
}            
allEchoArray($tableauValeurs);
?>

<br>
<br>
//exo 15
<br>
<br>
<?php
$email="elan@elan-formation.fr";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est valide.";
} else {
    echo "L'adresse email '$email' est considérée comme invalide.";
}
?>
<br>
<br>
// exo 13 PHP 1 
<br>
<br>
<?php
Class Person {
    private $_name;
    private $_firstName;
    private $_dateOfBirth;


    public function __construct($name,$firstName,$dateOfBirth){
        $this -> _name = $name;
        $this -> _firstName = $firstName;
        $this -> _dateOfBirth = $dateOfBirth;
        }   
        public function getName(){
            return $this->_name;            
        }
        public function getFirstName(){
            return $this->_firstName;
        }
        public function getDateOfBirth(){
            return $this->_dateOfBirth;
        }
        public function CalculAge($dateOfBirth){
            $ActualDate= new DateTime() ;
            $dateOfBirthPerson= new DateTime ($dateOfBirth) ;
            $agePerson = $ActualDate->diff($dateOfBirthPerson);
            return ' à '.$agePerson->y . ' ans ';
        }
}
$person = new Person("LUCARELLI","Tim","1989-11-18");
$p2 = new Person ("DOE","Jhon","1975-03-28");
echo $person->getFirstName().' '.$person->getName().' '.$person->CalculAge($person->getDateOfBirth())."<br>";
echo $p2->getFirstName().' '.$p2->getName().' '.$p2->CalculAge($p2->getDateOfBirth());
?>
<br>
<br>
// exo 14 PHP 2 
<br>
<br>
<?php
Class Car {
    private $marque;
    private $modele;
    private $nbPortes;
    
    public function __construct($marque,$modele,$nbPortes,$vitesseActuelle=0,$etat=false){
        $this -> marque  = $marque;
        $this -> modele = $modele;
        $this -> nbPortes = $nbPortes;
        $this -> vitesseActuelle = $vitesseActuelle;
        $this -> etat = $etat;
    }
        public function getMarques(){
            return $this->marque;            
        }
        public function getModele(){
            return $this->modele;            
        }
        public function getNbPortes(){
            return $this->nbPortes;            
        }
        public function getVitesseActuelle(){
            return $this->vitesseActuelle=0;            
        }
        public function getEtat(){
            return $this->etat=false;
        }

            // public function setMarques($marques){
            //     return $this->$marques;            
            // }
            // public function setModele($modele){
            //     return $this->$modele;            
            // }
            // public function setNbPortes($nbPortes){
            //     return $this->$nbPortes;            
            // }}
            public function setEtat(){
                return $this ->etat;
            }
                public function demarrer(){
                   if ($this->etat == false){
                       $this->etat = true;
                    return "Le véhicule ".$this->marque." ".$this->modele." démarre";
                   }else{
                       return "il faut démarer le véhicule";
                   }
                }
                public function stop(){
                if ($this-> etat == true){
                    $this->etat = false;
                    return "Le véhicule ".$this->marque." ".$this->modele." est stoppée !";                                 
                } else {
                    "deja  stopée";
                }
            }
            public function accelerer($vitesseActuelle= null){
                if ($this->etat == true){
                    return "Le véhicule ".$this->marque." ".$this->modele." accélère de ".$this->vitesseActuelle=$this->vitesseActuelle+$vitesseActuelle;
                
                }   if ($this->etat == false){
                        return "Pour accélerer, il faut démarrer le véhicule ".$this->marque." ".$this->modele;
                    } 
            }    
            public function ralentir(){
                if ($this->vitesseActuelle>0){
                    $this->vitesseActuelle = 0;
                    return "La ".$this->marque." ".$this->modele." a ralentit au point mort";
                }
            }
            public function setVitesseActuelle(){
                return "La vitesse du véhicule ".$this->marque." ".$this->modele." est de ". $this->vitesseActuelle." km/h" ;            
            }
            public function getInfos(){

            }
}

$v1=new Car ("Poeugeot", "408",5);
echo $v1->demarrer()."<br>";
echo $v1->accelerer(50)."<br>";
echo $v1->setvitesseActuelle()."<br>";
echo $v1->ralentir()."<br>";
echo $v1->accelerer(50)."<br>";
echo $v1->setvitesseActuelle()."<br>";
echo $v1->getInfos()."<br>";
//var_dump($v1)."<br>";
$v2=new Car ("Citroen","C4",3); 
echo $v2->demarrer()."<br>";
echo $v2->stop()."<br>";
echo $v2->accelerer(20)."<br>";
echo $v2->setVitesseActuelle()."<br>";
//var_dump($v2)."<br>";


?>
<br>
<br>
