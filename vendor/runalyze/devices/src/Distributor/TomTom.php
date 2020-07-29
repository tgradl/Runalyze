<?php

namespace Runalyze\Devices\Distributor;

class TomTom implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::TOM_TOM;
    }

    public function getName()
    {
        return 'TomTom';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}