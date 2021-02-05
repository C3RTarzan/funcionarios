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
        <a href="../index.php">Voltar</a>
        <div>
            <h1>Adicionar Funcionários</h1><br/>
            <form  method="POST" action="adicionar.php">
                <span>Nome:</span><br/>
                <input type="text" name="nome" require maxlength="30"/><br/>
                <span>Cargo:</span><br/>
                <input type="text" name="cargo" require maxlength="30"/><br/>
                <span>Salário:</span><br/>
                <input type="text" name="salario" require maxlength="30"/><br/>
                <input type="submit" value="Adicionar">
            </form>
            <span class="dados"> 
                <?php
                    if(isset($_SESSION['registrado'])): ?>
                        <p> Registrado com sucesso. </p>   
                        <p> ID do registro: <?php echo $_SESSION['id']; ?>. </p>        
                <?php
                    endif;
                    unset($_SESSION['registrado']);
                ?>
            </span>
        </div>
    </div>
</body>
</html>