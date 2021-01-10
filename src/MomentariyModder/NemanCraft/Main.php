<?php

namespace MomentariyModder\NemanCraft;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;

class Main extends PluginBase{

    public function onEnable() : void{};

    public function onCommand(CommandSender $sender,Command $cmd,String $label,Array $args) : bool {
        switch($cmd->getName()){
            case "helperlvl1":
                
                 {

                    $command = "setsuffix " . $player->

