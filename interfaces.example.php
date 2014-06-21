<?php
include("Class.interfaces.example.php");

class Moto implements AutoMotor {
    private $engine_running = false;
    private $speed = 0;

    public function join() {
        $this->engine_running = true;
    }
    public function unjoin() {
        $this->engine_running = false;
    }
    public function accelerate() {
        $this->speed++;
    }
    public function brake() {
        $this->speed--;
    }
    public function isRunning() {
        return $this->engine_running;
    }
    public function atualSpeed(){
	return $this->speed;
    }
}

$moto = new Moto;
$moto->join();
print " The Moto is running? '" . ($moto->isRunning()? 'yes':'no') . "' <br />";
print "The Moto speed: '" . $moto->atualSpeed() . "' <br />";
$moto->accelerate();
print " Update moto speed: '" . $moto->atualSpeed() . "'";
