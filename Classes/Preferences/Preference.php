<?php
/**
 * Created by PhpStorm.
 * User: A7ttim
 * Date: 04.10.2017
 * Time: 14:49
 */

namespace Classes\Preferences;

use Classes\Types\Type;

abstract class Preference
{
    public $symbol;
    public $name;
    public $description;

    public function getDescription(){
        ?>
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-center">
                <h5 class="mb-1 text-dark"><?=$this->name?></h5>
            </div>
            <p class="mb-1"><?=$this->description?></p>
        </div>
        <?
    }

    public function getType(){
        return $this->symbol;
    }
}