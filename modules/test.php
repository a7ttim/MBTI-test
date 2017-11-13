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
//$first->addQuestion(new Question('tf_1', ''));
//$first->addQuestion(new Question('jp_1', ''));
//$first->addQuestion(new Question('ns_1', ''));
$first->addQuestion(new Question('ei_1', 'Вы любите спокойную обстановку, которая необходима вам для концентрации', true));
$first->addQuestion(new Question('ei_2', 'Вам трудно начать говорить, когда вы еще четко не сформулировали свою мысль в уме', true));
$first->addQuestion(new Question('ei_3', 'Вы чувствуете себя лучше, проведя некоторое время в компании друзей'));
$first->addQuestion(new Question('ei_4', 'В многолюдном помещении вы предпочитаете держаться у стены, а не в центре комнаты', true));
$first->addQuestion(new Question('ei_5', 'Вам нравится быть в центре внимания'));
$test->addSet($first);
$test->getTest(0);