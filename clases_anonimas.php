<?php

abstract class user{
    abstract function greet( string $name )
    public $age;
    protected $gender;
}

$female_user = (
                new class extends user
                {
                    public function greet( string $name )
                    {
                        return 'Hello, Ms. ' . $name;
                    }
                }
            );

echo '<pre>';

var_dump($female_user);