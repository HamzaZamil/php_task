<?php
// public/register.php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$authController = new AuthController();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $authController->register();
} else {
    require_once __DIR__ . '/../app/views/register.php';
}
?>
