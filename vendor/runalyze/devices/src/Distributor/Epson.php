<?php

namespace Runalyze\Devices\Distributor;

class Epson implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::EPSON;
    }

    public function getName()
    {
        return 'Epson';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}