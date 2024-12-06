<?php
require 'boostrap.php';
require 'src/Todo.php';
require 'helpers.php';
require 'src/Router.php';

$router = new Router();
$todo = new Todo();

$router->put('/todos/{id}/update', function ($todoId) use($todo){
    $todo->update(
        $todoId,
        $_POST['title'],
        $_POST['status'],
        $_POST['due_date']
    );
    redirect('/todos');
});


$router->get('/todos/{id}/update', function ($todoId) use($todo){
//    echo 'Edit the task: ' . $todoId;
    $getTodo = $todo->getTodo($todoId);
    view('edit', [
        'todo'=>$getTodo
    ]);
});

$router->get('/', function () {
    view('home');
});

$router->get('/todos', function () use ($todo) {
    $todos = $todo->getAllTodos();
    view('todos', ['todos' => $todos]);
});

$router->post('/todos', function () use ($todo) {
    if (!empty($_POST['title']) && !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        redirect('/todos');
    }
});

$router->get('/todos/{id}/delete', function ($todoId) use($todo){
    $todo->destroy($todoId);
    redirect('/todos');
});

