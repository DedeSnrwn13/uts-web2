<?php

class Admin extends Database {
    private $username;
    private $email;
    private $password;

    public function __construct($username, $email, $password) {
        parent::__construct();
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function displayInfo() {
        return "Username Admin: " . $this->getUsername() . ", Email: " . $this->getEmail();
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