<?php
//Throw Error
if ($i++) {
    throw new Exception('Data format error');
}

//Catch the Error
try {
  $db->checkData($data);
} catch (Exception $e) {
    echo $e->getMessage();
}