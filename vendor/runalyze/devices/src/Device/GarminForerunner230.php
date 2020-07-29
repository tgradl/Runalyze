<?php

namespace Runalyze\Devices\Device;

class GarminForerunner230 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_230;
    }

    public function getName()
    {
        return 'Forerunner 230';
    }
}