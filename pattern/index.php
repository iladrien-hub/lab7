<?php

class Table {
    function __construct() {
        echo 'Table.__construct()</br>';
    }
}

class Chair {
    function __construct() {
        echo 'Chair.__construct()</br>';
    }
}

interface iFurnitureFactory {
//    Factory
    function createFurniture();
}

class TableFactory implements iFurnitureFactory {
    function createFurniture () {
        return new Table();
    }
}

class ChairFactory implements iFurnitureFactory {
    function createFurniture () {
        return new Chair();
    }
}

// Дуже крута функція на 1кк строк
function test(iFurnitureFactory $factory) {
    $arr= array();
    $arr["first"] = $factory->createFurniture();
    $arr[2] = $factory->createFurniture();
    $arr["third"] = $factory->createFurniture();
    var_dump($arr);
    echo '</br>';
    foreach ($arr as $item) {
        echo get_class($item).'</br>';
    }
    echo '</br></br>';
}

test(new ChairFactory());
test(new TableFactory());

?>