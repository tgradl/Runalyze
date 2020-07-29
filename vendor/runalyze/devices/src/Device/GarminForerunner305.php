<?php

namespace Runalyze\Devices\Device;

class GarminForerunner305 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_305;
    }

    public function getName()
    {
        return 'Forerunner 305';
    }
}