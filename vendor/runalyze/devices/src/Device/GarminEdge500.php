<?php

namespace Runalyze\Devices\Device;

class GarminEdge500 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_500;
    }

    public function getName()
    {
        return 'Edge 500';
    }
}