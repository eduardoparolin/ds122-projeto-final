<?php
// Get the task id from the URL
$tid = (string) $_GET['tid'];

// Connect to the database
$conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=senha123";
$dbconn = pg_connect($conn_string);

// Prepare the SQL statement
$sql = "UPDATE aula_tasks
SET status = 2
WHERE tid = '$tid'";

// Execute the SQL statement
$result = pg_query($dbconn, $sql);
//
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