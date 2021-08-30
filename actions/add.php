<?php
require '../config/config.php';

try {
  if (isset($_POST['task'])) {
    $query = $pdo->prepare('INSERT INTO todo (task) VALUES (:task)');
    $query->execute([
      'task' => $_POST['task']
    ]);
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
?>