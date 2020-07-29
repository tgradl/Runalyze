<?php

namespace Runalyze\Devices\Distributor;

class Polar implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::POLAR;
    }

    public function getName()
    {
        return 'Polar';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}