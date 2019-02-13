<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj  <arjeta.avllaj14@gmail.com>
 * Date: 2019-02-09
 * Time: 13:51
 */

namespace Arjeta;

use Arjeta\Enemy\EnemyInterface;
use Arjeta\Util\Console;

abstract class Character
{
    protected $name;
    protected $health;
    protected $maxHealth;
    protected $attack;
    protected $range;

    /**
     * Character constructor.
     * @param string $name
     * @param int $maxHealth
     * @param int $health
     * @param float $attack
     */
    public function __construct($name = "Unknown player", $maxHealth = 100, $health = 100, $attack = 7.00)
    {
        $this->name = $name;
        $this->maxHealth = $maxHealth;
        $this->health = $health;
        $this->attack = $attack;
    }

    /**
     *
     */
    public function printInfo()
    {
        echo "Player ". "\"$this->name\" is created as " .str_replace(__NAMESPACE__ . '\\', '', get_class($this)) .
            "\nHealth is: " .$this->health. "\t Attack is: " .number_format($this->attack,2). "\n";
    }

    /**
     * @param Character $me
     * @param boolean $return
     * @return string|boolean
     */
    public static function printInlineStats(Character $me, $return = true)
    {
        if ($return)
            return "Health: " .$me->health. "\t Attack: " .number_format($me->attack,2);
        else
            echo "Health: " .$me->health. "\t Attack: " .number_format($me->attack,2);
        return false;
    }

    /**
     * @param boolean $return
     * @return string|boolean
     */
    public function printStats($return = true)
    {
        if ($return)
            return "Health: " .$this->health. "\t Attack: " .number_format($this->attack,2);
        else
            echo "Health: " .$this->health. "\t Attack: " .number_format($this->attack,2);
        return false;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health)
    {
        $this->health = $health;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @param mixed $range
     */
    public function setRange($range)
    {
        $this->range = $range;
    }

    /**
     * @return mixed
     */
    public function getMaxHealth()
    {
        return $this->maxHealth;
    }

    /**
     * @param mixed $maxHealth
     */
    public function setMaxHealth($maxHealth)
    {
        $this->maxHealth = $maxHealth;
    }

    /**
     * @param EnemyInterface $enemy
     * @param bool $alert
     */
    public function attackEnemy(EnemyInterface $enemy,$alert = true)
    {
        if ($alert)
            echo Console::blue($this->getName(). " attacked the ".$enemy->getEnemyType()."\n");
        $enemy->setHealth($enemy->getHealth()-$this->attack);
    }
}
