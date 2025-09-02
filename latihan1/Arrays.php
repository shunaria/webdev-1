<?php
// Initialize arrays
$example = ['Mike', 50.2, true, ['10', '20']];
$names = ['Mike', 'Peter', 'Shawn', 'John'];
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$text = 'Mike,Shawn,John';
$people = [];

// Array operations
$secondName = $names[1]; // Access specific element
echo $example[3][1]; // Access nested array

// Array modifications
$names[] = 'Michael'; // Add element
$array3 = array_merge($array1, $array2); // Merge arrays
$array4 = [...$array1, ...$array2]; // Spread operator merge

// Array manipulations
$people = ['John', ...$names];
unset($names[1]); // Remove element

// Array conversions
echo implode(', ', $names); // Array to string
$nameArray = explode(',', $text); // String to array

// Array iteration
foreach($names as $name) {
    echo $name . "\n";
}

// Associative array
$person = [
    'age' => 45,
    'genre' => 'men'
];
$person['name'] = 'Mike';

foreach($person as $key => $value) {
    echo "$key: $value\n";
}

// Array functions
print_r(array_keys($person));
print_r(array_values($person));

// Array filtering
$filteredPeople = array_filter($people, function($person) {
    return !empty($person);
});

// Array mapping
$onlyNames = array_map(function($person) {
    return ['name' => $person];
}, $people);

// Search in multidimensional array
$items = [
    ['id' => '100', 'name' => 'product 1'],
    ['id' => '200', 'name' => 'product 2'],
    ['id' => '300', 'name' => 'product 3'],
    ['id' => '400', 'name' => 'product 4']
];

$found_key = array_search('product 3', array_column($items, 'name'));