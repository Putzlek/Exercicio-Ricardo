<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host,$usuario,$senha,$database);

if($mysqli->error){
    die("falha ao conectar" . $mysqli->error);
}