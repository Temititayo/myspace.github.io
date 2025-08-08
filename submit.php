<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$timestamp = date("Y-m-d H:i:s");

// Define CSV file path (in an online-accessible folder)
$file = 'data/entries.csv';

// Create folder if it doesn't exist
if (!file_exists('data')) {
    mkdir('data', 0777, true);
}

// Open file and append data
$handle = fopen($file, 'a');
if (filesize($file) === 0) {
    fputcsv($handle, ['Name', 'Email', 'Timestamp']);
}

// Write the entry
fputcsv($handle, [$name, $email, $course, $message, $timestamp]);
fclose($handle);




// Redirect or confirm
echo "Thanks for submitting!";
?>
