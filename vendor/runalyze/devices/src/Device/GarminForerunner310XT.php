<?php

namespace Runalyze\Devices\Device;

class GarminForerunner310XT extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_FORERUNNER_310_X_T;
    }

    public function getName()
    {
        return 'Forerunner 310XT';
    }
}