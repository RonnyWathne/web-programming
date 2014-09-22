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

$c = new Person("John", 32, 123);
echo $c->getName() . "\n";
Person::saySomething();
    
?>
