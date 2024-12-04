<?php
require "DB.php";

class Todo
{
    public $pdo;

    public function __construct()
    {
        $db = new DB();
        $this->pdo = $db->conn;
    }

    public function store(string $title, string $dueDate): void
    {
        $query = "INSERT INTO todos (title, status, due_date, created_at, updated_at) 
                VALUES (:title, 'pending', :due_date, NOW(), NOW())
        ";
        $this->pdo->prepare($query)->execute([
            ":title" => $title,
            ":due_date" => $dueDate
        ]);
    }

    public function getAllTodos()
    {
        $query = "SELECT * FROM todos";
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll();
    }

    public function complete(int $id): bool
    {
        $query = "UPDATE todos set status='completed', updated_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);

    }

    public function In_progress(int $id): bool
    {
        $query = "UPDATE todos set status='in_progress', updated_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);

    }

    public function Pending(int $id): bool
    {
        $query = "UPDATE todos set status='pending', updated_at=NOW() where id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);

    }
    public function dectoyr (int $id): bool{
        $query = "Delete FROM todos WHERE id=:id";
        return $this->pdo->prepare($query)->execute([
            ":id" => $id
        ]);
    }

    public function getTodo(int $id){
        $query = "SELECT * FROM todos WHERE $id=:id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            ":id" => $id
        ]);
        return $stmt->fetch();
    }

}