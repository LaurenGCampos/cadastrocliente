<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<title>Cadastro</title>
</head>

<body>

<div class="navbar">Sistema de Clientes</div>

<div class="container">

<h1>Cadastrar Cliente</h1>

<form action="cadastrar.php" method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="text" name="endereco" placeholder="Endereço">

    <select name="tipo_cliente">
        <option value="">Tipo</option>
        <option value="pf">Pessoa Física</option>
        <option value="pj">Pessoa Jurídica</option>
    </select>

    <select name="sexo">
        <option value="">Sexo</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select>

    <button type="submit">Cadastrar</button>
</form>

<a href="listar.php" class="btn-link">Ver Clientes →</a>

</div>

</body>
</html>