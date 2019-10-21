<?php
//count — Compte tous les éléments d'un tableau ou quelque chose d'un objet

$food = array(
    'fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea')
);
$cars = array('audi', 'Mercedes');
echo count($cars);

// count récursif
echo count($food, 1); // affiche 8 en comptant tous les elements


// count normal
echo count($food); // affiche 2 en comptant les  2 arrays principales



// Explode function : Scinde une chaîne de caractères en segments
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *
echo $uid; //1023

//sort : Tri d un tableau 

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}


//array_reverse : renverser les elements d'un tableau 

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

// array_merge : fusionner 2 tableaux ou plus en 1 seul 

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
