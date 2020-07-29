<?php

namespace Runalyze\Devices\Device;

class GarminEdge520 extends AbstractDevice
{
    use GarminDeviceTrait;

    public function getEnum()
    {
        return DeviceProfile::GARMIN_EDGE_520;
    }

    public function getName()
    {
        return 'Edge 520';
    }
}