<?php

namespace Runalyze\Devices\Device;

class GarminForerunner630 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_630;
    }

    public function getName()
    {
        return 'Forerunner 630';
    }
}