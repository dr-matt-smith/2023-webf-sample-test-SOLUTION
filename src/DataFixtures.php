<?php

namespace Tudublin;

class DataFixtures
{
    public function getObjects()
    {
        $objects = [];

        $o1 = new Module();
        $o1->setName('Web Framework Development');
        $o1->setYear(3);
        $o1->setId(1);
        $objects[1] = $o1;

        $o2 = new Module();
        $o2->setName('Software Development');
        $o2->setYear(2);
        $o2->setId(2);
        $objects[2] = $o2;


        $o3 = new Module();
        $o3->setName('Final Year Project');
        $o3->setYear(4);
        $o3->setId(3);
        $objects[3] = $o3;

        return $objects;
    }
}