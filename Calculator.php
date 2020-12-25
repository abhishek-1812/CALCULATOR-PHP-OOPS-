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
/**
 * Calculator Class 
 * 
 * @category Class
 * @package  Calcuation
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock." 
 */
class Calculator
{
    public $result;
    /**
     * Add Function
     * 
     * @param opr1 $opr1 
     * @param opr2 $opr2 
     * 
     * @return addfunction()
     */
    public function addFunction($opr1, $opr2)
    {
        $result = ($opr1 + $opr2);
        return $result;
    }
    /**
     * Add Function
     * 
     * @param opr1 $opr1 
     * @param opr2 $opr2 
     * 
     * @return addfunction()
     */
    public function subFunction($opr1, $opr2)
    {
        $result = ($opr1 - $opr2);
        return $result;
    }
    /**
     * Add Function
     * 
     * @param opr1 $opr1 
     * @param opr2 $opr2 
     * 
     * @return addfunction()
     */
    public function mulFunction($opr1, $opr2)
    {
        $result = ($opr1 * $opr2);
        return $result;
    }
    /**
     * Add Function
     * 
     * @param opr1 $opr1 
     * @param opr2 $opr2 
     * 
     * @return addfunction()
     */
    public function divFunction($opr1, $opr2)
    {
        $result = ($opr1 / $opr2);
        return $result;
    }
    /**
     * Equal Function
     *
     * @return addfunction()
     */
    public function equalFunction()
    {
        //$result = ($opr1 / $opr2);
        //$result;
        return $result;
    }
}
?>