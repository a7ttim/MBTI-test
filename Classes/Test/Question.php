<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 17.10.2017
 * Time: 16:56
 */

namespace Classes\Test;


class Question
{
    private $name;
    private $description;
    private $reverse;

    public function __construct($name, $description, $reverse = false)
    {
        $this->name = $name;
        $this->description = $description;
        $this->reverse = $reverse;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getReverse()
    {
        return $this->reverse;
    }
}