<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../app/Helpers/DBConnection.php';
require_once __DIR__ . '/../app/Helpers/ApiHelper.php';

// Autoload classes
spl_autoload_register(function ($class) {
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/../' . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Get the page from the URL
$page = $_GET['page'] ?? 'welcome';
$controllerName = match ($page) {
    'sms' => 'App\Controllers\SMSController',
    'member' => 'App\Controllers\MemberController',
    'visitor' => 'App\Controllers\VisitorController',
    'success' => 'App\Controllers\AuthController',
    default => 'App\Controllers\AuthController',
};

if (class_exists($controllerName)) {
    $controller = new $controllerName();
    $controller->handleRequest();
} else {
    http_response_code(404);
    echo "404 - Page not found";
}
