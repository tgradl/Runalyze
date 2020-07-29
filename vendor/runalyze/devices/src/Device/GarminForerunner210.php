<?php

namespace Runalyze\Devices\Device;

class GarminForerunner210 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_210;
    }

    public function getName()
    {
        return 'Forerunner 210';
    }
}