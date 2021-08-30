<?php
require '../config/config.php';

try {
  if (isset($_POST['id'])) {
    $query = $pdo->prepare('DELETE FROM todo WHERE id = :id');
    $query->execute([
      'id' => $_POST['id']
    ]);
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>