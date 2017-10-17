<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 17.10.2017
 * Time: 17:14
 */

use Classes\Preferences\{Extraversion, Introversion, Intuition, Sensing, Thinking, Feeling, Perceiving, Judging};
use Classes\Types\{Type};
use Classes\Test\{Test, Set, Question};

$test = new Test();
$first = new Set();
$first->addQuestion(new Question('Кол-во пальцев на вашей левой руке?'));
$first->addQuestion(new Question('Кол-во пальцев на вашей левой ноге?'));
$test->addSet($first);
$test->getTest(0);