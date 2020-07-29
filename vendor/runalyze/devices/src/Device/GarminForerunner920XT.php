<?php

namespace Runalyze\Devices\Device;

class GarminForerunner920XT extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_920_X_T;
    }

    public function getName()
    {
        return 'Forerunner 920XT';
    }

    public function hasBarometer()
    {
        return true;
    }
}