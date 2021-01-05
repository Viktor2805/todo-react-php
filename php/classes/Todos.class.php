<?php

class Todos extends User {
    function __construct() {
        $this->conn = $this->connect(); 
    }
    public function showTodos() {
        try {
            $result = $this->conn->prepare("SELECT * FROM todos WhERE UserId = :UserId");
            $result->bindParam(':UserId',$_SESSION["user_id"]);
            $result->execute();
            return print_r(json_encode($result->fetchAll()));
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function addTodo($todo_title,$todo_text) {
        try {
            $sql = 'INSERT INTO todos (title, text,UserId)
            VALUES ( :todo_title, :todo_text,:UserId)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':todo_text', $todo_text);
            $stmt->bindParam(':todo_title', $todo_title);
            $stmt->bindParam(':UserId',$_SESSION["user_id"]);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function deleteTodo($todo_id) {
        try {
            $sql = 'DELETE FROM todos WHERE id = :todo_id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':todo_id', $todo_id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function markingTodoCompleted($todo_id,$todo_is_completed) {
        try {
            $sql = "UPDATE `todos` 
                SET completed = :todo_is_completed 
                    WHERE id = :todo_id";
             //Prepare our UPDATE SQL statement.
            $statement = $this->conn->prepare($sql);
    
            //Bind our value to the parameter :id.
            $statement->bindValue(':todo_id', $todo_id);
        
            //Bind our :model parameter.
            $statement->bindValue(':todo_is_completed', $todo_is_completed);
            $statement->execute(); 
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function editTodo($todo_id, $todo_title, $todo_text) {
        try {
            $sql = "UPDATE `todos` 
              SET title = :todo_title,  text = :todo_text 
                WHERE id = :todo_id";
                    
            //Prepare our UPDATE SQL statement.
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':todo_text', $todo_text);
            $stmt->bindParam(':todo_title', $todo_title);
            $stmt->bindParam(':todo_id', $todo_id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>