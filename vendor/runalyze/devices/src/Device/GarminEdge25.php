<?php

namespace Runalyze\Devices\Device;

class GarminEdge25 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_25;
    }

    public function getName()
    {
        return 'Edge 25';
    }
}