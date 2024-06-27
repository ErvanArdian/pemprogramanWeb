<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
  // Redirect to login page if user is not logged in
  header('Location: login.html');
  exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form data
  if (!isset($_POST['book_title']) || !isset($_POST['total_pages']) || !isset($_POST['target_days'])) {
    // If form data is incomplete, redirect back to the calculation page with an error message
    header('Location: calculate_book.php?error=incomplete_data');
    exit;
  }

  // Extract form data
  $bookTitle = $_POST['book_title'];
  $totalPages = intval($_POST['total_pages']);
  $targetDays = intval($_POST['target_days']);

  // Calculate minimal pages per day
  $minimalPagesPerDay = ceil($totalPages / $targetDays);

  // Store the calculated data in session (optional)
  $_SESSION['book_title'] = $bookTitle;
  $_SESSION['total_pages'] = $totalPages;
  $_SESSION['target_days'] = $targetDays;
  $_SESSION['minimal_pages_per_day'] = $minimalPagesPerDay;

  // Redirect to the result page
  header('Location: result.php');
  exit;
} else {
  // If form is not submitted, redirect back to the calculation page
  header('Location: calculate_book.php');
  exit;
}
?>
