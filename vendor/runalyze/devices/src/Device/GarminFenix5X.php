<?php

namespace Runalyze\Devices\Device;

class GarminFenix5X extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_5_X;
    }

    public function getName()
    {
        return 'Fenix 5X';
    }

    public function hasBarometer()
    {
        return true;
    }
}