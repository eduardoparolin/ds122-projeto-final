<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="titles">
    <div class="t-holder">
        <div class="welcome-title">
            Login
        </div>
        <img class="t-image" src="./assets/tomate.png" alt="tomate"/>
    </div>
    <div class="sub-title" style="margin-top: 10px">
        Digite usuário e senha abaixo.
    </div>


    <form class="signup-login-form" action="executar_login.php" method="post">
        <label for="user">Seu usuário:</label>
        <input name="user" id="user" type="text">

        <label for="pass">Sua senha:</label>
        <input name="pass" id="pass" type="text">

        <button type="submit">Logar</button>
    </form>
</body>
</html>