<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    protected int $capacity;
    protected int $loading = 0;
    
    public function __construct(int $capacity, string $color, int $nbSeats, int $currentSpeed)
    {   
        $this->capacity = $capacity;
        parent::__construct($color, $nbSeats, $currentSpeed);
    }


    public function getCapacity(): int 
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoading(): int 
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}