<?php
namespace TudublinTest;

use Tudublin\ShoppingList;
use PHPUnit\Framework\TestCase;

class Type3_Validation_Test extends TestCase
{


    //--------------------------------------------
    // type 3 tests = TYPE_3_Validation
    //--------------------------------------------

    public function test_TYPE_3_01_Validation_LastErrorNoneAfterValidConstruction()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 'none';

        // Act
        $result = $myList->getLastError();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_3_02_Validation_LastErrorEmptyStringAfterInValidConstruction()
    {
        // Arrange
        $myList = new ShoppingList('');
        $expectedResult = 'empty name given';

        // Act
        $result = $myList->getLastError();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_TYPE_3_03_Validation_LastErrorEmptyStringAfterEmptySetName()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 'empty name given';
        $myList->setName('');

        // Act
        $result = $myList->getLastError();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_3_04_Validation_FalseWhenSubmitEmptyName()
    {
        // Arrange
        $myList = new ShoppingList('party');

        // Act
        $result = $myList->setName('');

        // Assert
        $this->assertFalse($result);
    }

    public function test_TYPE_3_05_Validation_EmptyItemNameLastErrorAfterAddToListWithEmptyString()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 'empty item name';
        $myList->addToList('');

        // Act
        $result = $myList->getLastError();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

}
