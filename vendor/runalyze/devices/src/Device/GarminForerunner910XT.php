<?php

namespace Runalyze\Devices\Device;

class GarminForerunner910XT extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_910_X_T;
    }

    public function getName()
    {
        return 'Forerunner 910XT';
    }

    public function hasBarometer()
    {
        return true;
    }
}