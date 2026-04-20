<?php

$router = new Router;

$routes = [
    '/' => 'view/login/loginPage.php',
    '/login' => 'view/login/loginPage.php',
    '/register' => 'view/login/registerPage.php',
];

if (isset($_SESSION['username'])) {
    $routes = [
        '/' => 'view/bookshelf.php',
        '/bookshelf' => 'view/bookshelf.php',
    ];
}

if (isset($_SESSION['admin'])) {
    $routes = [
        '/' => 'view/dashboard/dashboard.php',
        '/bookshelf' => 'view/bookshelf.php',
        '/dashboard' => 'view/dashboard/dashboard.php',
        '/dashboard/admins' => 'view/dashboard/admins.php',
        '/dashboard/users' => 'view/dashboard/users.php',
        '/dashboard/books' => 'view/dashboard/books.php',
        '/bookshelf' => 'view/bookshelf.php',
    ];
}

if (! isset($_SESSION['username']) && ! in_array($_SERVER['REQUEST_URI'], ['/', '/login', '/register'])) {
    header('Location: /login');
    exit();
}

$requestRoute = $_SERVER['REQUEST_URI'];

if (array_key_exists($requestRoute, $routes)) {
    include $routes[$requestRoute];
} else {
    // header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}

foreach ($routes as $route => $file) {
    $router->addRoute($route, $file);
}

$router->dispatch();

foreach ($routes as $route => $file) {
    $router->addRoute($route, $file);
}
