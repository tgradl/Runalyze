<?php

namespace Runalyze\Devices\Device;

use Runalyze\Devices\Distributor\DistributorProfile;

trait GarminDeviceTrait
{
    public function getDistributorEnum()
    {
        return DistributorProfile::GARMIN;
    }
}