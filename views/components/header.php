<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://wallpapercave.com/wp/wp12683361.jpg");
        }
        /*body {*/
        /*    background-image: url('https://banner2.cleanpng.com/20180611/pry/aa8mb0vr4.webp');*/
        /*    background-size: cover;*/
        /*    background-position: center;*/
        /*    height: 100vh;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    color: white;*/
        /*}*/

        .todo-body {
            max-width: 700px;
            box-shadow: 0 0 5px 5px #8a8585;
            background: bisque;
        }

        .todo-text {
            font-weight: bold;
            color: red;
        }

        .completed {
            text-decoration: line-through;
            color: green;

        }

        .in_progress {
            text-decoration: line-through;
            color: red;
        }
        .error-container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
        }
        .error-title {
            font-size: 2rem;
            font-weight: bold;
        }
        .error-text {
            font-size: 1.2rem;
        }
        .back-btn {
            margin-top: 20px;
            font-size: 1rem;
        }
        .edit-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .edit-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-actions {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
