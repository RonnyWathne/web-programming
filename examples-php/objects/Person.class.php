<?php
/**
 * Simple class example
 */

class Person {
    const CONSTANT = "beer";

    // public, protected, and private  are set arbitrarily here,
    // just to demonstrate the various visibility options
    public $name;
    protected $age;
    private $_id;
    
    function __construct($name, $age, $id) {
        $this->name = $name;
        $this->age = $age;
        $this->_id = $id;
    }
    
    function getName() {
        return $this->name;
    }
    
    static function saySomething() {
        echo self::CONSTANT . "\n";
    }
}

// example usage
$c = new Person("John", 32, 123);
echo $c->getName() . "\n";
Person::saySomething();

// storing Person objects in an array
$persons = array();
$persons[] = $c;
$persons[] = new Person("Mary", 33, 122);
$persons[] = new Person("Steve", 23, 999);

for ($i = 0; $i < count($persons); $i++) {
    echo $persons[$i]->getName() . "\n";
}

?>
