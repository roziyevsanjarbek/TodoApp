<?php

//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
require 'src/Router.php';
require 'src/Todo.php';

require 'helpers.php';

$todo = new Todo();

$router = new Router();

$router->get('/',function (){
   view('Foreground');
});

$router->get('/todos',function ()use($todo){
    $todos = $todo->getAllTodos();
    view('home',[
        'todos'=>$todos
    ]);
});

$router->post('/store',function ()use($todo){
    if (!empty($_POST['title']) and !empty($_POST['due_date'])) {
        $todo->store($_POST['title'], $_POST['due_date']);
        header('Location: /todos');
        exit();
    }
});

$router->get('/complete',function ()use($todo){
    if (!empty($_GET['id'])) {
        $todo->complete($_GET['id']);
        header('Location: /todos');
        exit();
    }
});

$router->get('/In_progress',function ()use($todo){
    if (!empty($_GET['id'])) {
        $todo->In_progress($_GET['id']);
        header('Location: /todos');
        exit();
    }
});

$router->get('/pending',function ()use($todo){
    if (!empty($_GET['id'])) {
        $todo->Pending($_GET['id']);
        header('Location: /todos');
        exit();
    }
});

























//if ($uri == '/') {
//    $todos = $todo->get();
//    view('home', [
//        'todos' => $todos
//    ]);
//} elseif ($uri == '/store') {
//    if (!empty($_POST['title']) and !empty($_POST['due_date'])) {
//        $todo->store($_POST['title'], $_POST['due_date']);
//        header('Location: /');
//        exit();
//    }
//} elseif ($uri == '/complete') {
//    if (!empty($_GET['id'])) {
//        $todo->complete($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//} elseif ($uri == '/In_progress') {
//    if (!empty($_GET['id'])) {
//        $todo->In_progress($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//
//} elseif ($uri == '/pending') {
//    if (!empty($_GET['id'])) {
//        $todo->Pending($_GET['id']);
//        header('Location: /');
//        exit();
//    }
//
//}