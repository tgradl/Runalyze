<?php

namespace Runalyze\Devices\Device;

class GarminFenix3 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_3;
    }

    public function getName()
    {
        return 'Fenix 3';
    }

    public function hasBarometer()
    {
        return true;
    }
}