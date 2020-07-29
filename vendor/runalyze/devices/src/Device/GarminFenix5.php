<?php

namespace Runalyze\Devices\Device;

class GarminFenix5 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_5;
    }

    public function getName()
    {
        return 'Fenix 5';
    }

    public function hasBarometer()
    {
        return true;
    }
}