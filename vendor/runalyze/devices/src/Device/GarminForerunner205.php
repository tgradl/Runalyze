<?php

namespace Runalyze\Devices\Device;

class GarminForerunner205 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_205;
    }

    public function getName()
    {
        return 'Forerunner 205';
    }
}