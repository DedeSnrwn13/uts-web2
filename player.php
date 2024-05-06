<?php

class Player extends Database {
    public function displayInfo() {
        return "Nama Pemain: " . $this->getName() . ", Umur: " . $this->getAge() . ", Klub: " . $this->getClub() . ", Posisi: " . $this->getPosition();
    }

    public static function __callStatic($method, $arguments) {
        if ($method == "getPlayerInfo") {
            if (count($arguments) == 1) {
                self::getPlayerInfo($arguments[0]);
            } else {
                echo "Invalid number of arguments!";
            }
        } else {
            echo "Static method does not exist!";
        }
    }

    private static function getPlayerInfo($playerID) {
        echo "Player information requested for player with ID: " . $playerID;
    }
}