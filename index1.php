<!Doctype html>
<head>
<meta charset = "utf-8">
<meta  http-equiv = " X-UA-Compatible " content = " IE = edge " >
<meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >

</head>
<body>
<title> TEST PHP  </title >
    
    <h1> Les Variables</h1>
    <h2> exercice 1</h2>
    <p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix. Afficher son contenu. </p>
                <?php
                $nom = "MARCHOUD ";
                echo $nom
                ?>

    
    <h2> exercice 2</h2>
    <p>Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
    Attention age est de type entier. Acher leur contenu. </p>
                <?php
                    $prenom = 'LAILA ';
                $nom = "MARCHOUD ";
                $age = 43;
                $annee = "ans";
                echo $prenom,$nom,$age,$annee
                ?>


    <h2> exercice 3</h2>
    <p>Créer une variable «km» . L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3.
    Afficher son contenu. Changer sa valeur par 125. Afficher son contenu. </p>
                <?php
                $km = 1 ;
                echo  $km ;
                echo '<br/>';
                $km = 3 ;
                echo  $km ;
                echo '<br/>';
                $km = 125 ;
                echo  $km ;
                ?>


<h2> exercice 4</h2>
<p>Créer une variable de type string, une variable de type int, une variable de type float,
une variable de type booléan et les initialiser avec une valeur de votre choix.
Les afficher. </p>
                <?php
                $texte = 'gnagnagna';
                $chiffre = "100";
                $virgule = 43.5;
                $booleen = "true"; 
                echo $texte;
                echo '<br/>';
                echo  $chiffre;
                echo '<br/>';
                echo  $booleen;
                ?>
   
<h2> exercice 5 </h2>
<p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
Donner une valeur à cette variable et l'afficher </p>
                <?php
                $int = NULL ;
                echo  $int ;
                echo '<br/>';
                $int = 100 ;
                echo  $int ;
                ?>
       
      
    <h2> exercice 6</h2>
    <p>Créer une variable «nom» et l'initialiser avec la valeur de votre choix.
      Afficher : "Bonjour" + nom + ", comment vas tu ?". </p>
                <?php
                $prenom = "Aurelien ";
                echo "Bonjour ".$prenom."Comment vas tu?.";
                ?>


    <h2> exercice 7</h2>
    <p>Créer trois variables «nom» , «prenom» et «age» et les initialiser avec les valeurs de votre choix.
Attention age est de type entier. Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans." </p>
                <?php
                $prenom = "Aurelien ";
                $nom = "Lat ";
                $age = 20;
                echo "Bonjour ".$nom .$prenom  . "tu as ". $age ." ans.";
                ?>


    
    <h2> exercice 8 </h2>
    <p>Créer 3 variables.
Dans la première mettre l'adition qui donne le résultat 7.'<br/>'
Dans la deuxième mettre la multiplication qui donne le résultat 100.'<br/>'
Dans la troisième mettre la division qui donne le résultat 5.'<br/>'
Acher le contenu des variables. </p>
                <?php
                $chiffre1 = 4 ;
                $chiffre2 = 3 ;
                $somme = $chiffre1+$chiffre2;
                echo $somme;
                echo '<br/>'; 

                $chiffre1 = 10;
                $chiffre2 = 10; 
                $somme = $chiffre1*$chiffre2; 
                echo $somme;
                echo '<br/>'; 

                $chiffre1 = 10;
                $chiffre2 = 2; 
                $somme = $chiffre1/$chiffre2; 
                echo $somme;
                echo '<br/>'; 
                ?>


    <h1> Les boucles</h1>
    <h2> exercice 1</h2>
    <p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix. Afficher son contenu. </p>
        
        
                <?php
                $i = 0;
                while ($i<10)
                {
                echo $i."<br/>";
                $i= $i +1;
                }
                ?>

        
    <h2> exercice 2 </h2>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.'<br/>'
    Tant que la première variable n'est pas supérieur à 20 :'<br/>'
     => multiplier la première variable avec la deuxième'<br/>'
    => afficher le résultat'<br/>'
    => incrémenter la première variable </p>
                <?php
                $repetition = 0;
                while ($repetition < 15)
                {
                echo "<p>Je ne doit pas sortir sans demandé!</p>";
                $repetition++;
                };
                ?>
                             
    <h2> exercice 3</h2>  
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.'<br/>'
Tant que la première variable n'est pas inférieur ou égale à 10 :'<br/>'
=> soustraire la première variable avec la deuxième'<br/>'
=> afficher le résultat'<br/>'
=> décrémenter la première variable </p> '<br/>'
                <?php
                $variable1=20;
                for($variable2=100 ;$variable2>=10 ;($variable2-=$variable1))
                {
                $resultat= $variable2 -$variable1 ;
                echo $resultat ;
                };
                ?>

<h2>Exo 4  </h2>
<p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 :'<br/>'
=> l'afficher'<br/>'
=> l'incrementer de la moitié de sa valeur </p>'<br/>'
<?php
                    $a = 1 ;
                    while ($a <= 10)
                    {
                    echo  ''. $a . '';
                    $a+=($a/2);
                    } 
                    ?>

<h2> Exo 5 </h2>
<p> En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque...</p>
                    <?php
                    for($i = 1; $i <= 15; $i++) {
                   echo (' On y arrive presque....! <br/>  ');
                    }
                    ?>


<h2> exo 6  </h2> 
 <p>  En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.     </p>
                    <?php
                    for($i = 20; $i >= 1; $i--) {
                    echo(" C'est presque bon!<br/> ");
                    } 
                    ?>


<h2> exo 7 </h2>
<p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout... </p> 
                    <?php 
                    for($i=1; $i<=100; $i+=15) 
                    {
                    echo" On tient le bout! <br/>";
                    };
                    ?>
<h2> exo 8 </h2>
<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin ! ! ! </p> 
                    <?php 
                    for($i=200; $i>=0; $i -= 12) 
                    {
                    echo" Enfin!  <br/>";
                    };
                    ?>


<h1> LES FONCTIONS </h1> 
<h2> Exo 1</h2>
 <p> Faire une fonction qui retourne true.</p>
 
 
 <h2>Exo2</h2>
<p> Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
<?php
function a($nom)
{
  echo $nom. ' ';
}
a('Maman');
?>
<h2>Exo 3</h2>
<p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoi
la concaténation de ces deux chaines.</p>
<?php
function B($first_name, $last_name)
{
  echo $first_name.' '.$last_name.' ';
}
B('maman','papa');
?>

 

                       
                   
<h2> exo 4  </h2>
<p> Faire une fonction qui prend en paramètre deux nombres.<br/>
La fonction doit retourner :<br/>
=> Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième<br/>
=> Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième<br/>
=> Les deux nombres sont identiques si les deux nombres sont égaux<br/></p>

                    <?php

                    function ex4(int $a, int $b) : string {
                        if ($a < $b) {
                            return "$a plus petit que $b";
                        }
                        if ($a > $b) {
                            return "$a plus grand que $b";
                        }
                        return "$a égal à $b";
                    }

                    function ex4bis(int $a, int $b): string
                    {
                        if ($a === $b) return "$a égal à $b <br/>";
                        return ($a < $b) ? "$a plus petit que $b <br/>" : "$a plus grand que $b<br/>";
                    }
                    echo(ex4( 20 , 10 ));
                    echo '<br/>'; 
                    echo (ex4( 10 , 20 ));
                    echo '<br/>'; 
                    echo(ex4( 10 , 10 ));
                    echo '<br/>'; 
                    ?>
                              <h2> exo 5 </h2>
<p> Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit
la concaténation de ces deux paramètres.</p>
<?php
function e($nom, $chiffre){
  echo $nom. ' ' .$chiffre. ' ';
}
e('Laila',11);
?>          

                                <h2> exo 6 </h2>
                                <p> Faire une fonction qui prend trois paramètres :<br/>
                                 nom, prenom et age.<br/>

Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p> 

<?php
function exo ($first_name, $last_name, $age){
  echo 'Bonjour ' .$first_name. "" .$last_name. ' tu as ' .$age. ' ans';
}
exo('Francois ',' hollande', 100);
?>





<h2> exo 7</h2>
<p> Faire une fonction qui prend deux paramètres : age et genre.<br/>
 Le paramètre genre peut prendre comme valeur Homme ou Femme. <br/>
 La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :<br/>
  => Vous êtes un homme et vous êtes majeur => <br/>
  Vous êtes un homme et vous êtes mineur =><br/>
   Vous êtes une femme et vous êtes majeur =><br/>
    Vous êtes une femme et vous êtes mineur</p>
  
<?php 
 if ($age <= 18) {
    if ($sexe === "f") {
         echo("Vous êtes une femme et vous êtes mineure");
    } else {
       echo("Vous êtes un homme et vous êtes mineur");
    }
 }
 else {
    echo("vous êtes majeur");
 }

$string = ($sexe = "f") ? "Vous êtes une femme" : "Vous êtes un homme";
echo($string);

$string2 = ($age <= 18) ?
                ($sexe ="h") ? "Vous êtes une femme" : "Vous êtes un homme"
                : "Vous êtes majeur";
                ?>



<h2> exo 8 </h2>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut. </p>
<?php
function i($chiffre4 = 1, $chiffre5= 1, $chiffre6 = 1)
{
  echo $chiffre4 + $chiffre5 + $chiffre6 ;
}
i(9,9,9);
?>
<h1> LES TABLEAUX </h1>
<h2>Exo 1 </h2> 
<p> Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.</p>
<?PHP 
$mois = array("Janvier ", "Fevrier", "Mars", "Avril", "Mai", "Juin", "juillet", "Aout","Septembre","Octobre","Novembre","Décembre" );
echo '<pre>';
print_r($mois);
echo '</pre>';


?>
     <h2> exo 2  </h2>
     <p>Avec le tableau de l'exercice 1, acher la valeur de la troisième ligne de ce tableau.</p>  
     <?php
     $mois = array("Janvier ", "Fevrier", "Mars", "Avril", "Mai", "Juin", "juillet", "Aout","Septembre","Octobre","Novembre","Décembre" );
    echo $mois [2];
    ?>
    <h2> exo 3  </h2>
     <p>Avec le tableau de l'exercice , acher la valeur de l'index 5..</p>  
                    <?php
                    $mois = array("Janvier ", "Fevrier", "Mars", "Avril", "Mai", "Juin", "juillet", "Aout","Septembre","Octobre","Novembre","Décembre" );
                    echo $mois [5];
                    ?>
    <h2> exo 4   </h2>
     <p>Avec le tableau de l'exercice 1, modier le mois de aout pour lui ajouter l'accent manquant..</p>  
     <?php
     
    ?>
    <h2> exo 5  </h2>
    <p>Créer un tableau associatif avec comme index le numéro des départements
des Hauts de France et en valeur leur nom.</p>
                    <?php


                    $mois [0] = 'Janvier';
                    $mois [1] = 'Fevrier'; 
                    $mois [2] = 'Mars'; 
                    $mois [3] = 'Avril';
                    $mois [4] = 'Mai';
                    $mois [5] = 'Juin'; 
                    $mois [6] = 'Juillet'; 
                    $mois [7] = 'Aout ';
                    $mois [8] = 'Septembre ';
                    $mois [9] = 'Octobre ';
                    $mois [10] = 'Novembre ';
                    $mois [11] = 'Décembre ';

                    $departement [59] = "Nord";
                    $departement [02] = "Aisne";
                    $departement [60] = "Oise"; 
                    $departement [80] = "Pas de Calais"; 
                    $departement [62] = "Somme";


                    echo '<pre>';
                    print_r($mois);
                    print_r($departement);
                    echo '</pre>';
                    ?>


<h2> Exo 6 </h2>
<p> Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p> 
                    <?php 
                    $departement  [59] = "Nord";
                    $departement [02] = "Aisne";
                    $departement [60] = "Oise"; 
                    $departement [80] = "Pas de Calais"; 
                    $departement[62] = "Somme";
                    echo $departement [59];
                    ?>


<h2>Exo 7  </h2>
<p> Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>
                    <?php

                    $departement  [59] = "Nord";
                    $departement [02] = "Aisne";
                    $departement [60] = "Oise"; 
                    $departement [80] = "Pas de Calais"; 
                    $departement[62] = "Somme";
                    $departement [51] = "Marne";
                    echo $departement [51];
                    ?>

<h2> Exo 8 </h2> 
<p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
 </p> 
                    <?php

                    $mois = array("Janvier ", "Fevrier", "Mars", "Avril", "Mai", "Juin", "juillet", "Aout","Septembre","Octobre","Novembre","Décembre" );
                    foreach ($mois as $value)
                    
                    echo $value.'<br/>';        
                    ?>
<h2> Exo 9 </h2> 
<p> Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
                    <?php 
                    $mois [0] = 'Janvier';
                    $mois [1] = 'Fevrier'; 
                    $mois [2] = 'Mars'; 
                    $mois [3] = 'Avril';
                    $mois [4] = 'Mai';
                    $mois [5] = 'Juin'; 
                    $mois [6] = 'Juillet'; 
                    $mois [7] = 'Aout ';
                    $mois [8] = 'Septembre ';
                    $mois [9] = 'Octobre ';
                    $mois [10] = 'Novembre ';
                    $mois [11] = 'Décembre ';

                    $departement  [59] = "Nord";
                    $departement [02] = "Aisne";
                    $departement [60] = "Oise"; 
                    $departement [80] = "Pas de Calais"; 
                    $departement[62] = "Somme";
                    echo $mois [0];


                    ?>
 <h2>Exo 10</h2>
<p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme :
"Le département" + nom_departement + "a le numéro" + num_departement</p>
                    <?php
                    $Hauts_de_france [59] = "Nord";
                    $Hauts_de_france [02] = "Aisne";
                    $Hauts_de_france [60] = "Oise"; 
                    $Hauts_de_france [80] = "Pas de Calais"; 
                    $Hauts_de_france[62] = "Somme";

                    foreach ($Hauts_de_france as $cle => $departement)
                    {
                    echo 'Le département ' .$departement. ' a le numéro ' .$cle. ' </br>' ;
                    }
                    ?>
</body>

</html> 