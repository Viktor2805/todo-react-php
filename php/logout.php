<?php
require_once "index.php";

// Clear Session
session_destroy();
session_unset();     

// clear cookies
$authCookies->clearAuthCookie();

// Redirect to login page
$user->redirect("/react_todo/php/login.php");
ob_end_flush();
?>