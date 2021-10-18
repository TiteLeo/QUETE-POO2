<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity, string $loading)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->loading = $loading;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): Truck
    {
        if (in_array($loading, self::ALLOWED_Loading)) {
            $this->loading = $loading;
        }
        return $this;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function full(): string
    {
        $full="";
        if($this->getLoading() < $this->getStorageCapacity()) {
            $full = 'in filling';

        }else{
            $full= 'full';
        }
        return $full;
    }

}

