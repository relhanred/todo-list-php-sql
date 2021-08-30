$(document).ready(function () {
  function displayTodos() {
    $.ajax({
      url: 'actions/display_all.php',
      type: 'GET',
      success: function (data) {
        $("#todo").html(data);
      }
    })
  }
  displayTodos();


  $("#add").on("click", function (e) {
    e.preventDefault();
    let task = $("#task").val();
    $.ajax({
      url: "actions/add.php",
      type: "POST",
      data: { task: task },
      success: function () {
        displayTodos();
        $("#task").val('');
      }
    });
  });


  $(document).on("click", "#delete", function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    $.ajax({
      url: "actions/delete.php",
      type: "POST",
      data: { id: id },
      success: function () {
        displayTodos();
      }
    });
  });

  $(document).on("click", "#checkbox", function (e) {
    let id = $(this).data('id');
    $.ajax({
      url: "actions/update.php",
      type: "POST",
      data: {
        id: id,
      },
      success: function () {
        displayTodos();
      }
    });
  });
});