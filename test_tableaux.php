<?php
//// La fonction array permet de créer un array
//$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
//
//echo $prenoms[1];

//// On crée notre array $coordonnees
//$coordonnees = array (
//    'prenom' => 'François',
//    'nom' => 'Dupont',
//    'adresse' => '3 Rue du Paradis',
//    'ville' => 'Marseille');
//
//echo $coordonnees['ville'];

//$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');
//
//foreach($prenoms as $element)
//{
//    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
//}

//$coordonnees = array (
//    'prenom' => 'François',
//    'nom' => 'Dupont',
//    'adresse' => '3 Rue du Paradis',
//    'ville' => 'Marseille');
//
//foreach($coordonnees as $element)
//{
//    echo $element . '<br />';
//}

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

//foreach($coordonnees as $cle => $element)
//{
//    echo '[' . $cle . '] vaut ' . $element . '<br />';
//}

echo '<pre>';
print_r($coordonnees);
echo '</pre>';



if (array_key_exists('nom', $coordonnees))
{
    echo '<br/> La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees))
{
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits))
{
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits))
{
    echo '<br/>La valeur "Cerise" se trouve dans les fruits !';
}

$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"<br/>Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
?>

