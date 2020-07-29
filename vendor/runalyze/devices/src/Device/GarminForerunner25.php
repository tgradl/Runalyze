<?php

namespace Runalyze\Devices\Device;

class GarminForerunner25 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_25;
    }

    public function getName()
    {
        return 'Forerunner 25';
    }
}