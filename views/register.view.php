<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://unpkg.com/mvp.css">
</head>

<body>
    <h3>User Sign Up</h3><br>
    <p>Already Have An Account ! Sign In Now.</p>
    <a href="./login.view.php">Sign In</a>

    <?php if (isset($_SESSION['success'])) : ?>
        <div>
            <strong style="color: red;"><?= $_SESSION['success'] ?></strong>
        </div>
    <?php endif; ?>

    <form action="../app/components/Register.component.php" method="POST">
        <!-- Name -->
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <?php if (isset($_SESSION['empty_fields'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['empty_fields'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <!-- Email -->
        <div>
            <label for="email">email:</label>
            <input type="email" name="email" id="email">
            <?php if (isset($_SESSION['invalid_email'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['invalid_email'] ?></strong>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['email_taken'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['email_taken'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <!-- Password -->
        <div>
            <label for="password">password:</label>
            <input type="password" name="password" id="password">
            <?php if (isset($_SESSION['password_invalid'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['password_invalid'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <!-- Confirm Password -->
        <div>
            <label for="confirm_password">confirm_password:</label>
            <input type="password" name="confirm_password" id="confirm_password">
            <?php if (isset($_SESSION['password_match'])) : ?>
                <div>
                    <strong style="color: red;"><?= $_SESSION['password_match'] ?></strong>
                </div>
            <?php endif; ?>
        </div>
        <div>
            <button type="submit" name="submitBtn">Registers</button>
        </div>
    </form>
</body>

</html>

<?php session_unset(); ?>