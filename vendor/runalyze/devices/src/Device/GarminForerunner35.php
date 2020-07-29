<?php

namespace Runalyze\Devices\Device;

class GarminForerunner35 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_35;
    }

    public function getName()
    {
        return 'Forerunner 35';
    }
}