<?php
require '../config/config.php';

try {
  $query = $pdo->query('SELECT * FROM todo');
  $todos = $query->fetchAll(PDO::FETCH_OBJ);
  $length = $query->columnCount();
  $id = 1;
} catch (PDOException $e) {
  echo $e->getMessage();
}

?>
<?php

foreach ($todos as $todo) : ?>
  <tr class="hover:bg-grey-lighter">
    <td class="py-2 px-2 border-b border-grey-light font-mono"><?= $id ?></td>
   
    <?php if ($todo->status) { ?>
      <td class="py-2 px-2 border-b border-grey-light font-mono line-through "><?= $todo->task ?></td>
      <td class="py-2 px-2 border-b border-grey-light font-mono "><input type="checkbox" class="form-checkbox h-5 w-5" id="checkbox" data-id="<?= $todo->id ?>" checked></td>
    <?php } else { ?>
      <td class="py-2 px-2 border-b border-grey-light font-mono "><?= $todo->task ?></td>
      <td class="py-2 px-2 border-b border-grey-light font-mono"><input type="checkbox" class="form-checkbox h-5 w-5" id="checkbox" data-id="<?= $todo->id ?>"></td>
    <?php } ?>
    <td class="py-2 px-2 border-b border-grey-light">
      <button class="bg-red-600 hover:bg-red-700 text-white text-xs font-mono font-bold py-1.5 px-1.5 border border-red-700 rounded" type="submit" id="delete" data-id="<?= $todo->id ?>" name="submit">Supprimer</button>
    </td>
  </tr>
<?php $id++;
endforeach; ?>