<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 17.10.2017
 * Time: 17:14
 * @author A7ttim
 */

use Classes\Preferences\{Extraversion, Introversion, Intuition, Sensing, Thinking, Feeling, Perceiving, Judging};
use Classes\Types\{Type};
use Classes\Test\{Test, Set, Question};

$test = new Test();
$set = new Set();
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$set->addQuestion(new Question('ei_1', 'Вы любите спокойную обстановку, которая необходима вам для концентрации', true));
$set->addQuestion(new Question('ei_2', 'Вам трудно начать говорить, когда вы еще четко не сформулировали свою мысль в уме', true));
$set->addQuestion(new Question('ei_3', 'Вы чувствуете себя лучше, проведя некоторое время в компании друзей'));
$set->addQuestion(new Question('ei_4', 'В многолюдном помещении вы предпочитаете держаться у стены, а не в центре комнаты', true));
$set->addQuestion(new Question('ei_5', 'Вам нравится быть в центре внимания'));
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$set->addQuestion(new Question('ns_1', 'Вы предпочтете старый, испытанный способ решения задачи, новому и не проверенному, но возможно, лучшему ', true));
$set->addQuestion(new Question('ns_2', 'Вы легко читаете между строк и понимаете метафоры'));
$set->addQuestion(new Question('ns_3', 'Вам больше нравится думать о будущих перспективах, чем о сегодняшнем дне'));
$set->addQuestion(new Question('ns_4', 'Вас больше интересует то, что есть, чем то, что может потенциально произойти', true));
$set->addQuestion(new Question('ns_5', 'Самовыражение на работе для вас гораздо важнее стабильности'));
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$set->addQuestion(new Question('tf_1', 'Эмоциональное кино легко может заставить вас загрустить или поднять настроение', true));
$set->addQuestion(new Question('tf_2', 'Справедливость важнее милосердия'));
$set->addQuestion(new Question('tf_3', 'В деловых вопросах вы способны быть требовательным и жестким к коллегам и сотрудникам, даже если это ваши родные или друзья'));
$set->addQuestion(new Question('tf_4', 'Вы не возражаете против критики, даже резкой, если аргументы обоснованы'));
$set->addQuestion(new Question('tf_5', 'Вы охотно отвлекаетесь от работы, чтобы ответить на телефонный звонок', true));
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$set->addQuestion(new Question('jp_1', 'Разработка плана, которого необходимо придерживаться, это одна из важнейших составляющих каждого дела или проекта'));
$set->addQuestion(new Question('jp_2', 'Поспешное решение лучше, чем никакого', true));
$set->addQuestion(new Question('jp_3', 'Вы считаете, что все в жизни нужно держать под контролем'));
$set->addQuestion(new Question('jp_4', 'Вы скорее любознательны, чем решительны', true));
$set->addQuestion(new Question('jp_5', 'Вас часто обвиняют в нерешительности', true));
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$test->addSet($set);
if ($_GET['submit']){
    require_once('types.php');
    $extraversion = 0;
    for ($i = 1; $i < 6; $i++){
        $extraversion += $_GET['ei_'.$i];
    }
    $intuition = 0;
    for ($i = 1; $i < 6; $i++){
        $intuition += $_GET['ns_'.$i];
    }
    $thinking = 0;
    for ($i = 1; $i < 6; $i++){
        $thinking += $_GET['tf_'.$i];
    }
    $judging = 0;
    for ($i = 1; $i < 6; $i++){
        $judging += $_GET['jp_'.$i];
    }
    $functions = ($extraversion > 0) ? new Extraversion() : new Introversion();
    $functions = ($intuition > 0) ? new Intuition($functions) : new Sensing($functions);
    $functions = ($thinking > 0) ? new Thinking($functions) : new Feeling($functions);
    $functions = ($judging) ? new Judging($functions) : new Perceiving($functions);
    $type = $types[$functions->getType()];
    $type->setFunctions($functions);
    $type->getDescription();
    ?>
    <button class="btn btn-lg btn-primary cursor-pointer" onclick='location.href="index.php";'>
        Ещё раз
    </button>
    <?
}
else
$test->getTest();