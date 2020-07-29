<?php

namespace Runalyze\Devices\Device;

class GarminEdge1000 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_1000;
    }

    public function getName()
    {
        return 'Edge 1000';
    }
}