<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{text-align: center;}

</style>
<body>
<?php
class personnage{

    public $nom;
    public $prenom;
    public $age;
    public $sexe;

function données(){
    
    $nom = $this->nom;
    $prenom = $this->prenom;
    $age = $this->age;
    $sexe = $this->sexe;

    echo "<div><h5>$nom</h5><h5>$prenom</h5><h5>$age</h5><h5>$sexe</h5></div>" ;
}
}















?>
</body>
</html>

