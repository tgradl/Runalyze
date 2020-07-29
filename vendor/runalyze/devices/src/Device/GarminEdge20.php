<?php

namespace Runalyze\Devices\Device;

class GarminEdge20 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_20;
    }

    public function getName()
    {
        return 'Edge 20';
    }
}