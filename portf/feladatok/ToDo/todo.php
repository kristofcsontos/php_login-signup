<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo</title>
    <link rel="stylesheet" href="todo.css">
    <link rel="stylesheet" href="../../alap.css">
</head>

<body>
    <?php include '../../navbar.php' ?>
    <div id="todo-app">
        <form id="add-todo-form">
            <input type="text" id="new-todo" placeholder="Add a new todo">
            <button type="submit">Add</button>
        </form>
        <ul id="todo-list"></ul>
    </div>

    <script src="todo.js"></script>
</body>

</html>