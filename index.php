<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Todo-list php/sql</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/todo.js"></script>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
  <div class="h-full w-full flex items-center justify-center font-sans">
    <div class="bg-gray-100 rounded shadow p-6 m-4 lg:max-w-lg">
      <div class="mb-4">
        <h1 class="text-grey-darkest text-center text-3xl font-bold font-serif">Todo-List</h1>
        <div class="flex mt-4">
          <input type="text" id="task" name="task" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Ajouter une tâche">
          <button type="submit" id="add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Ajouter</button>
        </div>
      </div>
      <div class="m-auto">
        <table class="text-left w-full border-collapse">
          <thead>
            <tr>
              <th class="py-2 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
              <th class="py-2 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Tache</th>
              <th class="py-2 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Status</th>
              <th class="py-2 px-2 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
            </tr>
          </thead>
          <tbody id="todo">
          </tbody>
        </table>
      </div>

    </div>
  </div>
</body>

</html>