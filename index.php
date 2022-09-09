<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionarios</title>
</head>

<body>
    <form method="post" action="cadastrar.php">
        Seu Id: <input type="number" name="id">
        <br>
        <hr>
        Seu nome: <input type="text" name="nome">
        <br>
        <hr>
        Seu cargo: <input type="text" name="cargo">
        <br>
        <hr>
        Salario: <input type="number" name="salario">
        <br>
        <hr>
        Dependentes: <input type="number" name="dependentes">
        <br>
        <hr>
        <button type="submit">Enviar</button>


    </form>
</body>

</html>