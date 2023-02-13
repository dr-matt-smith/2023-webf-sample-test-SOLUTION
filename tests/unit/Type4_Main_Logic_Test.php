<?php
namespace TudublinTest;

use Tudublin\ShoppingList;
use PHPUnit\Framework\TestCase;

class Type4_Main_Logic_Test extends TestCase
{
    // add the "assetThrows()" trait to this class ...
    use \Codeception\AssertThrows;

    //--------------------------------------------
    // type 4 tests = TYPE_4_MainLogic
    //--------------------------------------------

    public function test_TYPE_4_01_MainLogic_ItemAddedToListWhenValidItemName()
    {
        // Arrange
        $myList = new ShoppingList('party');
        $myList->addToList('apples');
        $expectedResult = [
            'bread', 'eggs', 'milk', 'apples'
        ];

        // Act
        $result = $myList->getList();

        // Assert
        $this->assertEquals($expectedResult, $result);
    }


    public function test_TYPE_4_02_MainLogic_Throws_Exception_from_getFirstItem_when_list_empty()
    {
        $this->assertThrows(\Exception::class, function() {
            // Arrange
            $myList = new ShoppingList('party');
            $myList->removeAllItems();

            // Act
            $result = $myList->getFirstItem();
        });
    }

}
