<?php

namespace App\Enums;

enum TableStatus:string
{
    
    case Available = 'available';
    case Not_Available = 'not available';

    public function color(): string
    {
        return match($this) 
        {   
            self::Available => 'green',   
            self::Not_Available => 'red',   
        };
    }
}