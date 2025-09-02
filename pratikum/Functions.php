<?php
// Basic function declaration
function fullName($firstName, $lastName = 'Default') {
    return "$firstName $lastName";
}

// Function call
echo fullName('Mike', 'Taylor');

// Function call with named parameters (PHP 8)
echo fullName(firstName: 'Mike', lastName: 'Taylor');

// Function with variable params
function concatenateNames(...$params) {
    return implode(' ', $params);
}

// Closure function
$route = function() {
    return 'welcome';
};

// Arrow function (PHP 7.4+)
$welcome = fn() => 'welcome';

// Typed parameter and return type
function display(string $first, string $last): string {
    return "$first $last";
}

// Nullable parameter type
function displayName(?string $name): string {
    return $name ?? 'Anonymous';
}

// Union type (PHP 8+)
function processData(string|int $data): string {
    return (string)$data;
}

// Intersection type (PHP 8.1+)
function countAndIterate(Iterator&Countable $value): int {
    return count($value);
}

// Mixed return type (PHP 8+)
function logInfo(string $info): mixed {
    return $info ?? false;
}

// Void return type
function logMessage(string $info): void {
    error_log($info);
}