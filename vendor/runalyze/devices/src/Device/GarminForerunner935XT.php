<?php

namespace Runalyze\Devices\Device;

class GarminForerunner935XT extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_935_X_T;
    }

    public function getName()
    {
        return 'Forerunner 935XT';
    }

    public function hasBarometer()
    {
        return true;
    }
}