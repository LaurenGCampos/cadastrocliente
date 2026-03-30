<?php
$arquivo = 'clientes.json';

$clientes = json_decode(file_get_contents($arquivo), true);

$id = $_GET['id'];

unset($clientes[$id]);

$clientes = array_values($clientes);

file_put_contents($arquivo, json_encode($clientes, JSON_PRETTY_PRINT));

header("Location: listar.php");
exit;
?>