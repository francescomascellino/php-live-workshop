<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* 
var_dump($_SESSION);

var_dump(session_status(), "
_DISABLED = 0
_NONE = 1
_ACTIVE = 2");
 */

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
    <div class="card text-center p-5 my-5">
        <h1>GO TO LOGIN PAGE</h1>
    </div>
</div>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>

</body>

</html>