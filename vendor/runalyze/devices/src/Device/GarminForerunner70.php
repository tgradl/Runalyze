<?php

namespace Runalyze\Devices\Device;

class GarminForerunner70 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_70;
    }

    public function getName()
    {
        return 'Forerunner 70';
    }
}