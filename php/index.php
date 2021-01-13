<?php
    ob_start();

    if(empty($_SESSION)) { 
        session_start(); 
    } 
    session_regenerate_id();

    require_once 'includes/autoloader.inc.php';
    require_once "handlingTodos.php";

    $_SESSION["isLoggedIn"] = false;
    $_SESSION["logout"] = $_SESSION["logout"] ?? false;

    $user = new User();
    $authCookies = new AuthCookies();

    if ($_SESSION["isLoggedIn"]) {
        $user->redirect("../build");
    }

    if (!$_SESSION["logout"]) {
        
        // Checking whether cookies are set 
        if (filter_has_var(INPUT_COOKIE, "email") && filter_has_var(INPUT_COOKIE, "token")) {
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

    if (filter_has_var( INPUT_POST, "login")) {
        $email = $_POST["emailid"];

        // Remove illegal chars
        $email = filter_var($email,FILTER_SANITIZE_EMAIL);

        // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     # code...
        // }
        
        $password = trim($_POST["password"]);
        
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

    if (filter_has_var( INPUT_POST, "register")) { 
        $username = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password_confirm = trim($_POST['password_confirm']);
        
        if ($password === $password_confirm) {
            
            // Checking whether user's email doesn't exist in database
            if (empty($user->Find($email))) {
                $user->UserRegister($username,$email,$password);
                $_SESSION["user_id"] = $user->Find($email)["id"];

                // Creating Todo Weclome when user is registered 
                $todos->todoByDefault();

                $_SESSION["isLoggedIn"] = true;
                $user->redirect("../build");
            } else {
                $_SESSION["message_error"] = "Such email already registered";
                $user->redirect("register.php");
            }
        } else {
            $_SESSION["message_error"] = "Password is not match";
            $user->redirect("register.php");
        }
    } 

    
?>

