<?php
// Basic function declaration
function fullName($firstName, $lastName = 'Default') {
    return "$firstName $lastName";
}

// Example usage with required and optional parameters
echo fullName('Mike', 'Taylor') . "\n";  // Output: Mike Taylor
echo fullName('Mike') . "\n";            // Output: Mike Default

// Function with variable params
function concatenateNames(...$params) {
    return implode(' ', $params);
}
// Example usage
echo concatenateNames('John', 'Mike', 'Sarah') . "\n";  // Output: John Mike Sarah

// Closure function with example
$route = function() {
    return 'welcome';
};
echo $route() . "\n";  // Output: welcome

// Arrow function with example
$welcome = fn() => 'welcome';
echo $welcome() . "\n";  // Output: welcome

// Type hinting example
function display(string $first, string $last): string {
    return "$first $last";
}
echo display('John', 'Doe') . "\n";  // Output: John Doe

// Nullable parameter example
function displayName(?string $name): string {
    return $name ?? 'Anonymous';
}
echo displayName(null) . "\n";  // Output: Anonymous
echo displayName('Mike') . "\n"; // Output: Mike

// Union type example (PHP 8+)
function processData(string|int $data): string {
    return (string)$data;
}
echo processData(123) . "\n";      // Output: "123"
echo processData("hello") . "\n";  // Output: "hello"

// Mixed return type example (PHP 8+)
function logInfo(string $info): mixed {
    return $info ?? false;
}
echo logInfo("test") . "\n";  // Output: test

// Void return type example
function logMessage(string $info): void {
    echo "Logging: $info\n";
}
logMessage("Test message");  // Output: Logging: Test message