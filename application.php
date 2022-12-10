<?php
namespace App;

use App\houseBuilder;
use App\Director;
use App\houseFancyStatuesBuilder;
use App\houseGarageBuilder;
use App\houseGardenBuilder;
use App\houseSwimmingPoolBuilder;

class Application 
{
    public static function makehouse(){ 
        $director = new Director();
        
        $FancyStauebuilder = new houseFancyStatuesBuilder();
        $director->setHouseBuilder($FancyStauebuilder);
    
        echo "House With Fancy Statues:\n";
        $director->makeHouseWithFancyStatues();
        $FancyStauebuilder->getResult()->listParts();
    
        $Garagebuilder = new houseGarageBuilder();
        $director->setHouseBuilder($Garagebuilder);
    
        echo "House With Garage:\n";
        $director->makeHouseWithGarage();
        $Garagebuilder->getResult()->listParts();
    
        $Gardenbuilder = new houseGardenBuilder();
        $director->setHouseBuilder($Gardenbuilder);
    
        echo "House With Garden:\n";
        $director->makeHouseWithGarden();
        $Gardenbuilder->getResult()->listParts();
    
        $SwimmingPoolbuilder = new houseSwimmingPoolBuilder();
        $director->setHouseBuilder($SwimmingPoolbuilder);
    
        echo "House With Swimming Pool:\n";
        $director->makeHouseWithSwimmingPool();
        $SwimmingPoolbuilder->getResult()->listParts();
    }
}
?>