<?php

defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/..'));

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH . '/../');
$dotenv->safeLoad();

$config = [
    'api' => [
        'key' => $_ENV['API_KEY'] ?? 'abcd'
    ]
];