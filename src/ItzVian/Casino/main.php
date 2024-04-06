<?php

declare(strict_types=1);

namespace ItzVian\Casino;

use ItzVian\Casino\libs\FormAPI\CustomForm;
use ItzVian\Casino\libs\FormAPI\Form;
use ItzVian\Casino\libs\FormAPI\FormAPI;
use ItzVian\Casino\libs\FormAPI\ModalForm;
use ItzVian\Casino\libs\FormAPI\SimpleForm;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use onebone\coinapi\CoinAPI;

class main extends PluginBase implements Listener {
    public function onEnable(): void{
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onCommand(CommandSender $player, Command $cmd, String $label, Array $args): bool{
        switch($cmd->getName()){
            case "casino":
                if($player instanceof Player){
                    $this->casinoui($player);
                }
        }
        return true;
    }

    public function casinoui($player){
        $form = new SimpleForm(function (Player $player, int $data = null){
            if($data === null){
                return true;
            }

            switch($data){
                case 0:
                    $this->coinbet($player);
                break;

                case 1:
                    $this->numbergame($player);
                break;

                case 2:
                    $this->coinflip($player);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("main_ui"));
        $form->addButton($this->getConfig()->get("coin_bet"));
        $form->addButton($this->getConfig()->get("number_game"));
        $form->addButton($this->getConfig()->get("coin_flip"));
        $player->sendForm($form);
        return $form;
    }

    public function coinbet($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }

            $coin = CoinAPI::getInstance()->myCoin($player);
            if($data[0] >= $this->getConfig()->get("minimum_amount") and $data[0] <= $this->getConfig()->get("maximum_amount")){
                if($coin >= $data[0]){
                    switch(mt_rand(1, 10)){
                        case 1:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 2:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 3:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 4:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 5:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 6:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 7:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 8:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 9:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                                break;
                            }
                        break;

                    }
                }else{
                    $player->sendMessage("§l§e§6CASINO §e» §r§2Kamu tidak mempunyai cukup coin");
                }
            }else{
                $player->sendMessage("§l§e§6CASINO §e» §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
            }

        });
        $form->setTitle($this->getConfig()->get("coin_betUI"));
        $form->addInput("§eMasukan Jumlah");
        $player->sendForm($form);
        return $form;
    }

    public function numbergame($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }
            $coin = CoinAPI::getInstance()->myCoin($player);
            if($data[0] <= 10){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[0] <= $this->getConfig()->get("maximum_amount")){
                    if($coin >= $data[1]){
                        $number = random_int(1,10);
                        if($data[0] == $number){
                            $value = $data[1] * 2;
                            CoinAPI::getInstance()->addCoin($player, $value);
                            $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                        }else{
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§e§6CASINO §e» §r§cKamu kalah");
                        }
                    }else{
                        $player->sendMessage("§l§e§6CASINO §e» §r§2Kamu tidak mempunyai cukup coin");
                    }
                }else{
                    $player->sendMessage("§l§e§6CASINO §e» §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§e§6CASINO §e» §r§cMasukan nomor antara 1 sampai 10");
            }
        });
        $form->setTitle($this->getConfig()->get("number_gameUI"));
        $form->addInput("§eEnter the number from 1-10");
        $form->addInput("§eMasukan Jumlah");
        $player->sendForm($form);
        return $form;
    }

    public function coinflip($player){
        $form = new CustomForm(function (Player $player, array $data = null){
            if($data === null){
                return true;
            }
            $coin = CoinAPI::getInstance()->myCoin($player);
            if(strtolower($data[0]) == "heads"){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[1] <= $this->getConfig()->get("maximum_amount")){
                    switch(mt_rand(1,2)){
                        case 1:
                            $value = $data[1] * 2;
                            CoinAPI::getInstance()->addCoin($player, $value);
                            $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                        break;

                        case 2:
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§e§6CASINO §e» §r§2Coin mendarat dibagian ekor");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§e§6CASINO §e» §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }elseif(strtolower($data[0]) == "tails"){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[1] <= $this->getConfig()->get("maximum_amount")){
                    switch(mt_rand(1,2)){
                        case 1:
                            $value = $data[1] * 2;
                            CoinAPI::getInstance()->addCoin($player, $value);
                            $player->sendMessage("§l§e§6CASINO §e» §r§2Selamat, kamu menang");
                        break;

                        case 2:
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§e§6CASINO §e» §r§2Coin mendarat dibagian kepala");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§e§6CASINO §e» §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§e§6CASINO §e» §r§fKamu harus memilih antara kepala atau ekor");
            }
        });
        $form->setTitle($this->getConfig()->get("coin_flipUI"));
        $form->addInput("§ekepala atau ekor");
        $form->addInput("§eMasukan Jumlah");
        $player->sendForm($form);
        return $form;
    }
}
