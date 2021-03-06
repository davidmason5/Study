<?php
//A static property/method of a class can be accessed without creating an object of that class.

class myClass{
    static $myProperty = 42;
    static function myMethod(){
        echo self::$myProperty; //accesed by scope resolution operator ::
    } //self keyword is needed to access a static proiperty in class
}

myClass::myMethod(); //scope resolution operator again

//Final Keyword
/*The PHP final keyword defines methods that cannot be overridden in child classes. Classes that are defined final cannot be inherited.

This example demonstrates that a final method cannot be overridden in a child class:*/
class Father {
    final function useMoney() {
        echo "wisely";
      }
    }
    
    class Son extends Father { 
      public function sayHi() {
        echo "Hi!";
      }
    }

//Practice
class User {
    public $name;
    public $age;
    public static $minPassLength = 6; //can use this without instantating an object

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){ //don't use $this with static
            return true;
        } else {
            return false;
        }
    }
}

$password = 'Hello';
if(User::validatePass()){
    echo 'Password valid';
    } else {
        echo 'Password NOT valid';
}