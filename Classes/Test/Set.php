<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 17.10.2017
 * Time: 17:00
 */

namespace Classes\Test;


class Set
{
    private $questions = [];

    public function __construct()
    {
    }

    public function addQuestion(Question $question){
        array_push($this->questions, $question);
    }

    public function getQuestions(){
        foreach ($this->questions as $question){
            ?>
            <li class="list-group-item">
                <?= $question->getDescription()?>
            </li>
            <?
        }
    }
}