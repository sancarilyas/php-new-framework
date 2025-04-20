<?php
require_once 'vendor/autoload.php';

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
require_once 'config/config.php';

// Initialize the application
$app = new App\Core\Application(); 