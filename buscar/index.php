<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div id="pai">
        <a href="../index.php">Voltar</a><br/>
        <h1>Buscar Funcionários</h1><br/>
        <div class="filho">
            <div class="buscar">
                <form method="POST" action="buscar.php">
                    <span>ID do funcionario:</span><br/>
                    <input type="text" name="nome" require maxlength="30"/><br/>
                    <input type="submit" name="buscar" value="Buscar">
                </form>
                <div>
                    <?php include 'exceptions.php'; ?>
                </div>
            </div>
            <div class="buscartodos">
                <form method="POST" action="buscartodos.php">
                    <input type="submit" name="buscartodos" value="Buscar ID">
                </form>
                <div>
                    <?php include 'exceptions_todos.php'; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>