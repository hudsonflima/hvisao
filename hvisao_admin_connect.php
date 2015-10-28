<?php
$conn = 'mysql:host=127.0.0.1;dbname=receituario';
try {
    $db = new PDO($conn, 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    if ($e->getCode() == 1049) {
        echo "Banco de dados errado ou inexistente.";
    } else {
        echo $e->getMessage();
    }
}
?>