<?php
    require("UserController.php");
    $usercontObj = new UserController();
    $id = 8;
    $name = "kirito";
    $email = "Kirito@y.com";
    $username = "Kirito.kun";
    $password = "Kirito147";
    
    //CASE#1: Inserting record
    echo "Test Case#1 result: ";
    var_dump($usercontObj->addUser($name,$email,$username,$password));
    echo "</br>";
    //CASE#2: Updating record
    echo "Test Case#2 result: ";
    var_dump($usercontObj->updateUser($id,$name,$email,$username,$password));
    echo "</br>";
    //CASE#3: Read All record
    echo "Test Case#3 result: ";
    var_dump($usercontObj->getAllUser());
    echo "</br>";
    //CASE#4: Delete record
    echo "Test Case#4 result: ";
    var_dump($usercontObj->deleteUser(25));
    echo "</br>";
    //CASE#5: Inserting record
    echo "Test Case#5 result: ";
    $usercontObj->addUser($name,$email,"",$password);
    echo "</br>";
    //CASE#6: Updating record
    echo "Test Case#6 result: ";
    $usercontObj->updateUser(7,$name,$email,"",$password);
    echo "</br>";
    //CASE#7: Updating record
    echo "Test Case#7 result: ";
    $usercontObj->updateUser(2,$name,$email,$username,$password);
    echo "</br>";
    //CASE#8: Delete record
    echo "Test Case#8 result: ";
    $usercontObj->deleteUser(2);
?>