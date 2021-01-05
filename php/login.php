<?php
    
require_once "index.php";

if (isset($_SESSION["isLoggedIn"])) {
    if ($_SESSION["isLoggedIn"]) {
        header("Location:../build");
    }
}

if( isset($_SESSION["message_error"])) {
    $message = $_SESSION["message_error"];
    unset($_SESSION["message_error"]);
}
?>
<html>
<style>
    body {
    display:flex;
    justify-content: center;
    align-items: center;
    }

#frmLogin {
    padding: 20px 40px 40px 40px;
    background: #d7eeff;
    border: #acd4f1 1px solid;
    color: #333;
    border-radius: 2px;
    width: 300px;
}

.field-group {
    margin-top: 15px;
}

.input-field {
    padding: 12px 10px;
    width: 100%;
    border: #A3C3E7 1px solid;
    border-radius: 2px;
    margin-top: 5px
}

.form-submit-button {
    background: #3a96d6;
    border: 0;
    padding: 10px 0px;
    border-radius: 2px;
    color: #FFF;
    text-transform: uppercase;
    width: 100%;
}

.error-message {
    text-align: center;
    color: #FF0000;
}
a { 
    text-decoration: none;
    color:#0074D9;
}

</style>
<body>
    <form action="index.php" method="post" id="frmLogin">
    <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
    <div class="field-group">
        <div>
            <label for="login">Email</label>
        </div>
        <div>
            <input id="emailsignup" name="emailid" required="required" type="email" class="input-field">
        </div>
    </div>
    <div class="field-group">
        <div>
            <label for="password">Password</label>
        </div>
        <div>
            <input id="password" name="password" required="required" type="password"
                class="input-field">
        </div>
    </div>
    <div class="field-group">
        <div>
            <input type="checkbox" name="remember_me" id="remember_me"/> 
            <label for="remember-me">Remember me</label>
        </div>
    </div>
    <div class="field-group">
        <div>
            <input type="submit" name="login" value="Login"
                class="form-submit-button"></span>
        </div>
    </div>
    <div class="field-group">
        <p class="change_link">  Not a member yet?  
            <a href="register.php" class="to_register">Join us</a>  
        </p> 
    </div>
</form>
</body>
</html>

