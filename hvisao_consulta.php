<?php
# CREATE
if (isset($_POST['enviar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = 'INSERT INTO cadastro (nome, email) ';
    $sql .= 'VALUES (:nome, :email)';

    try {
        $create = $db->prepare($sql);
        $create->bindValue(':nome', $nome, PDO::PARAM_STR);
        $create->bindValue(':email', $email, PDO::PARAM_STR);
        if ($create->execute()) {
            echo "<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Inserido com sucesso!</strong>
						</div>";
        }
    } catch (PDOException $e) {
        echo "<div class='alert alert-error'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Erro ao inserir dados!</strong>" . $e->getMessage() . "
						</div>";
    }

}
# UPDATE
if (isset($_POST['atualizar'])) {
    $id = (int)$_GET['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sqlUpdate = 'UPDATE cadastro SET nome = ?, email = ? WHERE id = ?';

    $dados = array($nome, $email, $id);

    try {
        $update = $db->prepare($sqlUpdate);
        if ($update->execute($dados)) {
            echo "<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Atualizado com sucesso!</strong>
						</div>";
        }
    } catch (PDOException $e) {
        echo "<div class='alert alert-error'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Erro ao atualizar dados!</strong>" . $e->getMessage() . "
						</div>";
    }
}

# DELETE
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];

    $sqlDelete = 'DELETE FROM cadastro WHERE id = :id';

    try {
        $delete = $db->prepare($sqlDelete);
        $delete->bindValue(':id', $id, PDO::PARAM_INT);
        if ($delete->execute()) {
            echo "<div class='alert alert-success'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Deletado com sucesso!</strong>
						</div>";
        }
    } catch (PDOException $e) {
        echo "<div class='alert alert-error'>
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
						<strong>Erro ao deletar dados!</strong>" . $e->getMessage() . "
						</div>";
    }
}
?>