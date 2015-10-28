<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Nome:</th>
            <th>E-mail:</th>
            <th>Ações:</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sqlRead = 'SELECT * FROM cadastro';
            try {
                $read = $db->prepare($sqlRead);
                $read->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
            while ($rs = $read->fetch(PDO::FETCH_OBJ)) {
                ?>
                <tr>
                    <td><?php echo $rs->id; ?></td>
                    <td><?php echo $rs->nome; ?></td>
                    <td><?php echo $rs->email; ?></td>
                    <td>
                        <a href="index.php?action=update&id=<?php echo $rs->id; ?>" class="btn"><i
                                class="icon-pencil"></i></a>
                        <a href="index.php?action=delete&id=<?php echo $rs->id; ?>" class="btn"
                           onclick="return confirm('Deseja deletar?');"><i class="icon-remove"></i></a>
                    </td>
                </tr>
        <?php } ?>
    </tbody>
</table>