<?php

$greet = function ($name)
{
    return "Hola, $name";
};

echo $greet('Kato');

function greet2(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello $name";
};

echo greet2($es, 'fea (its a joke, EDN)');
echo greet2($en, 'Karen 🤞'); 