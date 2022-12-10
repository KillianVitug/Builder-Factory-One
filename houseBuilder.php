<?php

namespace App;

/**
 * The Builder interface specifies methods for creating the different parts of
 * the Product objects.
 */
interface houseBuilder
{
    public function buildDoors(): void;

    public function buildWindows(): void;

    public function buildWalls(): void;
    
    public function buildRoof(): void;

    public function buildFlooring(): void;

    public function buildFoundation(): void;

    //public function getResult(): void;
    
}






