<?php

class Shape {

    const SHAPE_TYPE = 1;
    public $name;
    protected $length;
    protected $width;
    private $id;

    function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

/*
Getter and Setter methods for $name property
*/
    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
        return $name;
    }

/*
Getter method for $id property
*/
    function getId() {
        return $this->id;
    }

/*
Area method to calculate and return the area of the Shape object
*/
    public function area($length, $width) {
        $this->length = $length;
        $this->width = $width;
        
        $area = $length x $width;
        return $area;
    }

}
