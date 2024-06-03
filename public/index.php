<?php

if (!isset($_SESSION['ID'])) {
    header("location: ../views/login.view.php", true, 302);
    exit();
} else {
    header("location: ../views/Dashboard.view.php", true, 302);
    exit();
}
