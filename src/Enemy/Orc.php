<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj <arjeta.avllaj14@gmail.com>
 * Date: 2/13/19
 * Time: 7:13 PM
 */

namespace Arjeta\Enemy;


use Arjeta\Character;
use Arjeta\Util\Console;

/**
 * @property int maxHealth
 * @property int health
 * @property float attack
 */
class Orc implements EnemyInterface
{

    public function __construct($attack = 5.0, $health = 75, $maxHealth = 75)
    {
        $this->maxHealth = $maxHealth;
        $this->health = $health;
        $this->attack = $attack;
    }

    public function attack(Character $player, $alert = true)
    {
        if ($alert)
            echo Console::red("The Orc attacked \"".$player->getName(). "\"\n");
        $player->setHealth($player->getHealth() - $this->attack);
    }

    public function __destruct()
    {
        echo Console::green("The Orc is dead.\n");
    }

    /**
     * @param int $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param boolean $return
     * @return string|boolean
     */
    public function printInlineStats($return = true)
    {
        if ($return) {
            return "Health: " . $this->health . "\t Attack: " . number_format($this->attack, 2);
        } else {
            echo "Health: " . $this->health . "\t Attack: " . number_format($this->attack, 2);
        }
        return false;
    }

    /**
     * @return string
     */
    public function getEnemyType()
    {
       return str_replace(__NAMESPACE__ . '\\', '', get_class($this));
    }
}