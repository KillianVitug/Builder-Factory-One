<?php

namespace App;

use App\Application;
use App\houseBuilder;
use App\houseFancyStatuesBuilder;
use App\houseGarageBuilder;
use App\houseGardenBuilder;
use App\houseSwimmingPoolBuilder;

abstract class House
{
    protected $door;
    protected $window;
    protected $wall;
    protected $roof;
    protected $foundation;
}

class HouseWithGarden extends House{
	public function connect(){
		//do some things to get public secret keys and set in the right properties
	}
}

class HouseWithGarage extends House{
	public function connect(){
			//do some things to get public secret keys and set in the right properties
	}
}

class HouseWithSwimmingPool extends House{
	public function connect(){
			//do some things to get public secret keys and set in the right properties
	}
}

class HouseWithFancyStatue extends House{
	public function connect(){
			//do some things to get public secret keys and set in the right properties
	}
}








?>






door
windows
wall
roof
foundation
HouseWithGarden
HouseWithGarage
HouseWithSwimmingPool
HouseWithFancyStatue