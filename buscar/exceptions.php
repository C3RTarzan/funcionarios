<?php
    if(isset($_SESSION['entrou'])): ?>
    <?php 
        echo '<span>ID:</span><br/>';
        echo '<span class="item">';
        echo $_SESSION['id'];
        echo '</span><br/><br/>';
        echo '<span>Nome:</span><br/>';
        echo '<span class="item">';
        echo $_SESSION['nome'];
        echo '</span><br/><br/>';
        echo '<span>Cargo:</span><br/>';
        echo '<span class="item">';
        echo $_SESSION['cargo'];
        echo '</span><br/><br/>';
        echo '<span>Salario:</span><br/>';
        echo '<span class="item">';
        echo $_SESSION['salario'];
    ?>   
<?php
    endif;
    unset($_SESSION['entrou']);
?>

<?php
    if(isset($_SESSION['campos_branco'])): ?>
    <p>Valor nulo não é valido.</p>   
<?php
    endif;
    unset($_SESSION['campos_branco']);
?>

<?php
    if(isset($_SESSION['is_numeric'])): ?>
    <p>Valor invalido.</p>   
<?php
    endif;
    unset($_SESSION['is_numeric']);
?>

<?php
    if(isset($_SESSION['nao_entrou'])): ?>
    <p>ID não encontrado.</p>   
<?php
    endif;
    unset($_SESSION['nao_entrou']);
?>