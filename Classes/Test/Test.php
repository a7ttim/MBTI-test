<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 17.10.2017
 * Time: 17:49
 */

namespace Classes\Test;
use Classes\Test\{Set, Question};


class Test
{
    private $sets = [];

    public function addSet(Set $set){
        array_push($this->sets, $set);
    }

    public function getTest($number){
        ?>
        <ul class="list-group">
            <?$this->sets[$number]->getQuestions()?>
        </ul>
        <?
    }
}