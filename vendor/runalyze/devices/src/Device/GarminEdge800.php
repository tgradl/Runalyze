<?php

namespace Runalyze\Devices\Device;

class GarminEdge800 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_800;
    }

    public function getName()
    {
        return 'Edge 800';
    }
}