<?php

namespace Runalyze\Devices\Device;

class GarminForerunner235 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_235;
    }

    public function getName()
    {
        return 'Forerunner 235';
    }
}