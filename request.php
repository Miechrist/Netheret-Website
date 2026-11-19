<?php
session_start();
if (!isset($_SESSION['staff_name'])) { header('Location: login.php'); exit; }
?>
<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Netheret | New Request</title><link rel="stylesheet" href="style.css"><script src="script.js" defer></script></head><body>
<header><img class="brand-logo" src="logo.svg" alt="Netheret logo"><h1>NETHERET IT SUPPORT</h1></header><main class="content"><h1>NEW SUPPORT REQUEST</h1><div class="form-container">
<div class="form-row"><label for="customer">Customer:</label><input id="customer" type="text" required></div><div class="form-row"><label for="problem">Problem:</label><textarea id="problem" required></textarea></div><div class="form-row"><label for="priority">Priority:</label><select id="priority"><option value="">Select</option><option>Low</option><option>Medium</option><option>High</option><option>Urgent</option></select></div><div class="form-row"><label for="tier">Support Tier:</label><select id="tier"><option value="">Select</option><option>Tier 1</option><option>Tier 2</option><option>Tier 3</option></select></div><button class="main-button" type="button" onclick="submitRequest()">SUBMIT REQUEST</button></div><p><a href="index.php">Return to dashboard</a></p></main></body></html>
