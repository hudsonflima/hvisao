<?php

if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $posologia = $_POST('frequencia');
    $frequencia = $_POST('posologia');

    $sql  = 'INSERT INTO cadastro (nome, categoria, frequencia, posologia)';
    $sql .= 'VALUES (:nome, :categoria, :posologia, :frequencia)';

    try {

        $create = $db->prepare($sql);
        $create->bindValue(':nome', $nome, PDO::PARAM_STR);
        $create->bindValue(':categoria', $categoria, PDO::PARAM_STR);
        $create->bindValue(':frequencia', $frequencia, PDO::PARAM_STR);
        $create->bindValue(':posologia', $posologia, PDO::PARAM_STR);

        if($create->execute()){
            echo "<div class='alert alert-success'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Inserido com sucesso!</strong>
                  </div>";
        }
    }   catch (PDOException $e) {
            echo "<div class='alert alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>Erro ao inserir dados!</strong>" . $e->getMessage() . "
                  </div>";
    }

}