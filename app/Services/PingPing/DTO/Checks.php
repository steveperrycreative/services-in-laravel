<?php

namespace App\Services\PingPing\DTO;

use Spatie\DataTransferObject\DataTransferObject;

class Checks extends DataTransferObject
{
    public Uptime $uptime;
    public CertificateHealth $certificateHealth;
}
