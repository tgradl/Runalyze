<?php

namespace Runalyze\Devices\Device;

class GarminForerunner15 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_15;
    }

    public function getName()
    {
        return 'Forerunner 15';
    }
}