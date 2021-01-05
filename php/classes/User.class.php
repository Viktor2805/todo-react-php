<?php
class User extends Dbh {
    function __construct() {
        $this->conn = $this->connect();
    }
    
    public function UserRegister($username, $email,$password) {
        $stmt = $this->conn->prepare("INSERT INTO users (username,email,password)
        VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
        $stmt->execute();
    }

    public function Find($email) {
        $result = $this->conn->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->rowCount()) {
            return $result->fetch(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }

    public function Verify($user,$password) {
        if (is_array($user) && password_verify($password, $user["password"])) {
            $_SESSION["isLoggedIn"] = true;
            $_SESSION["user_id"] = $user["id"];
            return true;
        } else {
            return false;
        }
    }

    public function isLoggedIn() {
        if ($_SESSION["isLoggedIn"]) {
            return true;
        } else {
            return false;
        }
    }

    public function redirect($url) {
        header("Location:" . $url);
        exit;
    }
}
?>