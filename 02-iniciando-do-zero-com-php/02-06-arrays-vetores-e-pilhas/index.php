<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrayA = array(1,2,3);
$arrayA = [0,1,2,3];

var_dump($arrayA);

$arrayIndex = [
    "Silvane",
    "Mota",
    "É"
];
$arrayIndex[] = "Maravilhosa";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "Violino" => "Guilherme",
    "Trompete" => "Edson",
    "Orgão" => "Zaze"
];
$arrayAssoc["Banda"] = "CCB";

var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["Name" => "Angus", "Instrument" => "Guitar"];

$instruments = [
    $brian,
    $angus
];

var_dump($instruments);

var_dump($instruments[1]["Instrument"]);

var_dump($instruments[0][1]);

var_dump([
    "brian" => $brian,
    "angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$ccb = [
    "Banda" => "CCB",
    "Violino" => "Guilherme",
    "Trompete" => "Edson",
    "Orgão" => "Zaze",
    
];

$assembleia = [
    "Banda" => "Assembleia",
    "Violino" => "Silvane",
    "Trompete" => "João",
    "Orgão" => "Lili",
];

$igrejas = [
    $ccb,
    $assembleia
];

echo "<p>o Violinista da CCB é {$ccb["Violino"]} e junto com a {$ccb["Orgão"]} louvam a Deus</p>";

foreach ($ccb as $lista) {
    echo "<p> Nome: {$lista}</p>";
}

foreach ($ccb as $instrumentos => $musicos) {
    echo "<p> o instrumento {$instrumentos} pertence à {$musicos}</p>";
}

foreach ($igrejas as $orquestras) {
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $orquestras);
}


