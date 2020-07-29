<?php

namespace Runalyze\Devices\Device;

class GarminForerunner405 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_405;
    }

    public function getName()
    {
        return 'Forerunner 405';
    }
}