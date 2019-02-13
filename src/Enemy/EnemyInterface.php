<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj <arjeta.avllaj14@gmail.com>
 * Date: 2/12/19
 * Time: 8:10 PM
 */

namespace Arjeta\Enemy;


use Arjeta\Character;

interface EnemyInterface
{
    /**
     * EnemyInterface constructor.
     * @param $attack
     * @param $health
     * @param $maxHealth
     */
    public function __construct($attack, $health, $maxHealth);

    /**
     * @param int $health
     * @return mixed
     */
    public function setHealth($health);

    /**
     * @return mixed
     */
    public function getHealth();

    /**
     * @param Character $player
     * @param bool $alert
     * @return mixed
     */
    public function attack(Character $player, $alert = true);

    /**
     * @return string
     */
    public function getEnemyType();

    /**
     *
     */
    public function __destruct();

    /**
     * @param bool $return
     * @return mixed
     */
    public function printInlineStats($return = true);
}