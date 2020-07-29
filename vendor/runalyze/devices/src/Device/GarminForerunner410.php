<?php

namespace Runalyze\Devices\Device;

class GarminForerunner410 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_410;
    }

    public function getName()
    {
        return 'Forerunner 410';
    }
}