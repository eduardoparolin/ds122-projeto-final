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


    <table>
        <tr>
            <th>Tarefa</th>
            <th>Status</th>
            <th>Executar ?</th>
        </tr>
        <tr>
            <td>Teste 1</td>
            <td>Não executado</td>
            <td><a href="exec.php">Executar</a></td>
        </tr>
        <tr>
            <td>Test 2</td>
            <td>Não executado</td>
            <td><a href="exec.php">Executar</a></td>
        </tr>
        <tr>
            <td>Tarefa nE</td>
            <td>Não executado</td>
            <td><a href="exec.php">Executar</a></td>
        </tr>
        <tr>
            <td>Teste 111</td>
            <td>Executada</td>
            <td></td>
        </tr>
    </table>

    <button>Cadastrar nova tarefa</button>
</body>
</html>