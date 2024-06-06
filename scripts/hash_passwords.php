<?php

// Set the password you want to hash
$password = 'ror';

// Hash the password using Bcrypt
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo "Hashed Password: " . $hashedPassword . PHP_EOL;
