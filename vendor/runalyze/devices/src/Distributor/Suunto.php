<?php

namespace Runalyze\Devices\Distributor;

class Suunto implements DistributorInterface
{
    public function getEnum()
    {
        return DistributorProfile::SUUNTO;
    }

    public function getName()
    {
        return 'Suunto';
    }

    public function getDeviceEnumList()
    {
        return [];
    }
}