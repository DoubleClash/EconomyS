<?php

namespace onebone\economyapi\commands;

use pocketmine\command\CommandSender;

use onebone\economyapi\EconomyAPI;

class SetLangCommand extends EconomyAPICommand{
	private $plugin, $cmd;
	
	public function __construct(EconomyAPI $plugin, $cmd = "setlang"){
		parent::__construct($cmd, $plugin);
		$this->cmd = $cmd;
		$this->setUsage("/$cmd <lang>");
		$this->setPermission("economyapi.command.setlang");
		$this->setDescription("Sets language resource");
	}
	
	public function execute(CommandSender $sender, $label, array $params){
		if(!$this->getPlugin()->isEnabled() or !$this->testPermission($sender)){
			return false;
		}
		
		$lang = implode(" ", $params);
		
		if(trim($lang) === ""){
			$sender->sendMessage("Usage : /".$this->cmd." <lang>");
			return true;
		}
		
		$result = $this->getPlugin()->setLang($lang, $sender->getName());
		if($result === false){
			$sender->sendMessage("Requested language does not exist");
		}else{
			$sender->sendMessage("Your language have been set to ".$result);
		}
		return true;
	}
}