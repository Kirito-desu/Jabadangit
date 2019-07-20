<?php
require("UserModel.php");


//Case1: Inserting record
// echo "Case 1 result: ";
// var_dump($model->insert());

//Case2: updating record
// echo "Case 2 result: ";
// var_dump($model->update(4));
// echo "Name Updated";


//Case3: Read All record
echo "Case 3 result: ";
var_dump($model->readAll());

//Case4: Delete record
// echo "Case 4 result: ";
// var_dump($model->delete(4));


//Case6: updating record with a non-existing ID
// echo "Case 6 result: ";
// var_dump($model->update('t  '));
//echo "Not Updated";

//Case7: Deleting record with a non-existing ID
// echo "Case 7 result: ";
// var_dump($model->delete('d'));
?>