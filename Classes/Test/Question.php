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
    private $description;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }
}