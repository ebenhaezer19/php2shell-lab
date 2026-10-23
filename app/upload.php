<?php
// Endpoint minimal untuk mengamati perilaku session.upload_progress
session_start();
header('Content-Type: text/plain');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Session ID: " . session_id() . "\n";
    echo "Upload progress key: " . ($_POST['PHP_SESSION_UPLOAD_PROGRESS'] ?? '(none)') . "\n";
    echo "Session save path: " . session_save_path() . "\n";
    echo "Files in save path:\n";
    foreach (glob(session_save_path() . '/sess_*') as $f) {
        echo "  " . basename($f) . " (" . filesize($f) . " bytes)\n";
    }
} else {
    echo "POST multipart dengan field PHP_SESSION_UPLOAD_PROGRESS untuk menguji.\n";
}