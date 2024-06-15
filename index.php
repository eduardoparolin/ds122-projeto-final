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
            Bem vindo!
        </div>
        <img class="t-image" src="./assets/tomate.png" alt="tomate"/>
    </div>
    <div class="sub-title">
        Já conhece a técnica pomodoro de foco?
    </div>
    <div>
        Conheça mais <a href="https://pt.wikipedia.org/wiki/T%C3%A9cnica_pomodoro">aqui</a>
    </div>

    <div class="login-signup-page">
    <div>
        É a sua primeira vez aqui? <a href="cadastro.php">clique aqui</a> para realizar cadastro
    </div>

    <div>
        OU <a href="login.php">clique aqui</a> para realizar login
    </div>
    </div>
</div>

<div class="timer">
    <div id="minutes">

    </div>:
    <div id="seconds">

    </div>
</div>

<button onclick="startCounter()">Start</button>
<button onclick="pause()">Pause</button>
<button onclick="stop()">Stop</button>

<script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
<script src="counter.js"></script>

</body>
</html>