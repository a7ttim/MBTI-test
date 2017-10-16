<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 04.10.2017
 * Time: 23:37
 */

namespace Classes\Types;

use Classes\Preferences\Extraversion;
use Classes\Preferences\Preference;

final class Type
{
    public $name;
    public $title;
    public $description;
    public $rarity;
    public $functions;

    public function __construct($arr)
    {
        $this->title = $arr['title'];
        $this->name = $arr['name'];
        $this->rarity = $arr['rarity'];
        $this->description = $arr['description'];
    }

    public function setFunctions(Preference $functions){
        $this->functions = $functions;
    }

    public function getDescription(){
        ?>
        <h1>
            <?=$this->title?>
        </h1>
        <h3>
            <span class="badge badge-primary">
                <?=$this->name?>
            </span>
        </h3>
        <ul class="list-group">
            <?
            $this->functions->getDescription();
            ?>
        </ul>
        <br>
        <h2>
            Описание
        </h2>
        <p class="text-justify">
            <?=$this->description['first']?>
        </p>
        <p class="text-justify">
            <?=$this->description['second']?>
        </p>
        <p class="text-justify">
            <?=$this->description['third']?>
        </p>
        <p class="text-justify">
            <?=$this->description['fourth']?>
        </p>
        <?
    }

}