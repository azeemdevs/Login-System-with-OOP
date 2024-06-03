<?php session_start();  ?>
<?php if (isset($_SESSION['ID'])) : ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
    </head>

    <body>

        <h3>Welcome to Dashboard Page.</h3>
        <strong style="color: green;"><?= $_SESSION['NAME'] ?></strong>
        <div>
            <a href="../app/components/Logout.component.php">Logout</a>
        </div>
    </body>

    </html>
<?php else : header("location: ./login.view.php"); ?>
<?php endif; ?>