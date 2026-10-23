<?php
header('Content-Type: text/plain');
echo "PHP version: " . phpversion() . "\n";
echo "SAPI: " . php_sapi_name() . "\n";
echo "session.upload_progress.enabled: " . ini_get('session.upload_progress.enabled') . "\n";
echo "session.serialize_handler: " . ini_get('session.serialize_handler') . "\n";