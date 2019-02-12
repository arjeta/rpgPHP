<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj  <arjeta.avllaj14@gmail.com>
 * Date: 2019-02-09
 * Time: 13:52
 */

namespace Arjeta;


class Fighter extends Character
{
    public function __construct($name = "Unknown player", $maxHealth = 80, $health = 80, $attack = 8.50)
    {
        parent::__construct($name, $maxHealth, $health, $attack);
    }
}
