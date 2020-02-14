<?php

class Pokemon{

    private $name;
    private $description;
    private $life;
    private $atak;

    private $avatar; // Path to Image

    public function __construct($name,  $life, $atak, $description, $avatar)
    {
        $this->name = $name;
        $this->description = $description;
        $this->life = $life;
        $this->atak = $atak;
        $this->avatar = $avatar;
    }

    public function getName(){
        return $this->name;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getLife(){
        return $this->life;
    }
    public function getAtak(){
        return $this->atak;
    }

    public function getAvatar(){
        return $this->avatar;
    }
    public function getStats() {
        return $this->name;
        return $this->description;
        return $this->life;
        return $this->atak;
    }

}
