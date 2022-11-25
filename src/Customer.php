<?php
namespace  Satrio\Librarycomposer;
class Customer {
    public function __construct(private string $hello="satrio w" )
    {
    }
    public function  Hello():string {
        return  "Hello My name is $this->hello";
    }
}