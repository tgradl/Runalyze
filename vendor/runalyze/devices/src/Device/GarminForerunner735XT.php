<?php

namespace Runalyze\Devices\Device;

class GarminForerunner735XT extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_735_X_T;
    }

    public function getName()
    {
        return 'Forerunner 735XT';
    }

    public function hasBarometer()
    {
        return false;
    }
}