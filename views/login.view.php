<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>

<body>
    <h3>User Login</h3><br>
    <p>Not Have An Account ! Sign Up Now.</p>
    <a href="./register.view.php">Sign Up</a>

    <?php if (isset($_SESSION['EMPTY_FIELD'])) : ?>
        <div>
            <strong style="color: red;"><?= $_SESSION['EMPTY_FIELD'] ?></strong>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])) : ?>
        <div>
            <strong style="color: red;"><?= $_SESSION['success'] ?></strong>
        </div>
    <?php endif; ?>

    <form action="../app/components/Login.component.php" method="POST">
        <!-- Email -->
        <div>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
            <?php if (isset($_SESSION['EMAIL_NOT_EXISTS'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['EMAIL_NOT_EXISTS'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <!-- Password -->
        <div>
            <label for="password">password:</label>
            <input type="password" name="password" id="password">
            <?php if (isset($_SESSION['WRONG_PASSWORD'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['WRONG_PASSWORD'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" name="submit">Sign in</button>
        </div>
    </form>
</body>

</html>

<?php session_unset(); ?>