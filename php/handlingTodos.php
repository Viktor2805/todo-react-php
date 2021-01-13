<?php 
$todos = new Todos();

if (basename($_SERVER['REQUEST_URI']) === "index.php") {
    if ($_SERVER['REQUEST_METHOD'] === "GET") {
        $todos->showTodos();
    }
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // Marking todo whether it's completed or not
    if (filter_has_var(INPUT_POST, "completedTodo")) {
        $todo_id = $_POST["todo_id"];
        $todo_is_completed = $_POST["completedTodo"];
        $todos->markingTodoCompleted($todo_id, $todo_is_completed);
    }

    // Deleting todo
    if (filter_has_var(INPUT_POST, "deletedTodo")) {
        $todos->deleteTodo($_POST["id"]);
    };

    // Adding todo
    if (filter_has_var(INPUT_POST, "addTodo")) {
        $todo_title = $_POST["todo_title"];
        $todo_text = $_POST["todo_text"];
        $todos->addTodo($todo_title, $todo_text);
    }
    
    // Editing todo
    if (filter_has_var(INPUT_POST, "editedTodo")) {
        $todo_title = $_POST["todo_title"];
        $todo_text = $_POST["todo_text"]; 
        $todo_id = $_POST["todo_id"];  
        $todos->editTodo($todo_id,$todo_title, $todo_text);
    }
}

?>