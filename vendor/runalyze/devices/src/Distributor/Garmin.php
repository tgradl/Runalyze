<?php

namespace Runalyze\Devices\Distributor;

class Garmin implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::GARMIN;
    }
    
    public function getName()
    {
        return 'Garmin';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}