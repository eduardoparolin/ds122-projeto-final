<?php
if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $conn_string = "host=localhost port=5432 dbname=postgres user=postgres password=senha123";
    $dbconn = pg_connect($conn_string);

    $result = @pg_query($dbconn, "select * from aula_users where \"user\" = '$user' and pass = '$pass'");
    if ($result) {
        $rows2 = pg_num_rows($result);
//        echo $rows2;
        if ($rows2 == 1) {
//            echo $rows2;
            header('Location: '.'pomodoro.php');
            die();
        } else {
            echo "Erro ao logar.. ";
        }
    } else {
        $error = pg_last_error($dbconn);
            echo "Erro ao logar ";
    }


} else {
    echo "Erro... ";
}
?><a href="index.php">clique aqui</a> para voltar
