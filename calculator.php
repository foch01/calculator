<?php

include_once ("php-add-lib/AddCommand.php");
include_once ("php-multi-lib/MultiCommand.php");

echo "Quel est le votre premier nombre ? ";
$a = trim(fgets(STDIN));

echo "Quel est le votre deuxième nombre ? ";
$b = trim(fgets(STDIN));

echo "Si vous souhaitez une addition taper 1 sinon taper 2 ";
$request = trim(fgets(STDIN));

if ($request == 1){
    add($a, $b);
} else {
    multi($a, $b);
}
