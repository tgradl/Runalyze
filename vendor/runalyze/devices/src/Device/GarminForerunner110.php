<?php

namespace Runalyze\Devices\Device;

class GarminForerunner110 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_110;
    }

    public function getName()
    {
        return 'Forerunner 110';
    }
}