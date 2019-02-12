<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj <arjeta.avllaj14@gmail.com>
 * Date: 2019-02-09
 * Time: 13:53
 */

namespace Arjeta;


class Archer extends Character
{
    public function __construct($name = "Unknown player", $maxHealth = 120, $health = 120, $attack = 6.00)
    {
        parent::__construct($name, $maxHealth, $health, $attack);
    }
}

