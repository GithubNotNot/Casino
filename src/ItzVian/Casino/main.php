<?php

declare(strict_types=1);

namespace ItzVian\Casino;

use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use onebone\coinapi\CoinAPI;
use jojoe77777\FormAPI\Form;
use jojoe77777\FormAPI\SimpleForm;
use jojoe77777\FormAPI\CustomForm;
use jojoe77777\FormAPI\SimpleForm;

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
        $form->setContent("content ui tes");
        $form->addButton($this->getConfig()->get("coin_bet", 1, "https://cdn.discordapp.com/attachments/1135948297475997737/1191834507746234398/maquina-tragamonedas-dibujos-animados-dinero-ilustracion-juegos-casino_863013-8079.jpg?ex=65a6e161&is=65946c61&hm=2be3fc91c56e207a20c6226994197f51e64ada0cd3149eca0391e79826e4ada2&"));
        $form->addButton($this->getConfig()->get("number_game", 1, "https://cdn.discordapp.com/attachments/1135948297475997737/1191834507284848792/juego-casino-linea-tragamonedas-casino-fichas-colores_30996-3132.jpg?ex=65a6e161&is=65946c61&hm=e77d235a13c74c3056005eda411df71fe5db4764986f3652471e4a0c139099b1&"));
        $form->addButton($this->getConfig()->get("coin_flip", 1, "https://cdn.discordapp.com/attachments/1135948297475997737/1191834507037380658/maquina-tragamonedas-dibujos-animados-dinero-ilustracion-juegos-casino_863013-8070.jpg?ex=65a6e161&is=65946c61&hm=0b7bd11b3ccca7e0ba9ae8f04499764b8b475a066869a669d3fdc56463aeea96&"));
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
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 2:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 3:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 4:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 5:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 6:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 7:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 8:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                        case 9:
                            switch(mt_rand(1,2)){
                                case 1:
                                    $value = $data[0] * 2;
                                    CoinAPI::getInstance()->addCoin($player, $value);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                                break;

                                case 2:
                                    CoinAPI::getInstance()->reduceCoin($player, $data[0]);
                                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                                break;
                            }
                        break;

                    }
                }else{
                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Kamu tidak mempunyai cukup coin");
                }
            }else{
                $player->sendMessage("§l§eHAPPY | §6CASINO  §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
            }

        });
        $form->setTitle($this->getConfig()->get("coin_betUI"));
        $form->setContent("content ui tes");
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
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                        }else{
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§cKamu kalah");
                        }
                    }else{
                        $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Kamu tidak mempunyai cukup coin");
                    }
                }else{
                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§6CS §r§e>> §fPlease enter the number between 1-10");
            }
        });
        $form->setTitle($this->getConfig()->get("number_gameUI"));
        $form->setContent("content ui tes");
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
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                        break;

                        case 2:
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Coin mendarat dibagian ekor");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }elseif(strtolower($data[0]) == "tails"){
                if($data[1] >= $this->getConfig()->get("minimum_amount") and $data[1] <= $this->getConfig()->get("maximum_amount")){
                    switch(mt_rand(1,2)){
                        case 1:
                            $value = $data[1] * 2;
                            CoinAPI::getInstance()->addCoin($player, $value);
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Selamat, kamu menang");
                        break;

                        case 2:
                            CoinAPI::getInstance()->reduceCoin($player, $data[1]);
                            $player->sendMessage("§l§eHAPPY | §6CASINO  §r§2Coin mendarat dibagian kepala");
                        break;
                    }
                }else{
                    $player->sendMessage("§l§eHAPPY | §6CASINO  §r§fMinimal jumlah untuk memulai adalah $" . $this->getConfig()->get("minimum_amount") . " dan maximal $" . $this->getConfig()->get("maximum_amount"));
                }
            }else{
                $player->sendMessage("§l§eHAPPY | §6CASINO  §r§fKamu harus memilih antara kepala atau ekor");
            }
        });
        $form->setTitle($this->getConfig()->get("coin_flipUI"));
        $form->setContent("content ui tes");
        $form->addInput("§ekepala atau ekor");
        $form->addInput("§eMasukan Jumlah");
        $player->sendForm($form);
        return $form;
    }
}
