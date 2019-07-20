<?php
require("Database.php");
$dbObj = new Database();
//Case 1  Inserting data using valid SQL insert command 
$result = $dbObj->execute("INSERT INTO tbluser(name,email,username,password) VALUES ('mel','mel@g.com','mel','pas123')");
 echo "Case 1 result: ".$result;  

//Case 2 Updating data using valid SQL update command
// $result = $dbObj->execute("UPDATE tbluser SET name='Melvin J' WHERE id=1");
// echo "Case 2 result: ".$result;

//Case 3 Extracting data using valid SQL select command.
// $result = $dbObj->execute("SELECT * FROM tbluser");
// echo "Case 3 result: ".$result;

//Case 4 Deleting data using valid SQL delete command.
// $result = $dbObj->execute("DELETE FROM tbluser WHERE id=1");
// echo "Case 4 result: ".$result;

//Case 5 Inserting data using invalid SQL insert command
// $result = $dbObj->execute("INSERT INTO tbluser(name,email,usermane,password) VALUES ('mel','mel@g.com','mel','pas123')");
//  echo "Case 5 result: ".$result;

//Case 6 Updating data using invalid SQL update command
// $result = $dbObj->execute("UPDATE tblusir SET name='Melvin J' WHERE id=1");
// echo "Case 6 result: ".$result;
//echo "Name Updated";

//Case 7 Extracting data using invalid SQL select command.
// $result = $dbObj->execute("SELECT * FROM tbluses");
// echo "Case 7 result: ".$result;

//Case 8 Deleting data using invalid SQL delete command.
// $result = $dbObj->execute("DELETE FROM tbluwer WHERE id=1");
// echo "Case 8 result: ".$result;

?>

