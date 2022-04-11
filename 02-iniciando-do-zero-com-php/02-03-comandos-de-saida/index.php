<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.03 - Comandos de saída");

/**
 * [ echo ] https://php.net/manual/pt_BR/function.echo.php
 */
fullStackPHPClassSession("echo", __LINE__);

echo "<h3>Olá Mundo! </h3>";

echo "<p>Olá Mundo", " ", "<span class='tag'>#BoraProgramar!</span>","</p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";

$day = "dia";
echo "<p> Faltam 1 $day para o evento </p>";
// Colocar a Variável dentro de {} protege
echo "<p> Faltam 2 {$day}s para o evento </p>";

echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

// mostrando que tem como utilizar aspas simples e dupla porém o cód. fica fora
echo '<h3>'.$hello. "  ".$code."</h3>";

?>

<!-- Comentário em HTML -->
<h4><?= $hello;?></h4>

<?php

/**
 * [ print ] https://php.net/manual/pt_BR/function.print.php
 */
fullStackPHPClassSession("print", __LINE__);
Print $hello;
print $code;

print "<h3>{$hello} {$code}</h>";

/**
 * [ print_r ] https://php.net/manual/pt_BR/function.print-r.php
 */
fullStackPHPClassSession("print_r", __LINE__);

$array = [
    "company" => "UpInside",
    "course" => "FSHPH",
    "Class" => "Comandos de Saída"
];
    print_r($array);
    echo "<pre>", print_r($array, true), "</pre>";


/**
 * [ printf ] https://php.net/manual/pt_BR/function.printf.php
 */
fullStackPHPClassSession("printf", __LINE__);

$article = "<article><h1>%s</h1><p>%s</p><h3>%s</h3></article>";
$title = "{$hello} {$code}";
$subtitle = "Não entendi nada de nada";
$teste = "Sou feliz";

printf($article, $title, $subtitle, $teste);
echo sprintf ($article, $title, $subtitle, $teste);

/**
 * [ vprintf ] https://php.net/manual/pt_BR/function.vprintf.php
 */
fullStackPHPClassSession("vprintf", __LINE__);

$company = "<article><h1>Escola %s</h1><p>Curso <b>%s</b>, aula <b>%s</b></p></article>";
vprintf($company, $array);
echo vsprintf($company, $array);

/**
 * [ var_dump ] https://php.net/manual/pt_BR/function.var-dump.php
 */
fullStackPHPClassSession("var_dump", __LINE__);
var_dump($array);
var_dump(   $array, 
            $hello, 
            $code);
