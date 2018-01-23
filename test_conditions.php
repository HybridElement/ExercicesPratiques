<?php
$nbLivres = 12;

if ($nbLivres > 40){
    echo "Sacré Lecteur ;)";
}
else {
    echo "Tu n'as lu que " . $nbLivres . " livres? </br>";
}



$note = 6;

if ($note == 0)
{
    echo "Tu es vraiment un gros nul !!!";
}

elseif ($note == 5)
{
    echo "Tu es très mauvais";
}

elseif ($note <= 7)
{
    echo "Tu es mauvais";
}

elseif ($note == 10)
{
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($note == 12)
{
    echo "Tu es assez bon";
}

elseif ($note == 16)
{
    echo "Tu te débrouilles très bien !";
}

elseif ($note == 20)
{
    echo "Excellent travail, c'est parfait !";
}

else
{
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>


