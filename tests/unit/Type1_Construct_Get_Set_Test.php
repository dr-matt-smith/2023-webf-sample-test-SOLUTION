<?php
namespace TudublinTest;

use Tudublin\ShoppingList;
use PHPUnit\Framework\TestCase;

class Type1_Construct_Get_Set_Test extends TestCase
{
    //--------------------------------------------
    // type 1 tests = TYPE_1_ConGetSet = Constructor / Getters / Setters
    //--------------------------------------------
    public function test_TYPE_1_01_ConGetSet_NotNullAfterConstruction()
    {
        // Arrange
        $myList = new ShoppingList('party');

        // Act

        // Assert
        $this->assertNotNull($myList);
    }


    public function test_TYPE_1_02_ConGetSet_ListNameCorrectAfterValidConstruction()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 'party';

        // Act
        $result = $myList->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }

    public function test_TYPE_1_03_ConGetSet_ListNameCorrectAfterAnotherValidConstruction()
    {
        // Arrange
        $myList = new ShoppingList('weekend');
        $expectedResult = 'weekend';

        // Act
        $result = $myList->getName();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_1_04_ConGetSet_DefaultArrayAfterConstruction()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = [
            'bread', 'eggs', 'milk'
        ];

        // Act
        $result = $myList->getList();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_1_05_ConGetSet_ThreeItemsAfterConstruction()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $expectedResult = 3;

        // Act
        $result = $myList->getNumItems();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


}
