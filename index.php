<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

require "./classes/StrUtils.php";

$dog = new StrUtils("chien");

echo $dog->bold();
echo "<br>";
echo $dog->italic();
echo "<br>";
echo $dog->underline();
echo "<br>";
echo $dog->capitalize();
echo "<br>";
echo $dog->uglify();
echo "<br>";
