<?php

namespace Runalyze\Devices\Device;

class GarminFenix5S extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_5_S;
    }

    public function getName()
    {
        return 'Fenix 5S';
    }

    public function hasBarometer()
    {
        return true;
    }
}