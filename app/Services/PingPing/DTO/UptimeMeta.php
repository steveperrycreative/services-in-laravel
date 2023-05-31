<?php

namespace App\Services\PingPing\DTO;

use Carbon\Carbon;
use Spatie\DataTransferObject\DataTransferObject;

class UptimeMeta extends DataTransferObject
{
    public int $httpStatusCode;
    public int $averageUptimePercentage;
    public int $averageResponseTime;
    public null|Carbon $offlineSince;
}
