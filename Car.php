<?php

class Car
{
    private int $nbWheels = 4;

    private int $currentSpeed = 0;

    private string $color;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel = 2;

    public function __construct(string $color, int $nbSeats, string $energy) {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels(): string {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): string {
        return $this->currentSpeed;
    }

    public function getColor(): string {
        return $this->color;
    }

    public function getNbSeats(): string {
        return $this->nbSeats;
    }

    public function getEnergy(): string {
        return $this->energy;
    }

    public function getEnergyLevel(): string {
        return $this->energylevel;
    }

    public function forward(): string {
        $this->currentSpeed = 25;

        return "Go !";
    }

    public function brake(): string {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start() {
        return "Démarrage du moteur, activation des phares et lancement du gps.";
    }
}