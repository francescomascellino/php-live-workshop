<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/Helpers/Functions.php';

require_once __DIR__ . '/Helpers/DB.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (
    isset($_POST['username'])
    &&
    isset($_POST['password'])
) {
    var_dump($_POST);

    $username = $_POST['username'];
    $plain_text_password = $_POST['password'];
    $hashed_password = md5($plain_text_password);


    // establish a DB connection
    /*     
    $connection = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($connection && $connection->connect_error) {
        throw new Exception("DB Connection Failed" . $connection->connect_error, 1);
    } 
    */
    $connection = DB::connect();

    # ATTENTION TO SQL INJECTIONS
    // $sql = "SELECT `ID`, `username` FROM `users` WHERE `username` ='" . $username . "' AND `password` = '" . $hashed_password . "';";
    $sql = "SELECT `ID`, `user` FROM `users` WHERE `user` = ? AND `password` = ?";

    $statement = $connection->prepare($sql);

    $statement->bind_param('ss', $username, $hashed_password);

    $statement->execute();

    $result = $statement->get_result();

    if ($result->num_rows > 0) {
        // echo "ENTERED THE RESTRICTERD AREA";

        $user = $result->fetch_assoc();

        $_SESSION['user_id'] = $user['ID'];

        $_SESSION['user_name'] = $user['user'];

        header('Location: ./dashboard.php');
    } else {
        dd($connection, $result);
    }

    // close DB connection
    //$connection->close();
    DB::close_connection($connection);
}

include __DIR__ . '/Partials/Head.php';

?>

<div class="banner bg-dark text-white py-3">
    <div class="container">
        <div class="row">
            <h1>Login</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="card p-5 my-5">
        <h5 class="text-muted text-uppercase">login</h5>

        <form action="" method="POST">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="admin" aria-describedby="usernameHelper">
                <small id="usernameHeloer" class="text-muted">Type your username</small>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="password" aria-describedby="passwordHelper">
                <small id="passwordHelper" class="text-muted">Type your password</small>
            </div>

            <button type="submit">Login</button>

        </form>

    </div>
</div>


<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>

</body>

</html>