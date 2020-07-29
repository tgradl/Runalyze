<?php

namespace Runalyze\Devices\Device;

class GarminForerunner10 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_10;
    }

    public function getName()
    {
        return 'Forerunner 10';
    }
}