<?php
// Get the task id from the URL
$tid = (string) $_GET['tid'];

// Connect to the database
$host = getenv('DB_HOST');
$conn_string = "host=$host port=5432 dbname=postgres user=postgres password=$pass";
$dbconn = pg_connect($conn_string);

// Prepare the SQL statement
$sql = "UPDATE aula_tasks
SET status = 1,
    start_time = NOW()
WHERE tid = '$tid'";

// Execute the SQL statement
$result = pg_query($dbconn, $sql);

// Redirect back to the pomodoro.php page
header("Location: pomodoro.php");
?>