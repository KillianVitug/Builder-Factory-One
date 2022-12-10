<?php

namespace App;

use App\Application;
use App\houseBuilder;
use App\Director;
use App\houseFancyStatuesBuilder;
use App\houseGarageBuilder;
use App\houseGardenBuilder;
use App\houseSwimmingPoolBuilder;

class houseGardenBuilder implements houseBuilder
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Garden();
    }

    public function buildDoors(): void
    {
        $this->product->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->product->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->product->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->product->parts[] = "Roof";
    }

    public function buildFlooring(): void
    {
        $this->product->parts[] = "Flooring";
    }

    public function buildFoundation(): void
    {
        $this->product->parts[] = "Foundation";
    }

    public function buildGarden(): void
    {
        $this->product->parts[] = "Garden";
    }

    public function getResult(): Garden
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}

class Garden
{
    public $parts = [];
    
    public function listParts(): void 
    {
        echo "House Parts: " . implode(', ', $this->parts) . "\n\n";
    }
}
?>
