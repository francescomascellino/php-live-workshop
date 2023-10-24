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

<div class="banner bg-dark text-white py-4 mb-5">
    <div class="container">
        Home
        <?php if (isset($_SESSION['user_id'])) : ?>
            <h2>Welcome <?= $_SESSION['user_name'] ?></h2>
        <?php else : ?>
            <h2>Please Login</h2>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <div class="card text-center p-5 my-5">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum vel ab aliquid itaque, eum optio iusto amet beatae ad at distinctio asperiores repudiandae delectus doloremque in necessitatibus ea maiores aut.</p>
    </div>
</div>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL' crossorigin='anonymous'></script>

</body>

</html>