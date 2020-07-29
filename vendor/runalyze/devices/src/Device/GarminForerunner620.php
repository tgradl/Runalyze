<?php

namespace Runalyze\Devices\Device;

class GarminForerunner620 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_620;
    }

    public function getName()
    {
        return 'Forerunner 620';
    }
}