<?php

namespace Runalyze\Devices\Device;

class GarminEdge810 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_810;
    }

    public function getName()
    {
        return 'Edge 810';
    }
}