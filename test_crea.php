<?php
//readfile("./exemple.txt");
//print_r(file_get_contents("./exemple.txt"));

//fgetcsv();

//$tab = file("./exemple.txt");
//
//echo "<pre>";
//print_r($tab);
//echo"</pre>";

$var = "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<p>Ceci est un test</p>

</body>
</html>";

if (file_put_contents("toto.html", $var))
    echo "ok";
else
    echo "non";


?>