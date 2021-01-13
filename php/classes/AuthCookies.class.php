<?php 

class AuthCookies extends User  {
    public function updateToken($email) {
        // generate token 
        $token = bin2hex(random_bytes(20));
        $token_hash = password_hash($token,PASSWORD_DEFAULT);
        
        try {
            setcookie('token', $token, time()+60*60*24*30);
            setcookie('email', $email, time()+60*60*24*30);
            $sql = "UPDATE `users` SET token = :token WHERE id = :id";
            //Prepare our UPDATE SQL statement.
            $statement = $this->conn->prepare($sql);
    
            //Bind our value to the parameter :token.
            $statement->bindParam(':token', $token_hash);

            //Bind our value to the parameter :id.
            $statement->bindParam(':id', $_SESSION["user_id"]);
            $statement->execute(); 
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getTokenByUserEmail($email) {
        try {
        $result = $this->conn->prepare("SELECT token 
            FROM users 
                WHERE email = :email LIMIT 1");
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        if ($result->rowCount()) {
            return $result->fetch(PDO::FETCH_ASSOC); 
        } else {
            return false;
        }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function clearAuthCookie() {
        if (isset($_COOKIE["token"]) && isset($_COOKIE["email"])) {
            setcookie("token", "");
            setcookie("email", "");
            setcookie('PHPSESSID', 0,1);    
        }
    }
}
 
?>
