<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['staffName'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    if ($name === '' || $email === '' || $password === '') { $error = 'Please complete all fields.'; }
    else { $_SESSION['staff_name'] = $name; header('Location: index.php'); exit; }
}
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Netheret | Login</title><link rel="stylesheet" href="style.css"></head><body>
<header><img class="brand-logo" src="logo.svg" alt="Netheret logo"><h1>NETHERET IT SUPPORT</h1></header>
<main class="login-container"><div class="login-title">LOGIN</div><?php if (!empty($error)) echo '<p class="message">'.htmlspecialchars($error).'</p>'; ?>
<form method="post" action="login.php"><div class="form-row"><label for="staffName">STAFF NAME:</label><input id="staffName" name="staffName" required></div><div class="form-row"><label for="email">EMAIL:</label><input id="email" name="email" type="email" required></div><div class="form-row"><label for="password">PASSWORD:</label><input id="password" name="password" type="password" required></div><div class="form-actions"><button type="submit">LOGIN</button><p>Don't have an account? <a href="register.php">Register here</a></p></div></form></main></body></html>
