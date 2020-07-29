<?php

namespace Runalyze\Devices\Device;

class GarminEdge705 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_705;
    }

    public function getName()
    {
        return 'Edge 705';
    }
}