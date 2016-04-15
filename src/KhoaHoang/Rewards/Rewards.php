<?php

 /*
 *  _                       _           _ __  __ _             
 * (_)                     (_)         | |  \/  (_)            
 *  _ _ __ ___   __ _  __ _ _  ___ __ _| | \  / |_ _ __   ___  
 * | | '_ ` _ \ / _` |/ _` | |/ __/ _` | | |\/| | | '_ \ / _ \ 
 * | | | | | | | (_| | (_| | | (_| (_| | | |  | | | | | |  __/ 
 * |_|_| |_| |_|\__,_|\__, |_|\___\__,_|_|_|  |_|_|_| |_|\___| 
 *                     __/ |                                   
 *                    |___/                                                                     
 * 
//Made by Khoa Hoang -->
//My first plugin :P
//----------REWARDs PLUGIN---------------\\
  * 
  */
namespace KhoaHoang\Rewards;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
//I forgot the ";" so I recieved an error :P

//The commands
use pocketmine\event\player;

class Rewards extends PluginBase{
    public function onLoad(){
        $this->getLogger()->info(TextFormat::RED."Prepair to load...");
        $this->getLogger()->info(TextFormat::RED."Loading classes...");
        
        $this->getLogger()->info(TextFormat::YELLOW."Fetching your server information...");
        $this->getLogger()->info(TextFormat::GREEN."Finishing loader...");
    }
    public function onEnable(){
        $this->getLogger()->info(TextFormat::GREEN."Successfully loading!");
        $this->getLogger()->notice(TextFormat::RED."NOTE: This is an In-Dev version of Rewards (0.10), so it might have some bugs. If you found it, reply to me!");
    }   
    public function onJoin(PlayerJoinEvent $event, PlayerDeathEvent $deathevent){
          $player = $event->getPlayer();
          $name = $player->getName();
          $inventory = $player->getInventory();
          $inventory->addItem(Item::get(357,0,10));
          $inventory->sendMessage(TextFormat::GOLD."Hey $name, here is your free cookies! :)");
          $dplayer = $deathevent->getPlayer();
          $dname = $dplayer->getName();
          $dinventory = $dplayer->getInventory();
          $dinventory->addItem(Item::get(364,0,5));
          $dinventory->sendMessage(TextFormat::GOLD."Hey $dname, here is your free death reward! :)");
          }
          public function onDisable(){
              $this->getLogger()->info(TextFormat::RED."Plugin disabled!");
    }
}