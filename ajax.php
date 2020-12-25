<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock." 
 */
require 'Calculator.php';
$obj = new Calculator();

if (isset($_POST['exoptr'])) {
    $action = $_POST['exoptr'];

    switch($action) {
    case'+':
        $opr1 = $_POST['temp'];
        $opr2 = $_POST['num'];
        $result = $obj->addFunction($opr1, $opr2);
        echo $result;
        break;
    case'-':
        $opr1 = $_POST['temp'];
        $opr2 = $_POST['num'];
        $result = $obj->subFunction($opr1, $opr2);
        echo $result;
        break;
    case'*':
        $opr1 = $_POST['temp'];
        $opr2 = $_POST['num'];
        $result = $obj->mulFunction($opr1, $opr2);
        echo $result;
        break;
    case'/':
        $opr1 = $_POST['temp'];
        $opr2 = $_POST['num'];
        $result = $obj->divFunction($opr1, $opr2);
        echo $result;
        break;
    case'=':
        $result = $obj->equalFunction();
        echo $result;
        break;
    }
}
?>