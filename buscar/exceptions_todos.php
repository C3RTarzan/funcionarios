<?php
    if(isset($_SESSION['todos'])): ?>
    <?php 
    include("../connection.php");

    $query = "SELECT * from funcionarios";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row > 0){

        for($i=0; $i < $row; $i++){
            $dado = mysqli_fetch_array($result);
            $id = $dado['userid'];
            $nome = $dado['nome'];
            echo '<span>ID:</span><br/>';
            echo '<span class="item">';
            echo $id;
            echo '</span><br/>';
            echo '<span>Nome:</span><br/>';
            echo '<span class="item">';
            echo $nome;
            echo '</span><br/><br/>';
        }      
    }   
    ?>  
<?php
    endif;
    unset($_SESSION['todos']);
?>