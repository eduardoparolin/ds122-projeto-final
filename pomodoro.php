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
            Pomodoro
        </div>
        <img class="t-image" src="./assets/tomate.png" alt="tomate"/>
    </div>
    <div class="sub-title" style="margin-top: 10px">
        Suas tarefas:
    </div>

    <?php
    $conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=senha123";
    $dbconn = pg_connect($conn_string);

    $result = @pg_query($dbconn, "select * from aula_tasks where \"user\" = 'dudu'");
    ?>
</body>
</html>