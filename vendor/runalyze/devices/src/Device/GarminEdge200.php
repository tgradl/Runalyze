<?php

namespace Runalyze\Devices\Device;

class GarminEdge200 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_200;
    }

    public function getName()
    {
        return 'Edge 200';
    }
}