<?php
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $host = getenv('DB_HOST');
    $conn_string = "host=$host port=5432 dbname=postgres user=postgres password=$pass";
    $dbconn = pg_connect($conn_string);

    $result = @pg_query($dbconn, "insert into aula_users values ('$user', '$pass')");
    if ($result) {
        echo "Usuário criado com sucesso! ";
    } else {
        $error = pg_last_error($dbconn);

        // you need to adapt this regex
        if (preg_match('/duplicate/i', $error)) {
            echo "Usuário já existente, ";
        }
    }


} else {
    echo "Erro...";
}
?><a href="login.php">clique aqui</a> para entrar
