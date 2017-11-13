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
                <h6>
                    <?= $question->getDescription()?>
                </h6>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-outline-danger cursor-pointer">
                        <input type="radio" name="<?= $question->getName() ?>" id="<?= $question->getName() ?>_1" value="<?= $question->getReverse() ? '+' : '-' ?>2" autocomplete="off">-2
                    </label>
                    <label class="btn btn-outline-danger cursor-pointer">
                        <input type="radio" name="<?= $question->getName() ?>" id="<?= $question->getName() ?>_2" value="<?= $question->getReverse() ? '+' : '-' ?>1" autocomplete="off">-1
                    </label>
                    <label class="btn btn-outline-secondary cursor-pointer">
                        <input type="radio" name="<?= $question->getName() ?>" id="<?= $question->getName() ?>_3" value="0" autocomplete="off" checked>0
                    </label>
                    <label class="btn btn-outline-info cursor-pointer">
                        <input type="radio" name="<?= $question->getName() ?>" id="<?= $question->getName() ?>_4" value="<?= $question->getReverse() ? '-' : '+' ?>1" autocomplete="off">+1
                    </label>
                    <label class="btn btn-outline-info cursor-pointer">
                        <input type="radio" name="<?= $question->getName() ?>" id="<?= $question->getName() ?>_5" value="<?= $question->getReverse() ? '-' : '+' ?>2" autocomplete="off">+2
                    </label>
                </div>
            </li>
            <?
        }
    }
}