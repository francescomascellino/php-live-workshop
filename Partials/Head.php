<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN' crossorigin='anonymous'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="http://localhost/PHP/php-live-workshop/">Home</a>
                        <!-- <a class="nav-link active" aria-current="page" href="http://localhost/PHP/php-live-workshop/login.php">Login <i class="fa-solid fa-lock" aria-hidden="true"></i></a> -->

                        <?php if (isset($_SESSION['user_id'])) : ?>

                            <a class="nav-link" href="http://localhost/PHP/php-live-workshop/dashboard.php">Dashboard <i class="fa-solid fa-table"></i></a>

                            <form action="http://localhost/PHP/php-live-workshop/logout.php" method="POST" class="d-flex align-items-center"><input class="border-0 border-transparent bg-transparent" type="submit" value="Logout"> <i class=" fa-solid fa-right-from-bracket"></i></form>

                        <?php else : ?>
                            <a class="nav-link" href="http://localhost/PHP/php-live-workshop/login.php">Log in <i class="fa-solid fa-right-to-bracket"></i></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </nav>
    </header>