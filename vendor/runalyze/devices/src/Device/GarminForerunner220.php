<?php

namespace Runalyze\Devices\Device;

class GarminForerunner220 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_220;
    }

    public function getName()
    {
        return 'Forerunner 220';
    }
}