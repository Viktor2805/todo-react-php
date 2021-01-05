<?php
require_once "index.php";

$_SESSION["logout"] = true;

//Clear Session
session_destroy();

// clear cookies
$authCookies->clearAuthCookie();

$user->redirect("/react_todo/php/login.php");
ob_end_flush();
?>