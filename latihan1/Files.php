<?php
// Get the current dir
$current_dir = __DIR__;

// Check if file exist
if (file_exists('/posts/first.txt')) {
  // Do something with the file
  $file = fopen('/posts/first.txt', 'r');
  // Read and process the file
  fclose($file);
}

// Read file content into one variable
$post = file_get_contents($file);

//File read
$file = fopen("test.txt", "r");

//Output lines until EOF is reached
while(! feof($file)) {
  $line = fgets($file);
  echo $line. "<br>";
}
fclose($file);

// File write (csv)
$file = fopen('export.csv', 'a');
$array = ['name' => 'Mike', 'age' => 45];

//Write key name as csv header
fputcsv($file, array_keys($array[0]));

//Write lines (format as csv)
// foreach ($array as $row) {
//     fputcsv($file, $row);
// }
fclose($file);