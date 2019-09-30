<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>les functions PHP</title>
</head>
<body>


    <h1>Les fonctions en PHP</h1>

    <?php


$nb01 = 3;
$nb02 = 3;



    function ico($nb01,$nb02){
        if($nb01 > $nb02){
            echo "Le premier nombre est plus grand.";
        }
        else if($nb01<$nb02){
            echo "Le premier nombre est plus petit.";
        }
        else{
            echo "les deux nombre sont identique";
        }
    }


ico($nb01,$nb02);
echo "<br><br>";
$nom= "Simpson";
$prenom = "Marjorie";
$age = 24;



function carte($nom,$prenom,$age){
    echo "Bonjour $nom $prenom, tu as $age ans.";
}

carte($nom,$prenom,$age);


    ?>
</body>
</html>