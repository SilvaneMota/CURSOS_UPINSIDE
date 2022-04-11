<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Silvane";
$userLastName = "Mota";
echo "<h3>{$userFirstName} {$userLastName}</h3>";

$user_first_name = $userFirstName;
$user_last_name = $userLastName;
echo "<h3>{$user_first_name} {$user_last_name}</h3>";

$userAge = "27";

echo "<h3>{$user_first_name} {$user_last_name} <span class='tag'>tem {$userAge}</span></h3>";

// Exemplo do pq receber um Valor da Variável dentro de outra
$nota1 = 5;
$notaFinal = $nota1 + 5;
echo $notaFinal."<br>";


$feira = [ "Doces" => "Banana"

];

var_dump($feira);

// Variavel variavel
$frutas = "Doces";
$$frutas = "Banana";
echo "<h3>{$frutas} {$Doces}</h3>";

//Referência de Variavel

$calcA = 10;
$calcB = 20;
$calcB = $calcA;
//$calcB = &$calcA;
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump($true, $false);

$bestAge = ($userAge < 50);
var_dump($bestAge);

if($userAge > 15){
echo "É verdadeiro";
}else {
echo "É Falso";    
}


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Function</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($code, $codeClear);

$codeMore = function($numero1,$numero2){
    echo $numero1 + $numero2;
};
$codeMore(2, 2);


/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$notebook = "calcular";
$string = "Ola Mundo";
$array = [$string];
$object = new stdClass();
$object -> notebook = $notebook;
$object -> ventilador = "Ventilar";
$null = null;
$int = 12345;
$float = 1.2344;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);