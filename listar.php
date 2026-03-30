<?php
$arquivo = 'clientes.json';

$clientes = file_exists($arquivo) 
    ? json_decode(file_get_contents($arquivo), true) 
    : [];

$busca = $_GET['busca'] ?? '';

if ($busca) {
    $clientes = array_filter($clientes, function($c) use ($busca) {
        return stripos($c['nome'], $busca) !== false;
    });
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<title>Clientes</title>
</head>

<body>

<div class="navbar">Lista de Clientes</div>

<div class="container">

<h1>Clientes</h1>

<form method="GET" class="search-box">
    <input type="text" name="busca" placeholder="Buscar por nome...">
</form>

<table>
<tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Telefone</th>
    <th>Tipo</th>
    <th>Ações</th>
</tr>

<?php foreach ($clientes as $i => $c): ?>
<tr>
    <td><?= $c['nome'] ?></td>
    <td><?= $c['email'] ?></td>
    <td><?= $c['telefone'] ?? '-' ?></td>
    <td><?= $c['tipo_cliente'] ?? '-' ?></td>
    <td>
        <a href="excluir.php?id=<?= $i ?>" 
           onclick="return confirm('Excluir cliente?')" 
           class="btn btn-delete">
           Excluir
        </a>
    </td>
</tr>
<?php endforeach; ?>

</table>

<a href="index.php" class="btn-link">← Voltar</a>

</div>

</body>
</html>