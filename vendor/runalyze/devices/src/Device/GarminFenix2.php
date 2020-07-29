<?php

namespace Runalyze\Devices\Device;

class GarminFenix2 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FENIX_2;
    }

    public function getName()
    {
        return 'Fenix 2';
    }

    public function hasBarometer()
    {
        return true;
    }
}