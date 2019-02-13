#!/usr/bin/env php
<?php
/**
 * Created by PhpStorm.
 * User: Arjeta Avllaj <arjeta.avllaj14@gmail.com>
 * Date: 2019-02-09
 * Time: 13:00
 */

include 'vendor/autoload.php';

use Arjeta\Archer;
use Arjeta\Enemy\Orc;
use Arjeta\Fighter;
use Arjeta\Util\Console;
use Arjeta\Wizard;

$gotPlayerName = false;
$gotPlayerType = false;

while (!($gotPlayerName == true && $gotPlayerType == true)) {

    if($gotPlayerName == false){
        $name = readline("Please enter your name: ");
        if (strlen($name) >= 3) {
            $gotPlayerName = true;
        } else {
            echo Console::red("The player name should be at least three characters long.\n");
            continue;
        }
    }

    if($gotPlayerType == false){
        $lines = [
            "Please define the character you want to play:",
            Console::yellow("[1]") . Console::bold(". Archer"). " (". Archer::printInlineStats(new Archer()). ")",
            Console::yellow("[2]") . Console::bold(". Wizard"). " (". Wizard::printInlineStats(new Wizard()). ")",
            Console::yellow("[3]") . Console::bold(". Fighter"). " (". Fighter::printInlineStats(new Fighter()). ")",
        ];
        echo join(PHP_EOL, $lines)."\n";
        $type = readline("Select your character type: ");
        switch ($type){
            case 1:
                $player = new Arjeta\Archer($name);
                $gotPlayerType = true;
                break;
            case 2:
                $player = new Arjeta\Wizard($name);
                $gotPlayerType = true;
                break;
            case 3:
                $player = new Arjeta\Fighter($name);
                $gotPlayerType = true;
                break;
            case null:
                echo Console::red("You should choose a character type in order to start playing the game.\n");
                $gotPlayerType = false;
                continue;
            default:
                echo Console::red("You have selected an invalid character type number.\n");
                $gotPlayerType = false;
                continue;
        }
    } else {
        continue;
    }
}

//echo "███████████";
echo "[███████████  ]\n";
$player->printInfo();

echo Console::green("\nReady to play game\n\n");

$enemy = new Orc();

echo "Player: ".$player->printStats()."\n";
echo "Enemy: ".$enemy->printInlineStats()."\n";


$player->attackEnemy($enemy);
$player->attackEnemy($enemy);
$player->attackEnemy($enemy);

$enemy->attack($player);
$enemy->attack($player);

echo "Player: ".$player->printStats()."\n";
echo "Enemy: ".$enemy->printInlineStats()."\n";
