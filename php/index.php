<?php
    ob_start();

    if(empty($_SESSION)) { 
        session_start(); 
    } 

    include 'includes/autoloader.inc.php';
    require "handlingTodos.php";

    $_SESSION["isLoggedIn"] = false;

    if (empty($_SESSION["logout"])) {
        $_SESSION["logout"] = false;
    }

    $user = new User();
    $authCookies = new AuthCookies();

    if ($user->isLoggedIn()) {
        $user->redirect("../build");
    }

    // change session
    if ($_SESSION["logout"] === false) {
        if (!empty($_COOKIE["email"]) && !empty($_COOKIE["token"]) ) {
            $userToken = $authCookies->getTokenByUserEmail($_COOKIE["email"]);
    
            // Validate random token cookie with database
            if (password_verify($_COOKIE["token"],$userToken["token"])) {
                $isTokenVerified = true;
            }
    
            if ($isTokenVerified) {
                $_SESSION["isLoggedIn"] = true;
            } else {
                $authCookies->clearAuthCookie();
            }
        } 
    }
  
    if (isset($_POST['login'])) {
        $email = $_POST["emailid"];
        $password = $_POST["password"];
        $isAuthenticated = false;

        $userInfo = $user->Find($email);
        if (is_array($userInfo)) {
            if ($user->Verify($userInfo,$password)) {
                $isAuthenticated = true;
            }  else {
                $_SESSION["message_error"] = "Your password is not correct";
                $user->redirect("login.php");
            }
            
            if ($isAuthenticated) {

                // Set Auth Cookies if 'Remember Me' checked
                if (!empty($_POST["remember_me"])) {
                    $authCookies->updateToken($email);
                } else {
                    $authCookies->clearAuthCookie();
                }
                $user->redirect("../build");
            }
        } else {
            $_SESSION["message_error"] = "Your email is not registered";
            $user->redirect("login.php");
        }
    }

    if (isset($_POST['register'])) { 
        echo "f";
        $username = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password_confirm = trim($_POST['password_confirm']);
        
        if ($password === $password_confirm) {
            if (empty($user->Find($email))) {
                $user->UserRegister($username,$email,$password);
                $_SESSION["user_id"] = $user->Find($email)["id"];
                $_SESSION["isLoggedIn"] = true;
                $user->redirect("../build");
            } else {
                echo "such email already registered";
            }
        } else {
            echo "password is not match";
        }
    } 

?>

