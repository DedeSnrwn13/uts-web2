<?php

class Admin extends Player
{
    private $username;
    private $password;

    public function __construct($id, $name, $age, $club, $position, $image, $username, $password)
    {
        parent::__construct($id, $name, $age, $club, $position, $image);
        $this->username = $username;
        $this->password = $password;
    }

    public function __call($method, $arguments) {
        if ($method == "addPlayer") {
            if (count($arguments) == 1) {
                $this->addPlayer($arguments[0]);
            } else {
                echo "Invalid number of arguments!";
            }
        } else {
            echo "Method does not exist!";
        }
    }

    private function addPlayer($playerName) {
        echo "New player added: " . $playerName;
    }
}
