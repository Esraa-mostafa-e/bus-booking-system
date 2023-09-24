<?php

namespace App\Enum;

enum BookingStatus: int
{
    case PENDING = 1;
    case PROCESSING = 2;
    case COMPLETED = 3;

}