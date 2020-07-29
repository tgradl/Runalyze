<?php

namespace Runalyze\Devices\Device;

class GarminForerunner225 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_225;
    }

    public function getName()
    {
        return 'Forerunner 225';
    }
}