<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .todo-body{
            max-width: 700px;
            box-shadow: 0 0 5px 5px #ccc;
        }
        .todo-text{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="todo-body my-5 p-3">
            <h1 class="text-center todo-text" >Todo App</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit cum aperiam tenetur adipisci vero, nobis optio culpa aspernatur odit ea ducimus deserunt molestiae laboriosam voluptate corrupti distinctio possimus rem necessitatibus!</p>
                <form action="index.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Task Title" name="title" required>
                        <select class="form-select" name="status" required>
                            <option value="Pending">Pending</option>
                            <option value="In_Progress">In Progress</option>
                            <option value="Completed">Completed</option>
                        </select>
                        <input type="date" class="form-control" name="due_date" required>
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>

                <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An- item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An- item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An- item
                    <button class="btn btn-outline-success">Done</button>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    An- item
                    <button class="btn btn-outline-success">Done</button>
                </li>
            </ul>
        </div>
        </div>


    </div>

</body>
</html>
<?php
require'Database.php';


$title = $_POST['title'];

$status = $_POST['status'];

$due_date = $_POST['due_date'];

$query = "INSERT INTO todos (title,status,due_date)  VALUES (:title, :status, :due_date)";

$db = new Database();
$stmt = $db->conn->prepare($query);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':due_date', $due_date);
$stmt->execute();





?>