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
    if (empty($_GET['user'])) {
        $user = 'eduardo';
    } else {
        $user = $_GET['user'];
    }
    $conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=senha123";
    $dbconn = pg_connect($conn_string);

    $result = @pg_query($dbconn, "select * from aula_tasks where \"user\" = '$user'");


    ?>


    <table>
        <tr>
            <th>TID</th>
            <th>Tarefa</th>
            <th>Status</th>
            <th>Executar ?</th>
        </tr>
        <?php
        // Define the status mapping
        $status_mapping = array(
            0 => 'Não executado',
            1 => 'Executando',
            2 => 'Completado'
        );

        // Other code...

        while ($row = pg_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['tid']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($status_mapping[$row['status']]) . "</td>";
            if ($row['status'] == 0) {
                echo "<td><a href='exec.php?tid=" . htmlspecialchars($row['tid']) . "' onclick='openModal()'>Executar</a></td>";
            } elseif ($row['status'] == 1) {
                echo "<td><a href='stop.php?tid=" . htmlspecialchars($row['tid']) . "'>Parar</a></td>";
            } else {
                echo "<td></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <button id="new_task">Cadastrar nova tarefa</button>

    <div id="new_task_modal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                <form action="insert_task.php" method="POST">
                    <label for="tarefa_name"><b>Nome da tarefa</b>
                        <input type="text" placeholder="Tarefa" name="tarefa_name" required>
                    </label>

                    <input type="hidden" name="user" value="<?php echo htmlspecialchars($user); ?>" />
                    <input id="uuid_field" type="hidden" name="uuid" value="" />

                    <button type="submit">Salvar</button>
                </form>
            </div>
        </div>

    </div>

    <div id="executing_task_modal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="container">
                Titulo: <p id="title"></p>
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
            </div>
        </div>

    </div>
    <script src="pomodoro.js"></script>
</body>
</html>