<?php

namespace Runalyze\Devices\Device;

class GarminForerunner610 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_610;
    }

    public function getName()
    {
        return 'Forerunner 610';
    }
}