<?php

namespace Runalyze\Devices\Device;

use Runalyze\Devices\Distributor\DistributorProfile;

abstract class AbstractDevice implements DeviceInterface
{
    public function getFullName()
    {
        return $this->getDistributor.' '.$this->getName();
    }

    public function getDistributor()
    {
        return DistributorProfile::get($this->getDistributorEnum());
    }

    public function hasBarometer()
    {
        return false;
    }
}