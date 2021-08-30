<?php
require '../config/config.php';

try {
  
  if (isset($_POST['id'])) {
    $query = $pdo->prepare('SELECT status FROM todo WHERE id = :id');
    $query->execute([
        'id' => $_POST['id']
      ]);
    $todo = $query->fetch(PDO::FETCH_OBJ);
    $todo->status == 0 ? $todo->status = 1 : $todo->status = 0;

    $query = $pdo->prepare('UPDATE todo SET status = :status WHERE id = :id');
    $query->execute([
      'id' => $_POST['id'],
      'status' => $todo->status
    ]);
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
