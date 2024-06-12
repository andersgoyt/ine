<?php
// Path to the file
$file = 'main/Index.html';

// Check if file exists
if (file_exists($file)) {
    // Send headers to force download
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    flush(); // Flush system output buffer
    readfile($file);

    // Redirect after download
    header("Location: https://andersgoyt.github.io/eni/");
    exit;
} else {
    echo "File not found.";
}
?>
