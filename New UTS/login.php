<?php
session_start();

// Dummy username and password (replace with your authentication logic)
$validUsername = 'user';
$validPassword = 'password';

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === $validUsername && $password === $validPassword) {
    $_SESSION['loggedIn'] = true;
    header('Location: calculate_book.php');
    exit;
  } else {
    echo json_encode(['error' => 'Invalid username or password.']);
  }
} else {
  echo json_encode(['error' => 'Username and password are required.']);
}
?>
