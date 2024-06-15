<?php
// Get the task name from the form
$tarefa_name = $_POST['tarefa_name'];
$user = $_POST['user'];
$uuid = $_POST['uuid'];

// Connect to the database
$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=senha123";
$dbconn = pg_connect($conn_string);

// Prepare the SQL statement
$sql = "INSERT INTO aula_tasks (\"user\", tid, name) VALUES ('$user', $uuid, '$tarefa_name')";

// Execute the SQL statement
$result = pg_query($dbconn, $sql);

//if ($result) {
//    echo "Usuário criado com sucesso! ";
//} else {
//    $error = pg_last_error($dbconn);
//
//    // you need to adapt this regex
//    if (preg_match('/duplicate/i', $error)) {
//        echo "Usuário já existente, ";
//    }
//}

// Redirect back to the pomodoro.php page
header("Location: pomodoro.php");
?>