<?php

if (!function_exists('tipo_pagina')) {
    function tipo_pagina($expression)
    {

        $arreglo = Array(1 => 'Prestamo', 2 => 'Factoring', 3 => 'Invertir');

        return $arreglo[$expression];

    }
}

if (!function_exists('tipo_seccion')) {
    function tipo_seccion($expression)
    {

        $arreglo = Array(1 => 'Pasos', 2 => 'Beneficios', 3 => 'Requisitos o caracteristicas');

        return $arreglo[$expression];

    }
}